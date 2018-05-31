<!--Page header/-->
<div class="page-header my-header">
    <div class="container">
    <h1 class="head">WebInspiration<small class="head"> Be The Inspiration</small></h1>
    <!--Navigation Bar/-->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"></a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="/">Home</a></li>
            <li><a href="/evaluationmethod">Evaluation Method</a></li>
            <li><a href="/ranking">Ranking</a></li>
            <li><a href="/about">About Us</a></li>
            <li><a href="/contact-us">Contact Us</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        @if(Auth::user())
            @if(Auth::user()->admin)
               <li><a href="/dashboard">Go to Admin Panel</a></li> 
            @else
                <li><a href="/user-dashboard">Go to User Panel</a></li>
            @endif
            <li><a href="/logout">Logout</a></li>  
        @else
             <li><a href="/login">Login</a></li>
              <li><a href="/register">Register</a></li>
        @endif
        </ul>
        </div>
    </nav>
    </div>
</div>