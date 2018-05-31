@extends('main')

@section('title','Ranking')

@section('content')
<!--Ranking Table Starts/-->

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
				<div class="col-md-1">
					</div>
					<div class="col-md-4">
					 <div class="well dash-box">
						<h3>If You are New User then Please Register</h3><br>
						<a href="/register"><button class="btn btn-success">Click Here to Register</button></a>
						</div>
					</div>
					<div class="col-md-1">
					</div>
					<div class="col-md-4">
						<div class="well dash-box">
						<h3>If You are Existing User then Please Login</h3><br>
						<a href="/login"><button class="btn btn-success">Click Here to Login</button></a>
						</div>
					</div>
					<div class="col-md-2">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection