@extends('adminmain')
@section('title', 'Total Websites')
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
              <h3 class="panel-title">Total Submitted Websites</h3>
            </div>
            <div class="panel-body">
              <table class="table table-striped table-hover">
                  <tr>
                    <th>Name</th>
                    <th>Website Name</th>
                    <th>Website URL</th>
                    <th>Plan Type</th>
                    <th>IsReviewed</th>
                    <th>Start Review If Not Done Already</th>
                  </tr>
                  @foreach ($totalWebsites as $totalWebsite)
                  <tr>
                  <td>{{ $totalWebsite->ownername }}</td>
                  <td>{{ $totalWebsite->websitename }}</td>
                  <td>{{ $totalWebsite->websiteurl }}</td>
                  <td>   
                    @if($totalWebsite->plan==0) 
                      Free Review Plan 
                    @elseif($totalWebsite->plan==1) 
                      Text Review Plan  
                    @else 
                      Video Review Plan 
                    @endif
                  </td>
                  <td>
                    @if($totalWebsite->IsReviewed)
                      Yes
                    @else
                      No
                    @endif
                  </td>
                  @if($totalWebsite->IsReviewed ==0)
                    <td>
                      @if($totalWebsite->plan==0) 
                        <a href = 'start-free-review/{{ $totalWebsite->id }}'>
                      @elseif($totalWebsite->plan==1) 
                        <a href="start-text-review/{{ $totalWebsite->id }}">
                      @else
                        <a href="start-video-review/{{ $totalWebsite->id }}">
                      @endif
                      <button class="btn btn-success">Start Review</button></a>
                    </td>
                  @else
                    <td></td>
                  @endif
                  </tr>
                   @endforeach
                </table>
                {{$totalWebsites->links()}}
            </div>
          </div>
          </div>
        </div>
    </section>

@endsection
     