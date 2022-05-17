@extends('layouts.app')
@section('content')


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tous les aliments</h2>
            </div>
            <div class="pull-right">
                 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Ajouter un nouvel aliment
  </button>
                <a class="btn btn-primary" href="{{ route('medecin.index')}}"> Précedant</a>
            </div>
            
        </div>
    </div>
                   
    <div class="searh" >   
    <form action="{{ url('/search')}}" type="get"  id="search-form">
        {{ csrf_field() }}
        <input type="text" name="query" id="q">
        <button type="submit" >Recherche</button>
    </form>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>  
            <th width="50px">nom aliment</th>
            <th width="50px">Action</th>
        </tr>
     @foreach ($aliment as $aliment )
     <tr> 
        <td> {{$aliment->nom_aliment}}</td> 
       <td>
        <form action="{{ route('alimentcrudmed.destroy', $aliment->id)}}" method="POST">

            <a class="btn btn-info" href="{{ route('alimentcrudmed.show',$aliment->id)}}">Show</a>

            <a class="btn btn-primary" href="{{ route('alimentcrudmed.edit',$aliment->id)}}">Edit</a>

            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
       </td>
   </tr>   
     @endforeach
     
          

        
       
        
        
    </table>

    {{-- {!! $aliment->links() !!} --}}

   
@include('admin.alimentcrud.create')
   
       
        
   
  
  
      

    
@endsection