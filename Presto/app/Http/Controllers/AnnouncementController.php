<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Requests\AnnouncementReq;

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
        $announcements=Announcement::orderBy('created_at', 'desc')->take(5)->get();
        return view('announcement.index',compact('announcements'));
    }

    public function announcementByCategory($name , $category_id){
       $category = Category::find($category_id);
       $announcements = $category->announcement()->orderBy('created_at', 'desc')->paginate(5);
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
    public function create()
    {
        $categories= Category::all();
        return view('announcement.create',compact('categories'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnnouncementReq $request)
    {
        if ($request->file('img')) {
            
            $announcement=Announcement::create([
                'title'=>$request->title,
                'description'=>$request->description,
                'img'=>$request->file('img')->store('public/img'),
                'price'=>$request->price,
                'category_id'=>$request->category,
                ]);
            }else{
                $announcement=Announcement::create([
                    'title'=>$request->title,
                    'description'=>$request->description,
                    'price'=>$request->price,
                    'category_id'=>$request->category,
                    ]);
            }

        return redirect(route('announcement.index'))->with('message', 'Annuncio pubblicato con successo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function show(Announcement $announcement)
    {
       
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
        //
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
