

<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('public/css/table.css')}}" rel="stylesheet">
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('public/js/app.js') }}" defer></script>

  </head>

  <body>
    @include('fichePatient.create')
  <table class="tab" id="table"> 
    <tr class="tr1">
    <td class="td2" > Petit déjuner </a></td>
    <td  class="td2" data-href=""> Déjuner </td>
    <td   class="td2" data-href=""> Dîner </td> 
    </tr>
    <tr class="td1">
      <td class="td2" onclick="$('#show_aliment1').modal('show')" > </td>
      <td class="td2" ></td>
      <td class="td2" ></td>
    </tr>
   
  </table>





  </body>

    
</html>
