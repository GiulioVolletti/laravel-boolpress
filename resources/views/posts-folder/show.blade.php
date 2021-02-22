@extends('layouts.main')

@section('main')
  <div class="container">
    
    <h1>Post</h1>
  
    <table class="table table-striped">
      @foreach ($post->getAttributes() as $key => $value)
        <tr>
          <td> <strong>{{$key}}</strong> </td>
          <td> {{$value}}</td>
          
          
        </tr>
        @endforeach
      </table>
      <div class="center">
  
        @foreach ($post->tags as $tag)
          <span class="badge badge-info">{{$tag->name}}</span>
            
        @endforeach
      </div>
    <div class="text-right">
      <a href="{{ route('post.index')}}"  class="btn btn-outline-dark">Torna alla Home</a>
  
    </div>
  </div>


@endsection
