@extends ( 'Layouts/master' )
@section('contenu')
<section class="panel">
  <div class="panel-body">
      <div class="">
          <form  class="form-horizontal" method="POST" action={{route('Recettes.Edit')}}>
            @csrf 
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Nom</label>
            <div class="col-sm-6">
              <input type="text" name="nom" class="form-control" placeholder="Nom du menu">
              
            </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Description</label>
          <div class="col-sm-6">
            <textarea name="description" placeholder="Votre description" rows="10" class="form-control" ></textarea>
            
          </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Temps cuisson</label>
        <div class="col-sm-6">
          <input type="number" name="image" class="form-control" placeholder="Temps cuisson">
        
        </div>
    </div>
            
    <div class="form-group">
      <label class="col-sm-3 control-label">Quantité ingrédients</label>
      <div class="col-lg-6">
         <input class="form-control" type="number" name="Quantité ingrédients" id="">
      </div>
  </div>
  
                 </div>
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                  <button type="submit" class="btn btn-primary">Modifier</button>
              </div>
          </div>
         </form>
      </div>
  </div>
</section>
@endsection