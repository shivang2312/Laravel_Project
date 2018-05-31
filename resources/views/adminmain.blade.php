<html>
    @include('AdminPartials._head')

    <body>
      
      @include('AdminPartials._nav')    
       
      @yield('content')  

      @include('AdminPartials._scripts')
                   
    </body>
</html>