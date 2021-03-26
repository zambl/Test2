@extends('layouts.master')

@section('css')
    <link href="{{ asset('js/advanced-datatable/css/demo_page.css') }}" rel="stylesheet" />
    <link href="{{ asset('js/advanced-datatable/css/demo_table.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('js/data-tables/DT_bootstrap.css') }}" />
@endsection

@section('contenu')
<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
               
                <a class="btn btn-success"  href="http://127.0.0.1:8000/create/Menus">Ajouter</button></a></button>  
            </header>
            <div class="panel-body">
                <div class="adv-table">
                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                        <thead>
                            <tr>
                                <td>Pays</td>
                                <td>Nom</td>
                                <td>Description</td>
                                <td>img</td>
                                <td>temps préparation</td>
                                <td>Option</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($menus as $menu)
                            <tr>
                                <td>{{$menu->pays->nom}}</td>
                                <td>{{$menu['nom']}}</td>
                                <td>{{$menu['description']}}</td>
                                <td>{{$menu['img']}}</td>
                                <td>{{$menu['tempspreparation']}}</td>
                               <td>
                                 <a href="{{route('Delete.Menus',$menu['id'])}}"> <button class="btn btn-danger"> Delete </button></a>
                                 <a href="{{route('Modifier.Menus',$menu['id'])}}"><button type="button" class="btn btn-primary">Edit</button></a></button>
                                
                               </td>
                              
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection

@section('js')
    <!--dynamic table-->
<script type="text/javascript" language="javascript" src="{{ asset('js/advanced-datatable/js/jquery.dataTables.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/data-tables/DT_bootstrap.js')}}"></script>
<!--common script init for all pages-->
<script src="{{ asset('js/scripts.js')}}"></script>

<!--dynamic table initialization -->
<script src="{{ asset('js/dynamic_table_init.js')}}"></script>
@endsection