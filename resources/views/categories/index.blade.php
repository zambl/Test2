@extends('layouts.master')

@section('css')
    <link href="{{ asset('js/advanced-datatable/css/demo_page.css') }}" rel="stylesheet" />
    <link href="{{ asset('js/advanced-datatable/css/demo_table.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('js/data-tables/DT_bootstrap.css') }}" />
@endsection

@section('contenu')
<div class="container">
    <p class="w-25 bg-info mt-2 p-2"></p>

<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                <a class="btn btn-success"  href="{{ route('category.create') }}">Ajouter</button></a></button>  
            </header>
            <div class="panel-body">
                <div class="adv-table">
                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($categories as $category)
                               <tr>
                                   <td>{{  $category->name }}</td>
                                   <td>
                                    <a href="{{route('Delete.category',$category['id'])}}"> <button class="btn btn-danger"> Delete </button></a>
                                    <a href="{{route('Modifier.category',$category['id'])}}"><button type="button" class="btn btn-primary">Edit</button></a></button>
                                     
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