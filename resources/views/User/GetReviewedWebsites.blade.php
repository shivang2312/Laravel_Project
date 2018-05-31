@extends('usermain')
@section('title', 'Reviewed Websites')
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
            <div class="panel-heading">
              <h3 class="panel-title">Total Reviewed Websites</h3>
            </div>
            <div class="panel-body">
              <table class="table table-striped table-hover">
                  <tr>
                    <th>Website Name</th>
                    <th>Website URL</th>
                    <th>Plan Type</th>
                    <th>Check Review</th>
                  </tr>
                  @foreach ($reviewedWebsites as $reviewedWebsite)
                  <tr>
                  <td>{{ $reviewedWebsite->websitename }}</td>
                  <td>{{ $reviewedWebsite->websiteurl }}</td>
                  <td>
                    @if($reviewedWebsite->plan==0) 
                      Free Review Plan 
                    @elseif($reviewedWebsite->plan==1) 
                      Text Review Plan  
                    @else 
                      Video Review Plan 
                    @endif
                  </td>
                  <td>
                    @if($reviewedWebsite->plan==0) 
                      <a href = 'check-free-review/{{ $reviewedWebsite->id }}'>
                    @elseif($reviewedWebsite->plan==1) 
                      <a href="check-text-review/{{ $reviewedWebsite->id }}">
                    @else
                      <a href="check-video-review/{{ $reviewedWebsite->id }}">
                    @endif
                      <button class="btn btn-success">Check Review</button></a>
                  </td>
                  </tr>
                   @endforeach
                </table>
                {{$reviewedWebsites->links()}}
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>

@endsection
     