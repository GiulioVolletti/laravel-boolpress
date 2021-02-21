<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        
    </head>
    <body>
        <div class="container pt-5">
            <table class="table table-dark  ">
                <thead>
                    <tr>
                        <th>id</th>
                        <th scope="col"> Titolo </th>
                        <th scope="col"> Sottotitolo </th>
                        <th scope="col"> Testo   </th>
                        <th scope="col"> Autore </th>
                        <th scope="col"> Immagine </th>
                        <th scope="col"> data di pubblicazione </th>
                        
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

                            
                    </tr>
                    @endforeach
                                            
                    
            </tbody>
             </table>
        </div>
        
        <ul>
        
            
        </ul>
    </body>
</html>
