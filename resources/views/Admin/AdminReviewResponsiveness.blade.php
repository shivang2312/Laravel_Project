@extends('adminmain')
@section('title', 'Admin Review')
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
              <h3 class="panel-title">Review Websites</h3>
            </div>
            <div class="panel-body">
              <div class="col-md-12 ">
                <table class="table table-striped table-hover">
                  <tr>
                    <th>Name</th>
                    <th>Website</th>
                    <th>Plan Type</th>
                    <th>Start Review If Not Done Already</th>
                  </tr>
                  <tr>
                    @foreach ($plans as $plan)
                  <tr>
                  <td>{{ $plan->ownername }}</td>
                  <td>{{ $plan->websitename }}</td>
                  <td>
                    @if($plan->plan==0) 
                      Free Review Plan 
                    @elseif($plan->plan==1) 
                      Text Review Plan  
                    @else 
                      Video Review Plan 
                    @endif
                  </td>
                  <td>
                    @if($plan->plan==0) 
                      <a href = 'start-free-review/{{ $plan->id }}'>
                    @elseif($plan->plan==1) 
                      <a href="start-text-review/{{ $plan->id }}">
                    @else
                      <a href="start-video-review/{{ $plan->id }}">
                    @endif
                    <button class="btn btn-success">Start Review</button></a>
                  </td>
                  </tr>
                   @endforeach
                  </tr>                   
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
     