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
      <div>
        <h1>Commenti</h1>         
        <!-- @dump($post->comment) -->
        <div class="py-5 "> 
        @foreach ($post->comment as $comments)
        <div class="py-2 ">
          <h4>{{$comments->author}}</h4>
          <p>{{$comments->text}}</p>
          <span>{{$comments->created_at->diffForHumans()}}</span>
        </div>
        
        @endforeach
         </div>
        <form action="{{route('addcomment', $post->id)}}" method="POST">
          @csrf
          @method('POST')
          <div class="form-group">
            <label for="author">Titolo</label>
            <input type="text" class="form-control" id="author"  placeholder="Scrivi il tuo nome" name="author" value="">
            <small lass="form-text text-muted">Autore del post</small>
          </div>
          <div class="form-group">
            <label for="text">Titolo</label>
            <textarea rows="6" class="form-control" id="text"  placeholder="Scrivi un commento" name="text" ></textarea>
            
          </div>
          <button type="submit" class="btn btn-primary">Aggiungi</button>
        </form>
      </div>
    <div class="text-right">
      <a href="{{ route('post.index')}}"  class="btn btn-outline-dark">Torna alla Home</a>
  
    </div>
  </div>


@endsection
