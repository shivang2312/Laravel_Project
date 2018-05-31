@extends('usermain')
@section('title', 'User Reviewed Websites')
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
            <div class="panel-heading">
              <h3 class="panel-title">Reviewed Websites</h3>
            </div>
            <div class="panel-body"> 

              @foreach ($reviewedWebsites as $reviewedWebsite)

              @foreach ($plans as $plan)
              <h4>Website Name: {{$plan->websitename}}</h4>
              
              @if($plan->plan == 0)
              
                <h4>Responsivness Score: {{ $reviewedWebsite->responsiveness_score }}</h4>
                <h4>Responsivness Review: {{ $reviewedWebsite->responsiveness_review }}</h4>

                <h4>Layout Score: {{ $reviewedWebsite->layout_score }}</h4>
                <h4>Layout Review: {{ $reviewedWebsite->lauout_review }}</h4>

                <h4>Color Scheme of Website: {{ $reviewedWebsite->color_scheme }}</h4>
                <h4>Color Scheme Score: {{ $reviewedWebsite->color_scheme_score }}</h4>
                <h4>Color Scheme Review: {{ $reviewedWebsite->color_scheme_review }}</h4>

              @elseif($plan->plan == 1)

                <h4>Responsivness Score: {{ $reviewedWebsite->responsiveness_score }}</h4>
                <h4>Responsivness Review: {{ $reviewedWebsite->responsiveness_review }}</h4>

                <h4>Layout Score: {{ $reviewedWebsite->layout_score }}</h4>
                <h4>Layout Review: {{ $reviewedWebsite->lauout_review }}</h4>

                <h4>Color Scheme of Website: {{ $reviewedWebsite->color_scheme }}</h4>
                <h4>Color Scheme Score: {{ $reviewedWebsite->color_scheme_score }}</h4>
                <h4>Color Scheme Review: {{ $reviewedWebsite->color_scheme_review }}</h4>

                <h4>Page Speed Score: {{ $reviewedWebsite->pagespeed_score }}</h4>
                <h4>Page Speed Review: {{ $reviewedWebsite->pagespeed_review }}</h4>

                <h4>Usability Score: {{ $reviewedWebsite->usability_score }}</h4>
                <h4>Usability Review: {{ $reviewedWebsite->usability_review }}</h4>

                <h4>Content Score: {{ $reviewedWebsite->content_score }}</h4>
                <h4>Content Review: {{ $reviewedWebsite->content_review }}</h4>

                <h4>Creativity Score: {{ $reviewedWebsite->creativity_score }}</h4>
                <h4>Creativity Review: {{ $reviewedWebsite->creativity_review }}</h4><br>

              @else
                <h4>Responsivness Score: {{ $reviewedWebsite->responsiveness_score }}</h4>
                <h4>Responsivness Review: {{ $reviewedWebsite->responsiveness_review }}</h4>

                <h4>Layout Score: {{ $reviewedWebsite->layout_score }}</h4>
                <h4>Layout Review: {{ $reviewedWebsite->lauout_review }}</h4>

                <h4>Color Scheme of Website: {{ $reviewedWebsite->color_scheme }}</h4>
                <h4>Color Scheme Score: {{ $reviewedWebsite->color_scheme_score }}</h4>
                <h4>Color Scheme Review: {{ $reviewedWebsite->color_scheme_review }}</h4>

                <h4>Page Speed Score: {{ $reviewedWebsite->pagespeed_score }}</h4>
                <h4>Page Speed Review: {{ $reviewedWebsite->pagespeed_review }}</h4>

                <h4>Usability Score: {{ $reviewedWebsite->usability_score }}</h4>
                <h4>Usability Review: {{ $reviewedWebsite->usability_review }}</h4>

                <h4>Content Score: {{ $reviewedWebsite->content_score }}</h4>
                <h4>Content Review: {{ $reviewedWebsite->content_review }}</h4>

                <h4>Creativity Score: {{ $reviewedWebsite->creativity_score }}</h4>
                <h4>Creativity Review: {{ $reviewedWebsite->creativity_review }}</h4>
                <br>
              @endif
              @endforeach
              @endforeach
            
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>

@endsection
     