@extends ( 'Layouts/master' )

@section('contenu')

<!-- Horizontal Form -->
<div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Formulaire pays</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal" method="POST" action={{route('store.pays')}} >
        @csrf
      <div class="box-body">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label"> Nom</label>
          <div class="col-sm-10">
            <input type="nom" class="form-control" id="inputEmail3" placeholder="Nom du pays">
          </div>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="text-center">
        <button type="submit" class="btn btn-primary">Valider</button>
      </div>
      @endsection

