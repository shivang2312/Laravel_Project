@extends('usermain')

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
            @include('UserPartials._sidebar')
          </div>
          
        <div class="col-md-10">
        	<div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Website</h3>
              </div>
              <div class="panel-body">
                You Have not Submitted Any Website Yet.
              </div>
              </div>
              </div>
        </div>
      </div>
</section>

@endsection