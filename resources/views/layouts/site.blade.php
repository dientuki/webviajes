<!DOCTYPE html>
<html lang="es">
  <head>
    @include ('main-parts/head')
  </head>

  <body>
    @include ('widgets/alerts')

    @include ('main-parts/header')

    <div class="main-content">
      <main id="main">
        <div class="main-wrapper clearfix">
          @yield('content')
        </div>
      </main>

      <aside id="aside">
        @include ('widgets/tactic-1')
        @include ('widgets/work-us')
      </aside>
    </div>



    @include ('main-parts/footer')
  	@include ('main-parts/script')
  	
  </body>

</html>