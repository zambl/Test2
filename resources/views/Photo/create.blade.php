@extends ( 'Layouts/master' )
@section('contenu')
<div class="box box-info">
  <div class="box-header with-border">
<div class="panel-body">
  <div class="position-center">
      <form  class="form-horizontal" method="POST" action="{{route('Photo.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="box-body">
      <div class="form-group">
          <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Menus</label>
          <div class="col-lg-10">
              <select name="menus" class="form-control">
                  @foreach($menus as $menu)
                    <option value="{{$menu->id}}">{{ $menu->nom }}</option>
                  @endforeach
              </select>  
          </div>
      </div>
      <div class="form-group">
                          
          <label for="file">Insérer une image</label>
          <input type="file" accept="image/*" name="image" class="form-control" onchange="loadFile(event)">
          <img id="output"/>
      </div>
      </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Img Principale
          </label>
        </div>
      </div>
        <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
                <button type="submit" class="btn btn-primary">Valider</button>
            </div>
        </div>
    </form>
    </div>
</div>
@endsection
<script>
    var loadFile = function(event) {
      var reader = new FileReader();
      reader.onload = function(){
        var output = document.getElementById('output');
        output.src = reader.result;
      };
      reader.readAsDataURL(event.target.files[0]);
    };
  </script>