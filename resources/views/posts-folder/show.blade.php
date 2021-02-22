@extends('layouts.main')

@section('main')

  <h1>Post</h1>

  <table class="table table-striped">
    @foreach ($post->getAttributes() as $key => $value)
      <tr>
        <td> <strong>{{$key}}</strong> </td>
        <td> {{$value}}</td>
      </tr>
    @endforeach
  </table>
  <div class="text-right">
    <a href="{{ route('post.index')}}"  class="btn btn-outline-dark">Torna alla Home</a>

  </div>

@endsection
