@extends('layouts.master')


@section('contenu')

<header>
  <a class="btn btn-success"  href="{{ route('Photo.create') }}">Ajouter</button></a></button>  
</header>

<div class="container">

  <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Gallery Menus</h1>

  <hr class="mt-2 mb-5">

  <div class="row text-center text-lg-left">

    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="{{ asset('uploads\photos\hKnvYyVAnilGFDBedBa3HfDGVz7nkeGa0uGMUp1T.jpg')}}" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="{{ asset('uploads\photos\Plat.jpg')}}" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="{{ asset('uploads\photos\Harira.jpg')}}" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="{{ asset('uploads\photos\Garba.jpg')}}" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="{{ asset('uploads\photos\5R3s2l7HXo36muOitG3SdRNMC6mM1C7EEqyUJrpF.jpg')}}" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="{{ asset('uploads\photos\unique.jpg')}}" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="{{ asset('uploads\photos\HLA8XNOlVtCVjpWbHABkWmxg4DBpU1FdHeCQm8FC.jpg')}}" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="{{ asset('uploads\photos\unique.jpg')}}" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="{{ asset('uploads\photos\unique.jpg')}}" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="{{ asset('uploads\photos\unique.jpg')}}"alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="{{ asset('uploads\photos\unique.jpg')}}" alt="">
          </a>
    </div>
 
  </div>

</div>
<!-- /.container -->


    <script type="text/javascript">//<![CDATA[





  //]]></script>

  <script>
    // tell the embed parent frame the height of the content
    if (window.parent && window.parent.parent){
      window.parent.parent.postMessage(["resultsFrame", {
        height: document.body.getBoundingClientRect().height,
        slug: "m0egb54s"
      }], "*")
    }

    // always overwrite window.name, in case users try to set it manually
    window.name = "result"
  </script>


@endsection
