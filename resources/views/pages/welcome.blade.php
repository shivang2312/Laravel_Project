
@extends('main')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title text-center">TechiesBlogPoint : 8.1</h3>
          </div>
          <div class="panel-body">
            {{ Html::image('images/tbp.JPG') }}
          </div>
          <div class="panel-footer text-center">Website of the Day</div>
        </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title text-center">TutorialsPoint : 7.8</h3>
          </div>
          <div class="panel-body">
            {{ Html::image('images/tut.JPG') }}
          </div>
          <div class="panel-footer text-center">Website of the Week</div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title text-center">W3Schools : 8</h3>
          </div>
          <div class="panel-body">
            {{ Html::image('images/w3.JPG') }}
          </div>
          <div class="panel-footer text-center">Website of the Month</div>
        </div>
    </div>
  </div>

  <div class="row">
  <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading plan-head">
          <h3 class="panel-title text-center">Plans</h3>
        </div>
        
        <div class="panel-body">
          <div class="row">
              <div class="col-md-4">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title text-center">Free Review</h3>
                    </div>
                    <div class="panel-body text-center plan-panel">
                      <h4>Price : 0.00 INR</h4>
                      <p>Website will be measured according to:</p>
                      <p>Color Scheme</p>
                      <p>Responsiveness</p>
                      <p>Loading Speed</p>
                      <p>Layout</p>
                    </div>
                    <div class="panel-footer text-center">
                      <a class="btn btn-primary btn-block" href="/loginorregister">Submit Your Website</a>
                    </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title text-center">Text Review</h3>
                    </div>
                    <div class="panel-body text-center plan-panel">
                  <h4>Price : 2500.00 INR</h4>
                  <p>Website will be measured according to:</p>
                  <p>Color Scheme</p>
                  <p>Responsiveness</p>
                  <p>Loading Speed</p>
                  <p>Layout</p>
                  <p>Usability</p>
                  <p>Creativity</p>
                  <p>Content</p>
                    </div>
                    <div class="panel-footer text-center">
                      <a class="btn btn-primary btn-block" href="/loginorregister">Submit Your Website</a>
                    </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title text-center">Video Review</h3>
                    </div>
                    <div class="panel-body text-center plan-panel">
                          <h4>Price : 5000.00 INR</h4>
                          <p>In this plan, we will provide a detailed video review of your website</p>
                    </div>
                    <div class="panel-footer text-center">
                      <a class="btn btn-primary btn-block" href="/loginorregister">Submit Your Website</a>
                    </div>
                  </div>
              </div>
        </div>
       </div>
      </div>
      </div>
</div>
</div>    

@endsection