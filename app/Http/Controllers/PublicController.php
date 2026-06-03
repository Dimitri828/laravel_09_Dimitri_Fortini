<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PublicController extends Controller
{
    public function homepage()
    {
        return view('welcome');
    }

    public function book()
    {
        return view("book");
    }

    public function youreBooks(BookRequest $request)
    {
        $name = $request->name;
        $surname = $request->surname;
        $mail = $request->mail;
        $date = $request->date;
        $img = null;
        if ($request->file("img")) {
            $img = $request->file("img")->store("img", "public");
        }

        Book::create(
            [
                "name" => $name,
                "surname" => $surname,
                "mail" => $mail,
                "date" => $date,
                "img" => $img,

            ]

        );



        return redirect()->back()->with("message", "la prenotazione è avvenuta con successo.");
    }

    public function allBooks()
    {
        $books = Book::all();
        return view("allBooks", ["books" => $books]);
    }
}
