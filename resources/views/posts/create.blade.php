@extends('layouts.layout')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>Create Post</h1>

        <hr>

        @include('layouts.errors')

        <form method="post" action="/posts">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="title">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Body</label>
                <textarea name="body" id="body" class="form-control" ></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>


        </form>
    </div>

@endsection