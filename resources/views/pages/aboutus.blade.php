@extends('main')

@section('title', 'About Us')

@section('content')

<!-- About Us/-->

<div class="container">	
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
				<h3 class="panel-title text-center">Meet Our Team</h3>
			  </div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
				@foreach($data as $data)
					{!!$data->meetourteam!!}
				@endforeach
				</div>
			</div>
		</div>
		<!--
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-body">
				<img src="images/shivang.jpg" height="50%">
				
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-body">
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-body">
				
				<img src="images/mahez.jpg" height="50%">
				</div>
			</div>
		</div>
	</div>
	
						<div class="row">
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-body">
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-body">
				<img src="images/nayan.jpg" height="50%">
				</div>
			</div>
		</div>
		-->
	</div>
</div>

@endsection