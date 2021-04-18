@extends ( 'Layouts/master' )
@section('contenu')
<div class="box box-info">
  <div class="box-header with-border">
<section class="panel">
  <div class="panel-body">
      <div class="">
          <form  class="form-horizontal" method="POST" action={{route('store.menus')}}>
            @csrf
            <div class="form-group">
              <label class="col-sm-3 control-label">Pays</label>
              <div class="col-sm-6">
                <select name= "pays" class="form-control">
                  @foreach($pays as $pay)
                    <option value={{$pay->id}}>{{ $pay->nom }}</option>
                  @endforeach
              </select>  
              </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Nom</label>
            <div class="col-sm-6">
              <input type="text" name="nom" class="form-control" placeholder="Nom du menu">
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
        <label class="col-sm-3 control-label">Image</label>
        <div class="col-sm-6">
          <input type="text" name="image" class="form-control" placeholder="Insérer une image">
          @error('Image')
          <span>{{$message}}</span>
          @enderror
        </div>
    </div>
            
    <div class="form-group">
      <label class="col-sm-3 control-label">Temps Préparation</label>
      <div class="col-lg-6">
         <input class="form-control" type="text" name="tempspreparation" id="">
         @error('tempspreparation')
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