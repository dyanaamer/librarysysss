@extends('layouts.app')


@section('content')


@if($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{$message}}</p>
</div>
@endif

<div class="row">
    <div class="col-md-12">
        <div class="pull-left">
        <marquee behaviour="" direction="">This is the list of book</marquee>
        </div>
        <div class="pull-right">
            <a href="{{ route('book.create')}}" class="btn btn-lg btn-success">Register New Book</a> 
        </div>
    </div>
</div>

<table class="table tabel-bordered table-dark">
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Author</th>
        <th>Edition</th>
        <th>Publisher</th>
        <th>Publication Date</th>
        <th>Available</th>
        <th>{{$book->isbn}}</th>
        <th>Copies</th>
        <th>Action</th>
    </tr>
    @foreach($book as $key =>$book)
    <tr>
        <td>{{++$key}}</td>
        <td>{{$book->name}}</td>
        <td>{{$book->author}}</td>
        <td>{{$book->edition}}</td>
        <td>{{$book->publisher}}</td>
        <td>{{$book->publicationdate}}</td>
        <td>{{$book->isbn}}</td>
        <td>{{$book->available}}</td>
        <td>{{$book->copies}}</td>
        <td>
            <form action="{{route('book.destroy',$book->id)}}" method="post">
            
                <button type="submit" class="btn btn-danger">Delete</button>
                @method('DELETE')
                @csrf
                <a href="{{route('book.show', $book->id)}}" class="btn btn-warning">Show</a>

                <a href="{{route('book.edit', $book->id)}}" class="btn btn-info">Edit</a>
            </form> 
        </td>
    @endforeach
    </tr>
</table>

@endsection