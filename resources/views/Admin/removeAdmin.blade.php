@extends('adminmain')
@section('title', 'Remove Admin')
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
              <h3 class="panel-title">Removed Admin</h3>
            </div>
            <div class="panel-body">
            
            @foreach ($removeAdmin as $removeAdmin)
            <h3> You have Successfully Removed {{ $removeAdmin->name }} from admin now.</h3>
            @endforeach

           
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>

@endsection
     