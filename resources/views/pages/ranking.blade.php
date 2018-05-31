@extends('main')

@section('title','Ranking')

@section('content')
<!--Ranking Table Starts/-->

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<table class="table table-striped table-hover">
                  <tr>
                    <th>Name</th>
                    <th>Website Name</th>
                    <th>Website URL</th>
                    <th>Average Score</th>
                    <th>Check Review</th>
                  </tr>
                  @foreach ($totalWebsites as $totalWebsite)
                  <tr>
                  <td>{{ $totalWebsite->ownername }}</td>
                  <td>{{ $totalWebsite->websitename }}</td>
                  <td>{{ $totalWebsite->websiteurl }}</td>
                  <td>   
                    {{ $totalWebsite->avgscore }}
                  </td>
                    <td>
                      @if($totalWebsite->plan==0) 
                        <a href = 'check-front-free-review/{{ $totalWebsite->id }}'>
                      @elseif($totalWebsite->plan==1) 
                        <a href="check-front-text-review/{{ $totalWebsite->id }}">
                      @else
                        <a href="check-front-video-review/{{ $totalWebsite->id }}">
                      @endif
                      <button class="btn btn-success">Check Review</button></a>
                    </td>
                  </tr>
                   @endforeach
                </table>	
				</div>
			</div>
		</div>
	</div>
	
	
</div>
	

@endsection