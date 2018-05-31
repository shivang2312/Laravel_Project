@extends('adminmain')
@section('title', 'Admin Dashboard')
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
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Admin Dashboard</h3>
              </div>
              <div class="panel-body">
                <div class="col-md-4">
                <a href="/userlist" style="color: inherit;  text-decoration: none; ">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span>  {{ $users }}  </h2>
                    <h4>Users</h4>
                  </div>
                  </a>
                </div>
                <!--
                <div class="col-md-4">
                <a href="/userlist" style="color: inherit;  text-decoration: none; ">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 12</h2>
                    <h4>Active Users</h4>
                  </div>
                </a>
                </div>
                <div class="col-md-4">
                <a href="/userlist" style="color: inherit;  text-decoration: none; ">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> 33</h2>
                    <h4>Inactive Users</h4>
                  </div>
                  </a>
                </div>
                -->
                <div class="col-md-4">
                <a href="/total-websites" style="color: inherit;  text-decoration: none; ">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> {{ $totalWebsites }} </h2>
                    <h4>Total Submitted Websites</h4>
                  </div>
                </a>
                </div>
                <div class="col-md-4">
                <a href="/reviewed-websites" style="color: inherit;  text-decoration: none; ">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> {{$reviewedWebsites}} </h2>
                    <h4>Total Reviewed Websites</h4>
                  </div>
                </a>
                </div>
                <div class="col-md-4">
                <a href="/remaining-websites" style="color: inherit;  text-decoration: none; ">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> {{$notReviewedWebsites}}</h2>
                    <h4>Not Reviewed Websites</h4>
                  </div>
                </a>
                </div>
                <div class="col-md-4">
                <a href="/free-plan-websites" style="color: inherit;  text-decoration: none; ">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> {{$freePlan}} </h2>
                    <h4>Total Submitted Websites for <br> Free Review Plan</h4>
                  </div>
                </a>
                </div>
                <div class="col-md-4">
                <a href="/text-plan-websites" style="color: inherit;  text-decoration: none; ">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> {{$textPlan}}</h2>
                    <h4>Total Submitted Websites for <br> Text Review Plan</h4>
                  </div>
                </a>
                </div>
                <div class="col-md-4">
                <a href="/video-plan-websites" style="color: inherit;  text-decoration: none; ">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> {{$videoPlan}}</h2>
                    <h4>Total Submitted Websites for <br> Video Review Plan</h4>
                  </div>
                </a>
                </div>
              </div>
              </div>
              </div>
        </div>
      </div>
</section>

@endsection