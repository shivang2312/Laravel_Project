<html>
    @include('partials._head')

    <body ng-app>
        
      @include('partials._nav')
    
      @yield('content')
                
      @include('partials._footer')    

      @include('partials._scripts')
                   
    </body>
</html>