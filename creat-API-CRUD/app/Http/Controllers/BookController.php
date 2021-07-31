<?php

namespace App\Http\Controllers;

use APP\Http\Resources\BookResource;
use App\Models\book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = book::paginate(10);
        return $books;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $books = new book();
        $books->titre = $request->titre;
        $books->description = $request->description;
        $books->date_publication = $request->date_publication;
        $books->nombre_page = $request->nombre_page;
        $books->auteur = $request->auteur;

        if ($books->save() ) {
            return $books;
        }
      }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $books = Book::findOrFail($id);
        return $books;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $books = Book::findOrFail($id);
        $books->titre = $request->titre;
        $books->description = $request->description;
        $books->date_publication = $request->date_publication;
        $books->nombre_page = $request->nombre_page;
        $books->auteur = $request->auteur;

        if ($books->save() ) {
            return $books;
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $books = Book::findOrFail($id);
        if($books->delete()){
            return $books;
        }
    }
}