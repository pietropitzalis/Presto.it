<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;

class Announcement extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'title',
        'description',
        'img',
        'price',
        'category_id',
        'is_accepted',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    static public function ToBeRevisionedCount(){
        return Announcement::where('is_accepted',null)->count();
    }
    public function toSearchableArray()
    {
        $category=$this->category;
        $array = [
            'id'=>$this->id,
            'title'=>$this->title,
            'description'=>$this->description,
            'price'=>$this->price,
            'altro'=>'annuncio vendita post qualcosa',
            'category'=>$category,
        ];
        
        

        return $array;
    }

}
