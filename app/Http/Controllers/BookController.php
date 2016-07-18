<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Book;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

use DB;

class BookController extends Controller
{
    public function index(){
    	//echo "BookController index";
        //$books = Book::all();  
        $books = Book::latest()->paginate(10);
        
    	return view('book/index', array(
    		'books'=>$books));
    }
    
    public function create(){
    	//echo "BookController create";
        return view('book/create');  
    }
    
    public function store(Request $request){
        //echo "BookController store";
        $rules = array(
            'title' => 'required',
            'author' => 'required|alpha',
            'year' => 'required' ,
            'genre' => 'required|alpha' 
            );
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return Redirect::to('books/create')
            ->withErrors($validator)
            ->withInput();
        } else {
            $book = new Book;
            $book->title= $request->title;
            $book->author = $request->author;
            $book->year = $request->year;
            $book->genre = $request->genre;
            $book->client_id = $request->client_id;
            $book->save();
            Session::flash('message', 'New Book Created!!!');
            return Redirect::to('books');
        }
    }
    public function update(Request $request, $id){
        //echo "BookController update";
        $rules = array(
            'title' => 'required',
            'author' => 'required|alpha',
            'year' => 'required' ,
            'genre' => 'required|alpha' 
            );
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return Redirect::to('books/'. $id. '/edit')
            ->withErrors($validator)
            ->withInput();
        } else {
            $book = Book::find($id);
            $book->title= $request->title;
            $book->author = $request->author;
            $book->year = $request->year;
            $book->genre = $request->genre;
            $book->client_id = $request->client_id;
            $book->save();
            Session::flash('message', 'New Book Updated!!!');
            return Redirect::to('books');
        }
    }
    public function edit($id){
        //echo "BookController edit";
        $book = Book::find($id);
        return view('book/edit', array('book'=>$book));
    } 
    public function destroy($id){
        //echo "BookController destroy";
        $book = Book::find($id);
        $book->delete();
        Session::flash('message', 'Удалили Книгу ');
        return Redirect::to('books');      
    }
    public function show($id){
        //echo "BookController show";
        $book = Book::find($id);
        return view('book/show', array('book'=>$book));
    }  
    public function returnbook($id, $id_user){
        $book = Book::find($id);
        $book->client_id = null;
        $book->save();
        return Redirect::to('users/'.$id_user);
    }  
}
