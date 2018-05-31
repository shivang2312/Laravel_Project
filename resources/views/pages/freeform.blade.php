@extends('usermain')
@section('title', 'Free Form')
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
        

			@if(Session::has('success'))
			    <div class="alert alert-success">
			      {{ Session::get('success') }}
			    </div>
			@endif

        	<div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Free Review Form</h3>
              </div>
              <div class="panel-body">
                
					{!! Form::open(['route'=>'freeform.store']) !!}
						{{ csrf_field() }}

					<div class="form-group {{ $errors->has('websitename') ? 'has-error' : '' }}">
						{!! Form::label('Website Name:') !!}
						{!! Form::text('websitename', old('websitename'), ['class'=>'form-control', 'placeholder'=>'Enter Website Name', 'required' => ''])  !!}
						<span class="text-danger">{{ $errors->first('websitename') }}</span>
					</div>

					<div class="form-group {{ $errors->has('websiteurl') ? 'has-error' : '' }}">
						{!! Form::label('Website URL:') !!}
						{!! Form::text('websiteurl', old('websiteurl'), ['class'=>'form-control', 'placeholder'=>'Enter Website URL']) !!}
						<span class="text-danger">{{ $errors->first('websiteurl') }}</span>
					</div>

					<div class="form-group {{ $errors->has('ownername') ? 'has-error' : '' }}">
						{!! Form::label('Owner Name:') !!}
						{!! Form::text('ownername', old('ownername'), ['class'=>'form-control', 'placeholder'=>'Enter Owner Name']) !!}
						<span class="text-danger">{{ $errors->first('ownername') }}</span>
					</div>

					<div class="form-group {{ $errors->has('designername') ? 'has-error' : '' }}">
						{!! Form::label('Designer Name:') !!}
						{!! Form::text('designername', old('designername'), ['class'=>'form-control', 'placeholder'=>'Enter Designer Name']) !!}
						<span class="text-danger">{{ $errors->first('designername') }}</span>
					</div>

					{!! Form::label('category Name:') !!}
							<select name="category" onchange="if (this.value=='other'){this.form['other'].style.visibility='visible'}else {this.form['other'].style.visibility='hidden'};">
							  <option value="0">Entertainment</option>
							  <option value="1">Sports</option>
							  <option value="2">Ecommerce</option>
							  <option value="3">Fashion</option>
							  <option value="4">Technology</option>
							  <option value="5">Travel</option>
							  <option value="6">Food</option>
							  <option value="7">Social Media</option>
							  <option value="8">Business</option>
							  <option value="other">Other</option>
							</select>
							<input type="textbox" name="other" style="visibility:hidden;"/>

					<div class="form-group {{ $errors->has('country') ? 'has-error' : '' }}">
						{!! Form::label('Country Name:') !!}
						{!! Form::text('country', old('country'), ['class'=>'form-control', 'placeholder'=>'Enter Country']) !!}
						<span class="text-danger">{{ $errors->first('country') }}</span>
					</div>

					<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
						{!! Form::label('Description:') !!}
						{!! Form::textarea('description', old('description'), ['class'=>'form-control', 'placeholder'=>'Enter Description']) !!}
						<span class="text-danger">{{ $errors->first('description') }}</span>
					</div>

					{{ Form::hidden('plan', '0') }}

					{{ Form::hidden('IsSubmitted', '1') }}

					<div class="form-group">
						<button class="btn btn-success">Submit For Free Review Plan!</button>
					</div>

				{!! Form::close() !!}
               
              </div>
              </div>
              </div>
        </div>
      </div>
</section>

@endsection


	
	



