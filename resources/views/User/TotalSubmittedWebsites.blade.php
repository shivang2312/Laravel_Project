@extends('usermain')
@section('title', 'Total Submitted Websites')
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
              <h3 class="panel-title">Total Submitted Websites</h3>
            </div>
            <div class="panel-body">
              <table class="table table-striped table-hover">
                  <tr>
                    <th>Website Name</th>
                    <th>Website URL</th>
                    <th>Plan Type</th>
                    <th>IsReviewed</th>
                    <th>Check Review if Done</th>
                  </tr>
                  @foreach ($totalWebsites as $totalWebsite)
                  <tr>
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
                  <td>
                    @if($totalWebsite->IsReviewed)
                      @if($totalWebsite->plan==0) 
                        <a href = 'check-free-review/{{ $totalWebsite->id }}'>
                      @elseif($totalWebsite->plan==1) 
                        <a href="check-text-review/{{ $totalWebsite->id }}">
                      @else
                       <a href="check-video-review/{{ $totalWebsite->id }}">
                      @endif
                        <button class="btn btn-success">Check Review</button></a>
                    @endif
                  </td>
                  </tr>
                   @endforeach
                </table>
                {{$totalWebsites->links()}}
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>

@endsection
     