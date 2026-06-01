<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage() {
    return view('welcome');
}

    public function book(){
        return view("book");
    }

    public function youreBooks(Request $request){
        $book= Book::create([
            "name"=>$request->name,
            "surname"=>$request->surname,
            "mail"=>$request->mail,
            "date"=>$request->date,
        ]);
     

        
        return redirect()->back()->with("message","la prenotazione è avvenuta con successo.");
    }

    public function allBooks(){
        $books= Book::all();
        return view("allBooks", ["books"=> $books]);
    }
}
