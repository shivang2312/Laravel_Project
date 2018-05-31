@extends('main')

@section('title','Profile')

@section('content')

<!--Profile Starts/-->

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
			  
			  <div class="panel-body">
					<table class = "table table-hover">
					   <thead>
						  <tr>
							 <th>Site Name</th>
							 <th>Plan</th>
							 <th>Overall Score</th>
							 <th>Highest Rank</th>
							 <th>Review</th>
						  </tr>
					   </thead>
					   
					   <tbody>
						  <tr>
							 <td>TechiesBlogPoint</td>
							 <td>Text Review</td>
							 <td>8.1</td>
							 <td>2</td>
							 <td><a class="aclrbody" href="/tbpreview">Check Review</a></td>
						  </tr>
						  
						  <tr>
							<td>TutorialsCafe</td>
							 <td>Free Review</td>
							 <td>6.7</td>
							 <td>-</td>
							 <td><a class="aclrbody" href="#">Check Review</a></td>
						  </tr>
					   </tbody>
					   
					</table>
			  </div>
			  </div>
		</div>
	</div>
</div>


@endsection