<?php

namespace App\Http\Controllers;

use Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controllers;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = \App\Book::all();

        return view('book.dashboard', compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect()->route('book.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        $book = Book::find($id);

        return view('book.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $book = Book::find($id);

        return view('book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $book= \App\Book::find($id);
        $book->name=$request->get('name');
        $book->author=$request->get('author');
        $book->edition=$request->get('edition');
        $book->publisher=$request->get('publisher');
        $book->publicationdate=$request->get('publicationdate');
        $book->isbn=$request->get('isbn');
        $book->available=$request->get('available');
        $book->copies=$request->get('copies');
        $book->save();
        return redirect('book');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('book.index')->with('success', 'Book successfully deleted');
    }
}
