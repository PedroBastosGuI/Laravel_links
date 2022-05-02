@extends('layouts.app');
@section('content');

    <div class="container">
        <div class="row">
            <h1>Submit a link</h1>
        </div>

        <div class="row">
            <form action="/submit" method="post">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        Please fix the following errors
                    </div>
                @endif

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="from-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Title" value="{{ old('title') }}">"
                        @error('url')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    @endsection
