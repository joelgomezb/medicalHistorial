@if($errors->any())
<div class="alert alert-danger">
   <strong>Problema al intentar actualizar su información:</strong>
   <ul>
      @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
      @endforeach
   </ul>
</div>

@elseif(isset($success))
   <div class="alert alert-success">
      <strong>Info:</strong> {{ $success }}
   </div>
@endif


