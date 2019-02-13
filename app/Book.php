<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mail; 
use App\Mail\BookCreated;
class Book extends Model
{
  

    protected static function boot(){
        parent::boot();
        static::created(function ($book){
            Mail::to('pankaj@ucreate.co.in')->send(
                new BookCreated($book)
            );
        });
    }
    protected $fillable=['category_id','book_name','author_name','description','user_id'];

    public function category(){
        return $this->belongsTo('App\Category', 'category_id');
    }

}
