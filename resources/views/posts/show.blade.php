@extends('layouts.app')
@section('title') view @endsection
@section('show')
        <div class="card mt-4">
            <div class="card-header">
            post info
      </div>
      <div class="card-body">
        <h5 class="card-title">Title: {{$post['title']}}</h5>
        <p class="card-text">Description: {{$post['description']}}</p>
      </div>
    </div>
      
      <div class="card mt-4">
            <div class="card-header">
              post creator info
            </div>
            <div class="card-body">
              <h5 class="card-title">Name: {{$post['Name']}}</h5>
              <p class="card-text">Email: {{$post['Email']}}</p>
              <p class="card-text">Created at: {{$post['Created_at']}}</p>
            </div>
          </div>
@endsection