  @extends('layouts.app')
  @section('title') index @endsection
  @section('content')

          <div class="text-center">
            <a href="{{route('posts.create')}}" type="button" class="btn btn-success">create post</a>
            </div>
            {{--@dd($posts)--}}
            <table class="table mt-5">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">title</th>
                    <th scope="col">posted_by</th>
                    <th scope="col">created_at</th>
                    <th scope="col">actions</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach ($posts as $post)
                 <tr>
                  {{--@dd($post)--}}
                  <th>{{$post['id']}}</th>
                  <td>{{$post['title']}}</td>
                  <td>{{$post['posted_by']}}</td>
                  <td>{{$post['created_at']}}</td>
                  <td>
                    <a href="{{route('posts.show',$post['id'])}}" class="btn btn-info">View</a>
                    <a href="{{route('posts.edit',$post['id'])}}" class="btn btn-primary">Edit</a>
                    <form style="display: inline" method="post" action="{{route('posts.destroy',$post['id'])}}">
                      @csrf
                      @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                  </td>
                </tr>
                 @endforeach
                  
                  
                </tbody>
              </table>
          </div>
        
@endsection