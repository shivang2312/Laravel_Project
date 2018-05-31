@extends('main')

@section('title', 'About Us')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
		<h2><strong>Sorry - Page Not Found!</strong></h2>
          <h3>The page you are looking for was moved, removed, renamed<br>or might never existed. You stumbled upon a broken link :(</h3>

			{{ Html::image('images/404page.png', 'alt' , array( 'width' => '100%', 'height' => '70%' )) }}
			<br><br>
		</div>
		<div class="col-md-2">
		</div>
	</div>
</div>

@endsection