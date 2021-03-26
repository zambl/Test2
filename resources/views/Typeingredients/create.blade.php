@extends ( 'Layouts/master' )
@section('contenu')
<div class="panel-body">
    <div class="position-center">
        <form  class="form-horizontal" method="POST" action={{route('store.typeingredients')}} >
          @csrf
        <div class="form-group">
            <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Nom</label>
            <div class="col-lg-10">
                <input type="text" name="nom" class="form-control" placeholder="Nom du Type Ingredients">
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