@extends('adminmain')
@section('title', 'No Rights')
@section('content')

<header id="header">
      <div class="container">
        <div class="row">
        </div>
      </div>
</header>

<section id="main">
      <div class="container-fuild">
        <div class="row">
        <div class="col-md-2">
            @include('AdminPartials._sidebar')
          </div>
          <div class="col-md-10">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">No Rights</h3>
            </div>
            <div class="panel-body">
             <h3> Sorry...!!! You Do Not Have Rights to View This Page.</h3>
            </div>
          </div>
          </div>
        </div>
    </section>

@endsection
     