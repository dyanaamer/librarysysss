@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register New Book') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('book.store') }}">
                        @csrf

                        <div class="form-group col-md-6 row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-8">
                                <input type="text" class="form-control" name="name" autofocus>

                            </div>
                        </div>

                        <div class="form-group col-md-6 row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Author') }}</label>

                            <div class="col-md-8">
                                <input type="text" class="form-control" name="author">

                            </div>
                        </div>

                        <div class="form-group col-md-6 row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Edition') }}</label>

                            <div class="col-md-8">
                                <input type="password" class="form-control" name="edition">

                            </div>
                        </div>

                        <div class="form-group col-md-6 row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Publisher') }}</label>

                            <div class="col-md-8">
                                <input type="password" class="form-control" name="publisher">
                            </div>
                        </div>

                        <div class="form-group col-md-6 row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Publication Date') }}</label>

                            <div class="col-md-8">
                                <input type="password" class="form-control" name="publicationdate">
                            </div>
                        </div>

                        <div class="form-group col-md-6 row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('ISBN') }}</label>

                            <div class="col-md-8">
                                <input type="password" class="form-control" name="isbn">
                            </div>
                        </div>

                        <div class="form-group col-md-6 row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Available') }}</label>

                            <div class="col-md-8">
                                <input type="password" class="form-control" name="available">
                            </div>
                        </div>

                        <div class="form-group col-md-6 row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Copies') }}</label>

                            <div class="col-md-8">
                                <input type="password" class="form-control" name="copies">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-lg btn-primary">
                                    {{ __('Register') }}
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
