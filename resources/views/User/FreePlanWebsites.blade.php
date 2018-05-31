@extends('usermain')
@section('title', 'Free Plan Websites')
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
              <h3 class="panel-title">Total Submitted Websites For Free Review Plan</h3>
            </div>
            <div class="panel-body">
              <table class="table table-striped table-hover">
                  <tr>
                    <th>Website Name</th>
                    <th>Website URL</th>
                    <th>IsReviewed</th>
                  </tr>
                  @foreach ($freeplanwebsites as $freeplanwebsite)
                  <tr>
                  <td>{{ $freeplanwebsite->websitename }}</td>
                  <td>{{ $freeplanwebsite->websiteurl }}</td>
                  <td>   
                    @if($freeplanwebsite->IsReviewed==0) 
                      No 
                    @else 
                      Yes
                    @endif
                  </td>
                  </tr>
                   @endforeach
                </table>
                {{$freeplanwebsites->links()}}
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>

@endsection
     