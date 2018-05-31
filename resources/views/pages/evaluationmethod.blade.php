@extends('main')

@section('title', 'Evaluation Method')

@section('content')

<div class="container">
<div class="row">
<div class="col-md-12">
	@foreach($data as $data)
		{!!$data->description!!}
	@endforeach
	</div>
	</div>
	</div>

	<!--
	
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
			  <div class="panel-heading">
				<h3 class="panel-title text-center">Text Review</h3>
			  </div>
			  <div class="panel-body">
					<p>In the text review plan, we will be measuring four main criteria which are as below:</p>
						<ul>
							<li>Design</li>
							<li>Usability</li>
							<li>Creativity</li>
							<li>Content</li>
						</ul>
						<p>These four criteria will contain sub-criteria.For example, the score of design criteria will be based on different sub-criteria like layout, color scheme and fonts.</p>
						<p>The usability criteria will be measured based on the navigation of the website, loading speed and responsiveness.</p>
						<p>Creativity will be measured according to the inovative ideas and the unique content used in the website.</p>
						<p>The content criteria will be scored according to the content uploaded on the website. Here, we will see if the content is copied or not and things like that.</p>
						<p>The average of the scores of all the four criteria will be considered as the final score.</p>
			  </div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
			  <div class="panel-heading">
				<h3 class="panel-title text-center">Video Review</h3>
			  </div>
			  <div class="panel-body">
				<p>In this plan, we will be measuring the same criteria as shown in the text review section. Here, we will be explaning the functionalities of your website in the video form. We will be giving you scores in the end for each criteria and the average of that will be considered as the final score. The websites submitted for video review will be included in the rankings and the nominations.</p>
				
				
				<p>All the websites will be judged by our jury members. If you want to know about our jury team, visit this link:<a class="aclrbody" href="#"> About Us</a></p>
			  </div>
			</div>
		</div>
	</div>
	-->
</div>

@endsection