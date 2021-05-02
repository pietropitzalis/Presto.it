<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Models\AnnouncementImage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;
use App\Http\Requests\AnnouncementReq;
use Illuminate\Support\Facades\Storage;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function homepage(Category $category){
        $categories= Category::all();
        return view('welcome',compact('categories'));
    }

    public function index()
    {
        $announcements=Announcement::where('is_accepted',true)
        ->orderBy('created_at', 'desc')
        ->take(5)
        ->get();
        return view('announcement.index',compact('announcements'));
    }

    public function search(Request $request){
        $q=$request->input('q'); 
        $announcements=Announcement::search($q)->where('is_accepted',true)->get();
        return view('announcement.search',compact('q','announcements'));
    }

    public function announcementByCategory($name , $category_id){
       $category = Category::find($category_id);
       $announcements = $category->announcement()
       ->where('is_accepted',true)
       ->orderBy('created_at', 'desc')
       ->paginate(5);
       return view('announcement.cat',compact('category', 'announcements'));
    }

    // public function category(Category $cat){
    //     $announcements=Announcement::where('category_id',$cat)->get();
    //     return view('category', compact('announcements'));
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $categories= Category::all();
        $uniqueSecret = $request->old(
            'uniqueSecret',
            base_convert(sha1(uniqid(mt_rand())), 16, 36)
        ) ;

        return view('announcement.create',compact('uniqueSecret'));


    }
    // public function newAnnouncement(){
       

    //     return view('announcements.create', );
    // }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnnouncementReq $request)
    {
        
            
            $announcement=Announcement::create([
                'title'=>$request->title,
                'description'=>$request->description,
                // 'img'=>$request->file('img')->store('public/img'),
                'price'=>$request->price,
                'category_id'=>$request->category,
                ]);
            

            $uniqueSecret = $request->input('uniqueSecret');
            
            $images = session()->get("images.{$uniqueSecret}");

            $images = session()->get("images.{$uniqueSecret}",[]);
            $removedImages = session()->get("removedImages.{$uniqueSecret}" , []);

            $images = array_diff($images,$removedImages);

            foreach ($images as $image) {
                $i=new AnnouncementImage();

                $fileName = basename($image);
                $newFileName = "public/announcements/{$announcement->id}/{$fileName}";
                Storage::move($image, $newFileName);


                $i->file = $newFileName;
                $i->announcement_id = $announcement->id;

                $i->save();
            }

            File::deleteDirectory(storage_path("/app/public/temp/{$uniqueSecret}"));

            // dd($request->all());
        return redirect(route('announcement.index'))->with('message', "Annuncio inserito con successo,al momento e' in attesa di revisione,verrà pubblicato appena possibile");
    }

    public function getImages(Request $request){

        $uniqueSecret = $request->input('uniqueSecret');
            
        $images = session()->get("images.{$uniqueSecret}");

        $images = session()->get("images.{$uniqueSecret}",[]);
        $removedImages = session()->get("removedImages.{$uniqueSecret}" , []);

        $images = array_diff($images,$removedImages);

        $data=[];

        foreach ($images as $image) {
            $data[] = [
                'id' => $image,
                'src' => Storage::url($image)
            ];
        }

        return response()->json($data);
    }



     public function uploadImage(Request $req){
         
        $uniqueSecret = $req->input('uniqueSecret');

        $fileName = $req->file('file')->store("public/temp/{$uniqueSecret}");

        session()->push("images.{$uniqueSecret}", $fileName);

        return response()->json(
                [
                    'id' => $fileName
                ]   
        
        );

     }

     public function removeImage(Request $req){

        $uniqueSecret = $req->input('uniqueSecret');
        $fileName = $req->input('id');

        session()->push("removedImages.{$uniqueSecret}", $fileName);

        Storage::delete($fileName);

        return response()->json('ok');

     }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function show(Announcement $announcement)
    {
       
        return view('announcement.show', compact('announcement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function edit(Announcement $announcement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Announcement $announcement)
    {
        if($request->img){
            $announcement->image=$request->file('img')->store('public/img');
        }
        $announcement->title=$request->title;
        $announcement->description=$request->description;
        $announcement->price=$request->price;
        $announcement->save();

        return redirect(route('announcement.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Announcement $announcement)
    {
        //
    }
}
