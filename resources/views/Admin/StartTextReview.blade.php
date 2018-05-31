@extends('adminmain')
@section('title', 'Start Text Review')
<style type="text/css">
  img{
    margin-top: -1250px;
    margin-left: 600px;
    position: absolute;
  }
</style>

@section('content')

<header id="header">
      <div class="container">
        <div class="row">
        </div>
      </div>
</header>
@foreach ($plans as $plan)
      
<script>
// Specify your actual API key here:
var API_KEY = 'AIzaSyDVdULLpLAlAF0nkT0ZafJP-DdfW0Kk_4Q';

// Specify the URL you want PageSpeed results for here:

var a = '{{$plan->websiteurl}}';

function addhttp(s) {
    if (!s.match(/^[a-zA-Z]+:\/\//))
  {
    s = 'http://' + s;
  }     
    return s;    
}
var b = addhttp(a);

var URL_TO_GET_RESULTS_FOR = b;



var API_URL = 'https://www.googleapis.com/pagespeedonline/v1/runPagespeed?';
var CHART_API_URL = 'http://chart.apis.google.com/chart?';

// Object that will hold the callbacks that process results from the
// PageSpeed Insights API.
var callbacks = {}

// Invokes the PageSpeed Insights API. The response will contain
// JavaScript that invokes our callback with the PageSpeed results.
function runPagespeed() {
  var s = document.createElement('script');
  s.type = 'text/javascript';
  s.async = true;
  var query = [
    'url=' + URL_TO_GET_RESULTS_FOR,
    'callback=runPagespeedCallbacks',
    'key=' + API_KEY,
  ].join('&');
  s.src = API_URL + query;
  document.head.insertBefore(s, null);
}

// Our JSONP callback. Checks for errors, then invokes our callback handlers.
function runPagespeedCallbacks(result) {
  if (result.error) {
    var errors = result.error.errors;
    for (var i = 0, len = errors.length; i < len; ++i) {
      if (errors[i].reason == 'badRequest' && API_KEY == 'yourAPIKey') {
        alert('Please specify your Google API key in the API_KEY variable.');
      } else {
        // NOTE: your real production app should use a better
        // mechanism than alert() to communicate the error to the user.
        alert(errors[i].message);
      }
    }
    return;
  }

  // Dispatch to each function on the callbacks object.
  for (var fn in callbacks) {
    var f = callbacks[fn];
    if (typeof f == 'function') {
      callbacks[fn](result);
    }
  }
}

// Invoke the callback that fetches results. Async here so we're sure
// to discover any callbacks registered below, but this can be
// synchronous in your code.
setTimeout(runPagespeed, 0);



callbacks.displayPageSpeedScore = function(result) {
  var score = result.score;
  
  // Construct the query to send to the Google Chart Tools.
  var query = [
    'chtt=Page+Speed+score:+' + score,
    'chs=180x100',
    'cht=gom',
    'chd=t:' + score,
    'chxt=x,y',
    'chxl=0:|' + score,
  ].join('&');
  var i = document.createElement('img');
  i.src = CHART_API_URL + query;
  document.body.insertBefore(i, null);
};
</script>

@endforeach
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

                {!!  Form::open(['route' => ['ShowTextReview', $myid->id],  'method' => 'POST']) !!}

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
                {!! Form::text('layout_score', old('layout_score'), ['class'=>'form-control', 'placeholder'=>'Enter Layout Score']) !!}
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

              <hr>

              <h3>Loading Speed Review</h3>
              <br><br><br><br><br>              

              <div class="form-group {{ $errors->has('pagespeed_score') ? 'has-error' : '' }}">
                {!! Form::label('Loading Speed Score:') !!}
                {!! Form::text('pagespeed_score', old('pagespeed_score'), ['class'=>'form-control', 'placeholder'=>'Enter Loading Speed Score']) !!}
                <span class="text-danger">{{ $errors->first('pagespeed_score') }}</span>
              </div>

              <div class="form-group {{ $errors->has('pagespeed_review') ? 'has-error' : '' }}">
                {!! Form::label('Text Review for Loading Speed:') !!}
                {!! Form::textarea('pagespeed_review', old('pagespeed_review'), ['class'=>'form-control', 'placeholder'=>'Enter Text Review for Loading Speed', 'rows' => 5]) !!}
                <span class="text-danger">{{ $errors->first('pagespeed_review') }}</span>
              </div>

              <hr>

              <h3>Usability Review</h3>

              <div class="form-group {{ $errors->has('usability_score') ? 'has-error' : '' }}">
                {!! Form::label('Usability Score:') !!}
                {!! Form::text('usability_score', old('usability_score'), ['class'=>'form-control', 'placeholder'=>'Enter Usability Score']) !!}
                <span class="text-danger">{{ $errors->first('usability_score') }}</span>
              </div>

              <div class="form-group {{ $errors->has('usability_review') ? 'has-error' : '' }}">
                {!! Form::label('Text Review for Usability:') !!}
                {!! Form::textarea('usability_review', old('usability_review'), ['class'=>'form-control', 'placeholder'=>'Enter Text Review for Usability', 'rows' => 5]) !!}
                <span class="text-danger">{{ $errors->first('usability_review') }}</span>
              </div>

              <h3>Content Review</h3>

              <div class="form-group {{ $errors->has('content_score') ? 'has-error' : '' }}">
                {!! Form::label('Content Score:') !!}
                {!! Form::text('content_score', old('content_score'), ['class'=>'form-control', 'placeholder'=>'Enter Content Score']) !!}
                <span class="text-danger">{{ $errors->first('content_score') }}</span>
              </div>

              <div class="form-group {{ $errors->has('content_review') ? 'has-error' : '' }}">
                {!! Form::label('Text Review for Content:') !!}
                {!! Form::textarea('content_review', old('content_review'), ['class'=>'form-control', 'placeholder'=>'Enter Text Review for Content', 'rows' => 5]) !!}
                <span class="text-danger">{{ $errors->first('content_review') }}</span>
              </div>

              <h3>Creativity Review</h3>

              <div class="form-group {{ $errors->has('creativity_score') ? 'has-error' : '' }}">
                {!! Form::label('Creativity Score:') !!}
                {!! Form::text('creativity_score', old('creativity_score'), ['class'=>'form-control', 'placeholder'=>'Enter Creativity Score']) !!}
                <span class="text-danger">{{ $errors->first('creativity_score') }}</span>
              </div>

              <div class="form-group {{ $errors->has('creativity_review') ? 'has-error' : '' }}">
                {!! Form::label('Text Review for Creativity:') !!}
                {!! Form::textarea('creativity_review', old('creativity_review'), ['class'=>'form-control', 'placeholder'=>'Enter Text Review for Creativity', 'rows' => 5]) !!}
                <span class="text-danger">{{ $errors->first('creativity_review') }}</span>
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
     