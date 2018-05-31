@extends('adminmain')
@section('title', 'Admin About Us')
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
              <h3 class="panel-title">About Us</h3>
            </div>
            <div class="panel-body">
            
              <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=j30xlpgqlbhadpz7hihjvvfs6rr7gi1lhfph860w5k4burn2"></script>
          
			<script>
				tinymce.init({
					selector : 'textarea'
				});
			</script>

			{!! Form::open(['route'=>'adminaboutus.store']) !!}
					{{ csrf_field() }}

					{!! Form::textarea('meetourteam') !!} 
					<br>
					<div class="form-group">
						<button class="btn btn-success" ">Submit About Page</button>
					</div>

				{!! Form::close() !!}
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>

@endsection