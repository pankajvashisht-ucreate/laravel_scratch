<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Book;
class BooksController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }


    public function index(){
        $categorires= Category::get();
        $books=Book::Where('user_id',auth()->id())->get();   
        return view('pages.books')->withCategories($categorires)->withBooks($books);
    }

    public function create(){
        $categorires= Category::get();      
        return view('pages.add_book')->withCategories($categorires);
    }

    public function store(Book $book){
        $attribute=request()->validate([
            'category_id' => 'required',
            'book_name' => 'required | min:3',
            'author_name' => 'required | min:3',
            'description' => 'required | min:10 | max:10000'
        ]);
        $book->create($attribute+['user_id' => auth()->id()]);
        flash_message("Book Added Sucessfully",'s');
        return back();
    }


    public function distory(Book $book){
        $book->delete();
        flash_message("Book Deleted Sucessfully",'s');
        return back();
    }

    public function show(Book $book){
          // diffrent way stop this. 
        // abort_unless(auth()->id()==$book->user_id,'403');
        // abort_if(!auth()->user()->owns($book),'403');
        //$this->authorize('view',$book);
        //abort_unless(\Gate::allows('view',$book),403);
       // abort_if(\Gate::denies('view',$book),403);
        $category_details=$book->category()->get()->toArray();
        return view('pages.book_view',compact('book','category_details'));
    }
}
