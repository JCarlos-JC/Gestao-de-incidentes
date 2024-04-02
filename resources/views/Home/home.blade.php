<!doctype html>
<html lang="en">
  @include('includes.head')
  <body>
    <header class="navbar navbar-expand-sm navbar-light bg-success">
    <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)">Logo</a>
  </div>
    </header>

    <div class="container my-3 ">
    <div class="container mt-4" id="result"> 
    
         
    <div class="card-body mt-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="card rounded text-white bg-success mb-3" id="ficha">
                    <div class="card-header text-center" >FICHA</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 text-center">
                                <a style="color:white;" href="#">
                                    <i class="bi bi-clipboard2-fill" style="font-size: 7em;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card rounded text-white bg-success mb-3" id="actividades">
                    
                    <div href="" class="card-header text-center">ACTIVIDADE</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 text-center">
                                <a style="color:white;" href="#">
                                    <i class="bi bi-activity" style="font-size: 7em;"></i>
                                </a>
                            </div>
                
                        </div>
                    </div>
                </div>

            </div>
        <div class="col-lg-4">
            <div class="card rounded text-white bg-success mb-3" id="incidentes">
               
                    <div  class="card-header text-center">INCIDENTE</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <a style="color:white;" href="{{ route('dashboard') }}">
                                <i  class="bi bi-bar-chart-fill" style="font-size: 7em;"></i>
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
        
            </div>                      
        </div>                   
    </div>
</div>
</div>
</div>

  </body>
  <div class="bg-light align-items-center fixed-bottom">
  <div>
  <div class="text-center text-dark p-3" style="background-color: #1C8C4D">
    &copy; Copyright 20{{date('y')}} 
    <span class="text-light" >CIUEM DDSA</span>
  </div>
</div>
</div>


</html>

<style>
  body{
    background-color: white;
  }
</style>