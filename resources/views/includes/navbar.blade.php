<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Navbar</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- Inclua o CSS do Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
  .navbar-nav .active {
    background-color: #ffb606;
    color: white;
    border-radius: 8px;
  }

  .nav-item .nav-link{
  color: white ;
  }

  .img-fluid{
    width: 100px;
    height: 120px;
  }

  .bg{
    background-color:#0a6116 ;
  }
</style>
</head>
<body>
  <nav>
    <div class="container">
        <a class="navbar-brand text-center "  href="{{route ('home')}}"><img src="Logo.png" alt="" class="img-fluid">
    
      </a>
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
        <li class="nav-item">
          <a class="nav-link" href="{{route ('departamentos.index')}}"><i class="fas fa-building fa-2x"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route ('tecnicos.index')}}"><i class="fas fa-users fa-2x"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    var currentUrl = window.location.href;
    var navbarLinks = document.querySelectorAll('.navbar-nav .nav-link');
    
    navbarLinks.forEach(function(link) {
      if (link.href === currentUrl) {
        link.classList.add('active');
      }
    });
  });
</script>

<!-- Inclua o JavaScript do Font Awesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>

</body>
</html>
