@extends ( 'Layouts/master' )
@section('contenu')
<div class="panel-body">
    <div class="position-center">
        <form  class="form-horizontal" method="POST" action={{route('store.ingredients')}} >
            @csrf   
            <div class="form-group">
              <label class="col-sm-3 control-label">Typeingredients</label>
              <div class="col-sm-6">
                <select name= "typeingredients" class="form-control">
                  @foreach($typeingredients as $typeingredient)
                    <option value="{{$typeingredient->id}}">{{ $typeingredient->nom }}</option>
                  @endforeach
              </select>  
              </div>  
    <div class="panel-body">
        <div class=" form">
                <div class="form-group ">
                    <label for="cname" class="control-label col-lg-3">Nom (required)</label>
                    <div class="col-lg-6">
                        <textarea class="form-control " placeholder="Noms des Ingredients" rows="10"name="nom" required /></textarea>
                    </div>
                </div>
                <div class="form-group ">
                    <label for="cemail" class="control-label col-lg-3">Description(required)</label>
                    <div class="col-lg-6">
                        <textarea class="form-control " placeholder="Votre Description" rows="10"name="description" required /></textarea>
                    </div>
                </div>
                
               
                <div class="form-group">
                    <div class="col-lg-offset-3 col-lg-6">
                        <button class="btn btn-primary" type="submit">Valider</button>
                    </div>
                </div>
            </form>
    </div>
</div>
@endsection