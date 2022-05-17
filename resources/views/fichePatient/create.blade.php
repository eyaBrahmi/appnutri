@extends('layouts.app')
@section('content')

<head>
    <!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
  
 {{-- <script src="{{ asset('public/js/search.js') }}" ></script>--}}
</head>


<!-- Modal -->
<div class="modal fade" id="show_aliment1" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> fiche d'aliment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">        
             {{--  <form action="{{ route('show.search')}}" method="POST"  id="search-form">
                  {{ csrf_field() }}
                  <input type="text" name="q" id="q">
                  <button type="submit" >Recherche</button>
              </form>--}}
          
          
              <form action="{{ url('/search')}}" type="get"  id="search-form">
                  {{ csrf_field() }}
                  <input type="text" name="query" id="q">
                  <button type="submit" >Recherche</button>
              </form>
          <div class="container" id="aliment">



            <form method="POST" action="{{ route('fiche.store')}}">
                {{ csrf_field() }}
                {{-- <input type="hidden" name="aliment_id" value="{{ $aliment->id}}"> --}}
              @foreach ($aliment as $aliment )
              
              <input type="checkbox" name="aliment_id" > {{$aliment->nom_aliment}}</h1></br>
              @endforeach

            <input type="submit" value="confirmer">
            
        </form>  
          </div>
          
          <div class="pull-right">
{{--             
              <a class="btn btn-primary" href=""> Ajouter nouvel aliment <a> --}}
          </div>
          </body>
     
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

               
            </div>
        
        </div>
    </div>
</div>

    
@endsection