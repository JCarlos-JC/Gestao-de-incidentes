<!doctype html>
<html lang="en">
@include('includes.head')

<body>
    <header class="navbar navbar-expand-sm navbar-light bg">
        <div class="container">
            <a class="navbar-brand" href="#">Logo</a>
        </div>
    </header>

    <div class="container" style="margin-top: 130px;">
        
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card text-white bg mb-3">
                    <div class="card-header text-center">FICHA</div>
                    <div class="card-body text-center">
                        <a href="#">
                            <i class="bi bi-clipboard2-fill" style="font-size: 7em; color:white;"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card text-white bg mb-3">
                    <div class="card-header text-center">ACTIVIDADE</div>
                    <div class="card-body text-center">
                        <a href="#">
                            <i class="bi bi-activity" style="font-size: 7em; color:white;"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card text-white bg mb-3">
                    <div class="card-header text-center">INCIDENTE</div>
                    <div class="card-body text-center">
                        <a href="{{ route('dashboard') }}">
                            <i class="bi bi-bar-chart-fill" style="font-size: 7em; color:white;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('includes.footer')
</body>

</html>

<style>
    body {
        background-color: white;
        font-family: 'Poppins', sans-serif; /* Adicionando a fonte Poppins */
    }

    .bg {
        background-color: #0a6116;
    }
</style>
