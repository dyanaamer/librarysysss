@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Book Detail') }}</div>

                <div class="card-body">
                        <div class="form-group col-md-6 row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-8">
                                <strong>{{$book->name}}</strong>

                            </div>
                        </div>

                        <div class="form-group col-md-6 row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Author') }}</label>

                            <div class="col-md-8">
                                <strong>{{$book->author}}</strong>

                            </div>
                        </div>

                        <div class="form-group col-md-6 row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Edition') }}</label>

                            <div class="col-md-8">
                                <strong>{{$book->edition}}</strong>

                            </div>
                        </div>

                        <div class="form-group col-md-6 row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Publisher') }}</label>

                            <div class="col-md-8">
                                <strong>{{$book->publisher}}</strong>
                            </div>
                        </div>

                        <div class="form-group col-md-6 row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Publication Date') }}</label>

                            <div class="col-md-8">
                                <strong>{{$book->publicationdate}}</strong>
                            </div>
                        </div>

                        <div class="form-group col-md-6 row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('ISBN') }}</label>

                            <div class="col-md-8">
                                <strong>{{$book->isbn}}</strong>
                            </div>
                        </div>

                        <div class="form-group col-md-6 row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Available') }}</label>

                            <div class="col-md-8">
                                <strong>{{$book->available}}</strong>
                            </div>
                        </div>

                        <div class="form-group col-md-6 row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Copies') }}</label>

                            <div class="col-md-8">
                                <strong>{{$book->copies}}</strong>
                            </div>
                        </div>

                        <div class="form-group">
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
