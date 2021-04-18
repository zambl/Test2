@extends ( 'Layouts/master' )

@section('contenu')

<!-- Horizontal Form -->
<div class="box box-info">
    
    <!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal" method="POST" action="{{route('category.store')}}" >
        @csrf
      <div class="box-body">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label"> Nom</label>
          <div class="col-sm-10">
            <input type="nom" class="form-control" id="inputEmail3" placeholder="Nom de la categorie" name="name">
          </div>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="text-center">
        <button type="submit" class="btn btn-primary">Valider</button>
      </div>
    </form>
      @endsection

