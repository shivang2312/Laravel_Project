@extends('usermain')
@section('title', 'Remaining Reviewed Websites')
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
              <h3 class="panel-title">Remaining Reviewed Websites</h3>
            </div>
            <div class="panel-body">
              <table class="table table-striped table-hover">
                  <tr>
                    <th>Website Name</th>
                    <th>Website URL</th>
                    <th>Plan Type</th>
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
     