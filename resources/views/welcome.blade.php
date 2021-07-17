<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/main.css')}}">
  </head>
  <body>
      <nav class="navbar navbar-expand-sm navbar-light bg-light">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  <li class="nav-item active">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                      <div class="dropdown-menu" aria-labelledby="dropdownId">
                          <a class="dropdown-item" href="#">Action 1</a>
                          <a class="dropdown-item" href="#">Action 2</a>
                      </div>
                  </li>
              </ul>
            
          </div>
      </nav>

      <div id="carouselId" class="carousel slide " data-ride="carousel">
          <ol class="carousel-indicators">
              <li data-target="#carouselId" data-slide-to="0" class="active"></li>
              <li data-target="#carouselId" data-slide-to="1"></li>
              
          </ol>
          <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img src="{{asset('images/carousel-img4.jpg')}}" alt="">
                  <div class="carousel-caption d-block">
                      <h3>Title</h3>
                      <p>Description</p>
                  </div>
              </div>
              <div class="carousel-item">
                <img src="{{asset('images/carousel-img3.jpg')}}" alt="">
                  <div class="carousel-caption d-block">
                      <h3>Title</h3>
                      <p>Description</p>
                  </div>
              </div>
              
          </div>
          <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </a>
      </div>

      <!--Ways To Get Involved Container -->
      <div class="container-fluid mt-5">
          <div class="row">
              <div class="col-md-6 pl-5">
              <h5 class="text-primary pb-1">GET INVOLVED</h5>
              
              <h1 class="text-bolder">Ways To Help</h1>
              <div class="hr mt-3 mb-3"></div>
              <p class="text-muted text-lg">Blood Center is public donation center with blood donation members in the 
                changing health care system. Founded in 1978, Blood Center
                 is one of the nation’s oldest and largest nonprofit 
                 transfusion medicine organizations. We provide
                a blood and volunteer services across the US. 
                With our national footprint, deep community roots and
                specialized services, we are the thread that connects people 
                   and resources together to fuel progress in transfusion medicine.</p>
                 
                   <!--Ways To Get Involved List-->
                   <div class="container-fluid mt-5">
                       <div class="row">
                           <div class="col-md-6 list-container">
                            <ul class="list-styled text-muted">
                                <li>Inspiring people to give blood</li>
                                <li>Specialist blood donors and clinical supervision.</li>
                                <li>Producing a safe and ready blood supply</li>
                            </ul>  
                           </div>

                           <div class="col-md-6">
                            <ul class="list-styled text-muted">
                                <li>Inspiring people to give blood</li>
                                <li>Specialist blood donors and clinical supervision.</li>
                                <li>Producing a safe and ready blood supply</li>
                            </ul>  
                           </div>

                       </div>
                   </div>
                   <!--End ways to get involved List-->
                   
              </div>
              <div class="col-md-6 ">
                <img src="{{asset('images/img1.jpeg')}}" alt="image-1" class="img-1"> 
            </div>
          </div>
      </div>
       <!--End Ways To Get Involved Container-->

       <!--Donation Information Container-->
       <div class="container-fluid mt-5">
           <div class="row">
               <!--Announcements Container-->
               <div class="col-md-4  ">
                   <div class="announcement-container">
                    <h2 class="text-white text-bolder ptl">
                        Announcements
                    </h2>
                    <a href="" class="btn btn-red">Learn more</a>
                   </div>
               </div>
                <!--End Announcements Container-->


              <!--Donation Process Container-->
              <div class="col-md-4  ">
                  <div class="donation-process-container ">
                    <h2 class="text-white text-bolder ptl">
                        Donation Process
                    </h2>
                    <a href="" class="btn btn-red">Learn more</a>
                  </div>
                

            </div>
            <!--End Donation Process Container-->


             <!--Eligibilty Container-->
             <div class="col-md-4 ">
                 <div class="eligibility-container">
                    <h2 class="text-white text-bolder ptl">
                       Eligibilty
                    </h2>
                    <a href="" class="btn btn-red">Learn more</a>
                 </div>
              

            </div>
            <!--End Elegibilty Container-->
           </div>
       </div>
        <!--End Donation Information Container-->

        
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>