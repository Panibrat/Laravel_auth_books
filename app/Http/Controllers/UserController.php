<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use DB;
class UserController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    	//echo "UserController index";
        //$users = User::all();   
        $users = User::latest()->paginate(10);  
        $count = User::count();
        
    	return view('user/index', array(
    		'users'=>$users,
                'count'=>$count));
    }
    public function create(){
    	//echo "UserController create";
        return view('user/create');  
    }
    
    public function store(Request $request){
        //echo "UserController store";
        $rules = array(
            'firstname' => 'required|alpha',
            'lastname' => 'required|alpha',
            'email' => 'required|email|unique:users'
            );
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return Redirect::to('users/create')
            ->withErrors($validator)
            ->withInput();
        } else {
            $user = new User;
            $user->firstname = $request->firstname;
            $user->lastname = $request->lastname;
            $user->email = $request->email;
            $user->save();
            Session::flash('message', 'Создали юзера');
            return Redirect::to('users');
        }
    }
    
    public function edit($id){
        //echo "UserController edit";
        $user = User::find($id);
        return view('user/edit', array('user'=>$user));
    } 
    
    
   
    
    public function update(Request $request, $id){
        //echo "UserController update";
        $rules = array(
            'firstname' => 'required|alpha',
            'lastname' => 'required|alpha',
            'email' => 'required|email|unique:users'
            );
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){

            return Redirect::back()->withErrors($validator->errors())->withInput();

        } else {

            $user = User::find($id);
            $user->firstname = $request->firstname;
            $user->lastname = $request->lastname;
            $user->email = $request->email;
            $user->save();
            Session::flash('message', 'Изменили юзера');
            return Redirect::to('users');
        }
    
        
    }
    public function destroy($id){
        //echo "UserController destroy";
        $user = User::find($id);
        $user->delete();
        Session::flash('message', 'Удалили юзера ');
        return Redirect::to('users');
        
    }

    public function show($id){
        //echo "UserController show";
        
        $user_books = DB::table('books')->where('client_id', $id)->get();
        
        //dd($user_books);
        
        
        
        
        
        $user = User::find($id);
        //dd($user);
        return view('user/show', array('user'=>$user, 'user_books'=>$user_books));
    } 
}
