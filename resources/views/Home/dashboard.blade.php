<!doctype html>
<html lang="en">
   @include('includes.head')
  <body>
        <!-- Nav -->
    @include('includes.navbar')
        <!-- /Nav -->

        @yield('content')

        <!-- js -->
    @include('includes.js')
        <!-- /js -->


          <!-- footer -->
        @include('includes.footer')
          <!-- /footer -->
    </body>

</html>

<style>
  body{
    background-color: white;
    font-family: 'Poppins', sans-serif; /* Adicionando a fonte Poppins */
  }
</style>