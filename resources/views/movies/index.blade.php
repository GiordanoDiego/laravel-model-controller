@extends('layouts.app')

@section('page-title', 'Home')

@section('main')
    <div class="container">
        <h1 class="text-center">
            Moovie
        </h1>
    </div>
    
    <div class="container">
        <div class="row justify-content-center ">
            @foreach ($movies  as $movie)
                <div class="col-12 col-sm-3 mb-3 p-2 me-3   container_movie ">
                    <div class="card h-100 " style="width: 18rem;">
                        <div class="card-body h-100 ">
                          <h5 class="card-title">{{ $movie->title }}</h5>
                            <p class="card-text">
                                <ul>
                                    <li>
                                        Titolo originale:{{ $movie->original_title }}
                                    </li>
                                    <li>
                                        Data di uscita:{{ $movie->date }}
                                    </li>
                                    <li>
                                        Voto: {{ $movie->vote }}
                                    </li>
                                </ul>
                            </p>
                          <a href="{{ route('movies.show',['id'=> $movie->id]) }}" class="card-link">Vai al film</a>
                        </div>
                      </div>
                </div>

                
            @endforeach
        </div>
    </div>
@endsection


{{-- 
    questa pagina è collegata a web.php che a sua volta avrà il contenuto contenente iin lauouts, layouts sarà composto da 3 componenti che sono header main e footer.blade.php
--}}