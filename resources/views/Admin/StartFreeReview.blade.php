@extends('adminmain')
@section('title', 'Start Free Review')
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
              <h3 class="panel-title">Responsiveness Review</h3>
            </div>
            <div class="panel-body">
              <div class="col-md-12">
                @if(Session::has('success'))
                    <div class="alert alert-success">
                      {{ Session::get('success') }}
                    </div>
                @endif

                {!!  Form::open(['route' => ['ShowFreeReview', $myid->id],  'method' => 'POST']) !!}

                 @foreach ($plans as $plan)

             Website Id:    {{ $plan->id }} <br>

             Website Name:    {{ $plan->websitename }}

                 @endforeach
                  
                    {{ csrf_field() }}

              <h3>Responsivness Review</h3>

              <div class="form-group {{ $errors->has('responsiveness_score') ? 'has-error' : '' }}">
                {!! Form::label('Responsivness Score:') !!}
                {!! Form::text('responsiveness_score', old('responsiveness_score'), ['class'=>'form-control', 'placeholder'=>'Responsivness Score']) !!}
                <span class="text-danger">{{ $errors->first('responsiveness_score') }}</span>
              </div>


              <div class="form-group {{ $errors->has('responsiveness_review') ? 'has-error' : '' }}">
                {!! Form::label('Text Review:') !!}
                {!! Form::textarea('responsiveness_review', old('responsiveness_review'), ['class'=>'form-control', 'placeholder'=>'Enter Text Review',  'rows' => 5]) !!}
                <span class="text-danger">{{ $errors->first('responsiveness_review') }}</span>
              </div>

              <hr>

              <h3>Layout Review</h3>

              <div class="form-group {{ $errors->has('layout_score') ? 'has-error' : '' }}">
                {!! Form::label('Layout Score:') !!}
                {!! Form::text('  layout_score', old('  layout_score'), ['class'=>'form-control', 'placeholder'=>'Enter Layout Score']) !!}
                <span class="text-danger">{{ $errors->first('layout_score') }}</span>
              </div>

              <div class="form-group {{ $errors->has('lauout_review') ? 'has-error' : '' }}">
                {!! Form::label('Text Review for Layout:') !!}
                {!! Form::textarea('lauout_review', old('lauout_review'), ['class'=>'form-control', 'placeholder'=>'Enter Text Review for Layout', 'rows' => 5]) !!}
                <span class="text-danger">{{ $errors->first('lauout_review') }}</span>
              </div>

              <hr>

              <h3>Color Scheme Review</h3>

              <div class="form-group {{ $errors->has('color_scheme') ? 'has-error' : '' }}">
                {!! Form::label('Color Scheme of Website:') !!}
                {!! Form::text('color_scheme', old('color_scheme'), ['class'=>'form-control', 'placeholder'=>'Enter Color Scheme of Website']) !!}
                <span class="text-danger">{{ $errors->first('color_scheme') }}</span>
              </div>

              <div class="form-group {{ $errors->has('color_scheme_score') ? 'has-error' : '' }}">
                {!! Form::label('Color Scheme Score:') !!}
                {!! Form::text('color_scheme_score', old('color_scheme_score'), ['class'=>'form-control', 'placeholder'=>'Enter Color Scheme Score']) !!}
                <span class="text-danger">{{ $errors->first('color_scheme_score') }}</span>
              </div>

              <div class="form-group {{ $errors->has('color_scheme_review') ? 'has-error' : '' }}">
                {!! Form::label('Text Review for Color Scheme:') !!}
                {!! Form::textarea('color_scheme_review', old('color_scheme_review'), ['class'=>'form-control', 'placeholder'=>'Enter Text Review for Color Scheme', 'rows' => 5]) !!}
                <span class="text-danger">{{ $errors->first('color_scheme_review') }}</span>
              </div>

              {{ Form::hidden('plan_id', $myid->id) }}

              <div class="form-group">
                <button class="btn btn-success">Submit Review</button>
              </div>

            {!! Form::close() !!}

              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
     