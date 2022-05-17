@extends('layouts.app')
@section('content')
<head>
    <link href="{{ asset('public/css/aliment.css')}}" rel="stylesheet">
</head>



<div class="container">

    @if(count($errors) > 0)
    <div class="alert alert-danger">
    <li>{{ $errors}}</li>
    <ul>
      @foreach ($errors->all() as $errors)
      <li> {{ $errors}}</li>  
      @endforeach
    </ul>
  </div>
  @endif

  @if((\Session::has("success")))
  <div class="alert alert-success">
    <p>{{ \Session::get("success")}}
    </p>
  </div>
  @endif


  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ajout_aliment">
   Ajouter un aliment
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="ajout_aliment" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">

          <div class="container">
            <form method="POST" action="{{ URL::to('/ajouter_aliment')}}">
                {{ csrf_field() }}
                <input type="text" name="nom_aliment">
                <input type="submit"  value="Enregistrer"> 
        
              </form>
        </div>
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      
      </div>
    </div>
  </div>




 
   



@endsection