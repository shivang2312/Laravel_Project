@extends('usermain')
@section('title', 'Check Video Review')
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
        	<div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Website</h3>
              </div>
              <div class="panel-body">

            @foreach($websites as $website)

              Website Name: {{ $website->websitename }}
              <br><br>Website URL: {{ $website->websiteurl }}

            @endforeach
              <br><br>
                <table class="table table-striped table-hover">
                @foreach ($Reviews as $Review)
                  <tr>
                    <th>Parameter</th>
                    <th>Score/Review</th>
                  </tr>
                  <tr>
                    <td>Responsivness Score</td>
                    <td>{{ $Review->responsiveness_score }}</td>
                  </tr>  
                  <tr>
                    <td>Responsivness Review</td>
                    <td>{{ $Review->responsiveness_review }}</td>
                  </tr>
                  <tr>
                    <td>Layout Score</td>
                    <td>{{ $Review->layout_score }}</td>
                  </tr>
                  <tr>
                    <td>Layout Review</td>
                    <td>{{ $Review->lauout_review }}</td>
                  </tr>
                  <tr>
                    <td>Color Scheme</td>
                    <td>{{ $Review->color_scheme }}</td>
                  </tr>
                  <tr>
                    <td>Color Scheme Score</td>
                    <td>{{ $Review->color_scheme_score }}</td>
                  </tr>
                  <tr>
                    <td>Color Scheme Review</td>
                    <td>{{ $Review->color_scheme_review }}</td>
                  </tr>
                  <tr>
                    <td>Page Speed Score</td>
                    <td>{{ $Review->pagespeed_score }}</td>
                  </tr>
                  <tr>
                    <td>Page Speed Review</td>
                    <td>{{ $Review->pagespeed_review }}</td>
                  </tr>
                  <tr>
                    <td>Usability Score</td>
                    <td>{{ $Review->usability_score }}</td>
                  </tr>
                  <tr>
                    <td>Usability Review</td>
                    <td>{{ $Review->usability_review }}</td>
                  </tr>
                  <tr>
                    <td>Content Score</td>
                    <td>{{ $Review->content_score }}</td>
                  </tr>
                  <tr>
                    <td>Content Review</td>
                    <td>{{ $Review->content_review }}</td>
                  </tr>
                  <tr>
                    <td>Creativity Score</td>
                    <td>{{ $Review->creativity_score }}</td>
                  </tr>
                  <tr>
                    <td>Creativity Review</td>
                    <td>{{ $Review->creativity_review }}</td>
                  </tr>
                  <tr>
                    <td>Watch Video</td>
                    <td><a href='{{ asset("images/$website->product_image") }}' target="_blank">{{ $website->product_image }}</a></td>
                  </tr>
                @endforeach                  
                </table>
              </div>
              </div>
              </div>
        </div>
      </div>
</section>

@endsection