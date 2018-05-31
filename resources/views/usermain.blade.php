<html>
    @include('UserPartials._head')

    <body>
      
      @include('UserPartials._nav')    
    
      @yield('content')  

      @include('UserPartials._scripts')
                   
    </body>
</html>