@extends('layouts.app')

@section('content')

@if($error->any())

<div class="alert alert=dander">
        <strong>Sorry, please check again your input!</strong> Your process failed. Please try again! <br><br>

        <ul>
            @foreach($error->all() as $error)

            <li>{{$error}}</li>

            @endforeach
            
        </ul>
</div>




<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Book') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('book.update', $book->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group col-md-6 row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-8">
                                <input type="text" class="form-control" name="name" value="{{$book->name}}" autofocus>

                            </div>
                        </div>

                        <div class="form-group col-md-6 row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Author') }}</label>

                            <div class="col-md-8">
                                <input type="text" class="form-control" name="author" value="{{$book->author}}">

                            </div>
                        </div>

                        <div class="form-group col-md-6 row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Edition') }}</label>

                            <div class="col-md-8">
                                <input type="password" class="form-control" name="edition" value="{{$book->edition}}">

                            </div>
                        </div>

                        <div class="form-group col-md-6 row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Publisher') }}</label>

                            <div class="col-md-8">
                                <input type="password" class="form-control" name="publisher" value="{{$book->publisher}}">
                            </div>
                        </div>

                        <div class="form-group col-md-6 row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Publication Date') }}</label>

                            <div class="col-md-8">
                                <input type="password" class="form-control" name="publicationdate" value="{{$book->publicationdate}}">
                            </div>
                        </div>

                        <div class="form-group col-md-6 row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('ISBN') }}</label>

                            <div class="col-md-8">
                                <input type="password" class="form-control" name="isbn" value="{{$book->isbn}}">
                            </div>
                        </div>

                        <div class="form-group col-md-6 row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Available') }}</label>

                            <div class="col-md-8">
                                <input type="password" class="form-control" name="available" value="{{$book->available}}">
                            </div>
                        </div>

                        <div class="form-group col-md-6 row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Copies') }}</label>

                            <div class="col-md-8">
                                <input type="password" class="form-control" name="copies" value="{{$book->copies}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-lg btn-primary">
                                    {{ __('Update') }}
                                </button>
                                <a href="{{route('book.index')}}" class="btn btn-lg btn-warning">Return</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
