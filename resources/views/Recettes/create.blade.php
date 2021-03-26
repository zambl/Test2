@extends ( 'Layouts/master' )
@section('contenu')
<section class="panel">
  <div class="panel-body">
      <div class="">
          <form  class="form-horizontal" method="POST" action={{route('store.recettes')}}>
            @csrf
            <div class="form-group">
              <label class="col-sm-3 control-label">Menus</label>
              <div class="col-sm-6">
                <select name= "menus" class="form-control">
                    @foreach($menus as $menu)
                    <option value="{{$menu->id}}">{{ $menu->nom }}</option>
                  @endforeach
              </select>  
              </div>
          </div>
         
          <div class="form-group">
            <label class="col-sm-3 control-label">Nom</label>
            <div class="col-sm-6">
              <input type="text" name="nom" class="form-control" placeholder="Nom de la Recettes">
              @error('nom')
              <span>{{$message}}</span>
              @enderror
            </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Description</label>
          <div class="col-sm-6">
            <textarea name="description" placeholder="Votre description" rows="10" class="form-control" ></textarea>
            @error('Description')
            <span>{{$message}}</span>
            @enderror
          </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Temps cuisson</label>
        <div class="col-sm-6">
          <input type="text" name="tempscuisson" class="form-control" placeholder="Temps de cuisson">
          @error('tempscuisson')
          <span>{{$message}}</span>
          @enderror
        </div>
    </div>
            
    <div class="form-group">
      <label class="col-sm-3 control-label">Quantité ingrédients</label>
      <div class="col-lg-6">
         <input class="form-control" type="text" name="quantitéingredients" id="">
         @error('quantitéingredients')
         <span>{{$message}}</span>
         @enderror
      </div>
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
</section>
@endsection