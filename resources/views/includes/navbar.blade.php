<!DOCTYPE html>
<html lang="en">
<body>
  <nav>
    <div class="container">
      <a class="navbar-brand text-center "  href="{{route ('home')}}"><img src="Logo.png" alt="" class="img-fluid"></a>
    </div>
  </nav>

  <nav class="navbar navbar-expand-sm  bg">
    <div class="container">
      <div class="collapse navbar-collapse justify-content-end" id="navbar">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link" href="{{route ('dashboard')}}"><i class="fas fa-chart-line fa-2x"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route ('home')}}"><i class="fas fa-home fa-2x"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route ('incidentes.index')}}"><i class="fas fa-exclamation-triangle fa-2x"></i></a>
          </li>

          <!-- Nova nav-item com dropdown -->
          <li class="nav-item dropdown hover">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-cog fa-2x"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item {{ Request::is('departamentos*') ? 'active' : '' }}" href="{{route ('departamentos.index')}}">Departamento</a>
              <a class="dropdown-item {{ Request::is('tecnicos*') ? 'active' : '' }}" href="{{route ('tecnicos.index')}}">Tecnicos</a>
            </div>
          </li>
          <!-- Fim da nova nav-item -->

        </ul>
      </div>
    </div>
  </nav>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var currentUrl = window.location.href;
      var navbarLinks = document.querySelectorAll('.navbar-nav .nav-link');
      var dropdownLinks = document.querySelectorAll('.navbar-nav .dropdown-item');
      
      navbarLinks.forEach(function(link) {
        if (link.href === currentUrl) {
          link.classList.add('active');
        }
      });

      dropdownLinks.forEach(function(link) {
        link.addEventListener('click', function() {
          navbarLinks.forEach(function(navLink) {
            navLink.classList.remove('active');
          });
          this.closest('.nav-item').querySelector('.nav-link').classList.add('active');
          localStorage.setItem('activeNavLink', this.closest('.nav-item').querySelector('.nav-link').getAttribute('href'));
        });
      });

      // Ativa a nav-link pai quando a página é carregada com um link de dropdown ativo
      var activeNavLink = localStorage.getItem('activeNavLink');
      if (activeNavLink) {
        var activeNavLinkElement = document.querySelector('.navbar-nav .nav-link[href="' + activeNavLink + '"]');
        if (activeNavLinkElement) {
          activeNavLinkElement.classList.add('active');
        }
      }

      // Desativa o hover se nenhum dos dropdown-items estiver ativo
      var dropdown = document.querySelector('.navbar-nav .dropdown');
      var dropdownItems = dropdown.querySelectorAll('.dropdown-item');
      var activeDropdownItem = Array.from(dropdownItems).find(item => item.classList.contains('active'));
      if (!activeDropdownItem) {
        dropdown.classList.remove('hover');
      }
    });
  </script>

  <!-- Inclua o JavaScript do Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Inclua o JavaScript do Font Awesome -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>

</body>
</html>

<style>
  .navbar-nav .active {
    background-color: #ffb606;
    color: white;
    border-radius: 8px;
  }

  .navbar-nav .dropdown:hover .nav-link.active i {
    color: #ffb606;
  }

  .navbar-nav .dropdown:hover .dropdown-menu {
    display: block;
  }

  .navbar-nav .dropdown-item.active {
    background-color: #ffb606;
    color: white;
  }

  .navbar-nav .dropdown-item:hover {
    background-color: #ffb606;
    color: white;
  }

  .nav-item .nav-link{
    color: white ;
  }

  .nav-item .nav-link.active i {
    color: #ffb606;
  }

  .nav-item.dropdown:hover .nav-link.active {
    background-color: #ffb606;
    color: white;
  }

  .nav-item.dropdown:not(.hover) .nav-link.active i {
    color: white;
  }

  .nav-item.dropdown:not(.hover) .nav-link.active {
    background-color: transparent;
  }

  .nav-item.dropdown.hover:hover .nav-link:hover i {
    color: #ffb606;
  }

  .nav-item.dropdown.hover:not(:hover) .nav-link.active {
    background-color: #ffb606;
    color: white;
  }

  .img-fluid{
    width: 100px;
    height: 120px;
  }

  .bg{
    background-color:#0a6116 ;
  }
</style>
