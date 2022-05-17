@extends('layouts.app')
   
@section('content')


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Aliment</h2>
            
            
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('alimentcrudmed.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Warning!</strong> Please check input field code<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('alimentcrudmed.update', $aliment->id)}}" method="POST">
    @csrf
    @method('PATCH')

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name: hello</strong>
                <input type="text" name="nom_aliment" value="{{ $aliment->nom_aliment }}" class="form-control">
            </div>
        </div>
      
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection