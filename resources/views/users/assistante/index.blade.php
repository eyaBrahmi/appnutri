
@extends('layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Check all Assistante crud</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('assistante.create') }}"> Create</a>
                <a class="btn btn-primary" href="{{ route('admin.index') }}"> Back</a>
            </div>
            
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>E-mail</th>
            <th width="250px">Action</th>

        </tr>
        @foreach ($assistantes as $assistante)
        @if($assistante->role == 3)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $assistante->name }}</td>
            <td>{{ $assistante->email }}</td>
           
            <td>
                <form action="{{ route('assistante.destroy',$assistante->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('assistante.show',$assistante->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('assistante.edit',$assistante->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endif 
        @endforeach
        
    </table>
  
    {!! $assistantes->links() !!}
      
@endsection