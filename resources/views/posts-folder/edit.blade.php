@extends('layouts.main')

@section('main')
<div class="container">
  <div >

    <h1>Modifica Post</h1>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
          @endForeach
        </ul>
      </div>
    @endif
    <form action="{{route('post.update', $post )}}" method="post">
      @csrf
      
      @method('PUT')
      <div class="form-group">
        <label for="title">Titolo</label>
        <input type="text" class="form-control" id="title"  placeholder="Titolo del post" name="title" value="{{$post->title}}">
        <small lass="form-text text-muted">Titolo del post</small>
      </div>
      <div class="form-group">
        <label for="subtitle">Sottotitolo</label>
        <input type="text" class="form-control" id="subtitle"  placeholder="sottotitolo" name="subtitle" value="{{$post->subtitle}}">
        <small lass="form-text text-muted">Sottotiolo del post</small>
      </div>
      <div class="form-group">
        <label for="text">Testo</label>
        <input type="text" class="form-control" id="text"  placeholder="testo" name="text" value="{{$post->text}} ">
        <small lass="form-text text-muted">Testo del post</small>
      </div>
      <div class="form-group">
        <label for="author">Autore del post</label>
        <input type="text" class="form-control" id="author"  placeholder="Autore del post" name="author" value="{{$post->author}}">
    
      </div>
      <div class="form-group">
        <label for="img_path">Url immagine</label>
        <input type="text" class="form-control" id="img_path"  placeholder="Url immagine" name="img_path" value="{{$post->img_path}}">
    
      </div>
      <div class="form-group row">
        <label for="publication_date" class="col-2 col-form-label">Data </label>
        <div class="col-10">
          <input class="form-control" type="date" value="2011-08-19" id="publication_date" name="publication_date" value="{{$post->publication_date}}">
        </div>
      </div>
      @foreach ($tags as $tag)
      <div class="form-group ">
        <div class="form-check">
          
          <input class="form-check-input" type="checkbox" id="tag-{{ $tag->id}}" name="tags[]" value="{{ $tag->id}}">
          
          <label class="form-check-label" for="tag-{{ $tag->id}}">{{ $tag->name}}</label>
        </div>
  
      </div>          
      @endforeach
      <button type="submit" class="btn btn-primary">Modifica post</button>
    <a href="{{ route('post.index')}}"  class="btn btn-outline-dark">Torna alla Home</a>
    </form>
  </div>
</div>
@endsection
