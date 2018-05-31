@extends('adminmain')
@section('title', 'User List')
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
              <h3 class="panel-title">All Users</h3>
            </div>
            <div class="panel-body">
              <table class="table table-striped table-hover">
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Website URL</th>
                    <th>Make/Remove Admin</th>
                  </tr>
                  @foreach ($users as $user)
                  <tr>
                  <td >{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>
                    @foreach ($plans as $plan)
                      @if($user->id == $plan->user_id)
                        {{ $plan->websiteurl }}
                        <br>
                      @endif
                    @endforeach                  
                  </td>
                  <td style="vertical-align:middle;">
                  @if($user->admin && $user->id == Auth::id())
                   <a href="/remove-admin/{{ $user->id }}"><button class="btn btn-danger"> Remove Admin</button></a>
                  @elseif($user->admin)
                    <a href="/remove-admin/{{ $user->id }}"><button class="btn btn-danger"> Remove Admin</button></a>
                  @else
                    <a href="/make-admin/{{ $user->id }}"><button class="btn btn-success">Make Admin</button></a>
                  @endif
                  </td>
                  </tr>
                   @endforeach
                </table>

                {{ $users->links()}}
            </div>
          </div>
          </div>
        </div>
    </section>

@endsection
     