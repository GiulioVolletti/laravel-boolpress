@extends('layouts.main')

@section('main')
<div class="container pt-5">
    <table class="table table-striped  ">
        <thead>
            <tr>
                <th>id</th>
                <th scope="col"> Titolo </th>
                <th scope="col"> Sottotitolo </th>
                <th scope="col"> Testo   </th>
                <th scope="col"> Autore </th>
                <th scope="col"> Immagine </th>
                <th scope="col"> data di pubblicazione </th>
                <th></th>
                
            </tr>
        </thead>
        
        
   
        <tbody>
            
            
            @foreach ($post as $item)
            <tr>
                <td>
                    {{ $item->id}}
                </td>
                <td> {{ $item->title}} </td>
                <td> {{ $item->subtitle}} </td>
                <td> {{ $item->text}} </td>
                <td> {{ $item->author}} </td>
                <td> {{ $item->img_path}} </td>
                <td> {{ $item->publication_date}} </td>
                <td><a class="btn btn-outline-dark" href="{{ route('post.show', $item->id)}}"> <i class="fas fa-search-plus"></i> </a></td>

                    
            </tr>
            @endforeach
                                    
            
        </tbody>
     </table>
    
</div>
@endsection

