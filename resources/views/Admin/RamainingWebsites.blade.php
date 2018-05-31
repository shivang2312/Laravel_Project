@extends('adminmain')
@section('title', 'Admin Remaining Website')
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
              <h3 class="panel-title">Total Remaining Websites</h3>
            </div>
            <div class="panel-body">
              <table class="table table-striped table-hover">
                  <tr>
                    <th>Name</th>
                    <th>Website Name</th>
                    <th>Website URL</th>
                    <th>Plan Type</th>
                    <th>Start Review</th>
                  </tr>
                  @foreach ($remainingWebsites as $remainingWebsite)
                  <tr>
                  <td>{{ $remainingWebsite->ownername }}</td>
                  <td>{{ $remainingWebsite->websitename }}</td>
                  <td>{{ $remainingWebsite->websiteurl }}</td>
                  <td>   
                    @if($remainingWebsite->plan==0) 
                      Free Review Plan 
                    @elseif($remainingWebsite->plan==1) 
                      Text Review Plan  
                    @else 
                      Video Review Plan 
                    @endif
                  </td>
                  <td>
                      @if($remainingWebsite->plan==0) 
                        <a href = 'start-free-review/{{ $remainingWebsite->id }}'>
                      @elseif($remainingWebsite->plan==1) 
                        <a href="start-text-review/{{ $remainingWebsite->id }}">
                      @else
                        <a href="start-video-review/{{ $remainingWebsite->id }}">
                      @endif
                      <button class="btn btn-success">Start Review</button></a>
                    </td>
                  </tr>
                   @endforeach
                </table>
                {{$remainingWebsites->links()}}
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>

@endsection
     