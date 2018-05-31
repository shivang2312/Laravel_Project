@extends('usermain')
@section('title', 'User Dashboard')
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
                <h3 class="panel-title">User Dashboard</h3>
              </div>
              <div class="panel-body">
                
                <div class="col-md-4">
                <a href="/user-total-websites" style="color: inherit;  text-decoration: none; ">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> {{$totalWebsites}} </h2>
                    <h4>Total Submitted Websites</h4>
                  </div>
                </a>
                </div>
                <div class="col-md-4">
                <a href="/user-total-reviewed-websites" style="color: inherit;  text-decoration: none; ">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> {{$reviewedWebsites}}  </h2>
                    <h4>Total Reviewed Websites</h4>
                  </div>
                </a>
                </div>
                <div class="col-md-4">
                <a href="/user-total-remaining-websites" style="color: inherit;  text-decoration: none; ">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>{{$notReviewedWebsites}} </h2>
                    <h4>Not Reviewed Websites</h4>
                  </div>
                </a>
                </div>
                <div class="col-md-4">
                <a href="/user-free-plan-websites" style="color: inherit;  text-decoration: none; ">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> {{$freePlan}} </h2>
                    <h4>Total Submitted Websites for <br> Free Review Plan</h4>
                  </div>
                </a>
                </div>
                <div class="col-md-4">
                <a href="user-text-plan-websites" style="color: inherit;  text-decoration: none; ">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>{{$textPlan}} </h2>
                    <h4>Total Submitted Websites for <br> Text Review Plan</h4>
                  </div>
                </a>
                </div>
                <div class="col-md-4">
                <a href="user-video-plan-websites" style="color: inherit;  text-decoration: none; ">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>{{$videoPlan}} </h2>
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