@extends('layouts.app')
@section('title') create post @endsection
@section('create')

<form method="post" action="{{route('posts.store')}}">
    @csrf
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input name="title" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label  class="form-label">Description</label>
        <textarea name="description" class="form-control"  rows="3"></textarea>
    </div>

    <div class="mb-3">
        <label  class="form-label">Post Creator</label>
        <select name="post_creator" class="form-control">
            <option value="1">ranim</option>
            <option value="2">tarik</option>
        </select>
    </div>

    <button class="btn btn-success">Submit</button>
</form>
@endsection