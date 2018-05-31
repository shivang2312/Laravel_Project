@extends('adminmain')
@section('title', 'Text Plan Websites')
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
              <h3 class="panel-title">Total Submitted Websites For Text Review Plan</h3>
            </div>
            <div class="panel-body">
              <table class="table table-striped table-hover">
                  <tr>
                    <th>Name</th>
                    <th>Website Name</th>
                    <th>Website URL</th>
                    <th>IsReviewed</th>
                  </tr>
                  @foreach ($textplanwebsites as $textplanwebsite)
                  <tr>
                  <td>{{ $textplanwebsite->ownername }}</td>
                  <td>{{ $textplanwebsite->websitename }}</td>
                  <td>{{ $textplanwebsite->websiteurl }}</td>
                  <td>   
                    @if($textplanwebsite->IsReviewed==0) 
                      No 
                    @else 
                      Yes
                    @endif
                  </td>
                  </tr>
                   @endforeach
                </table>
                {{$textplanwebsites->links()}}
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>

@endsection
     