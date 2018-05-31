@extends('main')

@section('content')

<section id="main">
      <div class="container-fuild">
        <div class="row">
        <div class="col-md-1">
        </div>          
        <div class="col-md-10">
        	<div class="panel panel-default">
          <div class="panel-heading">
        <h3 class="panel-title text-center">Website Details</h3>
        </div>
              <div class="panel-body">

             @foreach($websites as $website)

            <table class="table table-striped table-hover">
            <tr>
            <th width="60%">Field</th>
            <th>Values</th>
            </tr>
              <tr>
                <td>Website Name</td>
                <td>{{ $website->websitename }}</td>
              </tr>
              <tr>
                <td>Website URL</td>
                <td>{{ $website->websiteurl }}</td>
              </tr>
              <tr>
                <td>Owner Name</td>
                <td>{{ $website->ownername }}</td>
              </tr>
              @if($website->designername != "")
               <tr>
                <td>Owner Name</td>
                <td>{{ $website->ownername }}</td>
              </tr>
              @endif
              <tr>
                <td>Category Name</td>
                <td>{{ $website->category }}</td>
              </tr>
              <tr>
                <td>Country Name</td>
                <td>{{ $website->country }}</td>
              </tr>
              <tr>
                <td>Description of Website</td>
                <td>{{ $website->description }}</td>
              </tr>
              <tr>
                <td>Average Score</td>
                <td>{{ $website->avgscore }}</td>
              </tr>

            </table>
            @endforeach  
            </div>
            </div>
            <div class="panel-default">

            <div class="panel-heading">
        <h3 class="panel-title text-center">Review Of Website</h3>
        </div>
        <div class="panel-body">
              
                <table class="table table-striped table-hover">
                @foreach ($Reviews as $Review)
                  <tr>
                    <th width="60%">Parameter</th>
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
                @endforeach                  
                </table>
              </div>
              </div>
              </div>
        </div>
      </div>
</section>

@endsection