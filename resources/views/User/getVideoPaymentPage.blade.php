@extends('usermain')
@section('title', 'Video Payment Page')
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
                <h3 class="panel-title">Video Review Plan</h3>
              </div>
              <div class="panel-body">

        @foreach ($products as $product)
        <form action="{{ route('pay', $product->id) }}" method="POST">
        
            {{ csrf_field() }}

            <div class="col-sm-5 col-md-5">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>Buy Video Review Plan</h3>
                                <p>You will get the following Reviews in Video Review panel-heading</p>
                                <ul>
                                    <li>Responsiveness Score & Review</li>
                                    <li>Layout Score & Review</li>
                                    <li>Color Scheme Detail, Score & Review</li>
                                    <li>Page Speed Score & Review</li>
                                    <li>Usability Score & Review</li>
                                    <li>Content Score & Review</li>
                                    <li>Creativity Score & Review</li>
                                    <li>Cool Video of Your Website Which Covers All The Above Points</li>
                                </ul>
                                <h3>Buy for $50</h3>
                                <p>
                                    <script
                                        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                        data-key="{{ env('STRIPE_KEY') }}"
                                        data-amount="5000"
                                        data-name="Pay Now"
                                        data-description="Pay Using Stripe Payment Gateway"
                                        data-locale="auto"
                                        data-currency="usd">
                                    </script>
                                </p>
                            </div>
                        </div>
                    </div>
                   

    @endforeach         

    </form>

</div>

@endsection

