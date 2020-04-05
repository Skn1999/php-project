<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRS</title>
    <link rel="stylesheet" href="/css/app.css">
    <!-- {{-- Carousel CSS --}} -->
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/carousel/dist/assets/owl.theme.default.min.css">

    <!-- {{-- Bootstrap CSS --}} -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/company.css">
    
</head>
<body>

    <!-- {{-- side drawer --}} -->
    <div class="bmd-layout-container bmd-drawer-f-l bmd-drawer-overlay">
        <div id="dw-s2" class="bmd-layout-drawer bg-faded sideDrawer ">
          <div>
            <img src="/assets/images/blue-logo.png" alt="hired.">
            <p class="orgName">
              Organisation's Name
            </p>
          </div>
          <div>
            <!-- {{-- <a href="/company/{{ $data['data']->company_id }}/edit"> <button class="btn" >Edit Profile</button></a> --}} -->
            <a href="/login"> <button class="btn" >Log Out <img class="logOutBtn" src="/assets/svgs/back-arrow.svg" alt=""> </button></a>
        </div>
        </div>
        <main class="bmd-layout-content">
            <button class="navbar-toggler navToggler" type="button" data-toggle="drawer" data-target="#dw-s2">
                <span class="sr-only">Toggle drawer</span>
                <i class="material-icons">menu</i>
            </button>
          <div class="container-fluid mainContent">
            <!-- @include('inc.message') -->
            
            <div class="container">
        
              <h1 class="mt-3">Job Info</h1>
              <div class="row paper w-100 py-5 px-5">
      
                  <div class="col-12">
                      <p class="sub-heading">Posted By:</p>
                      <h1 class="heading2">{{ $data['company']->name }} </h1>
                      <hr />
                  </div>
                  
                  <div class="col-12 mt-3 pt-3">
                      <p class="sub-heading">Job Information:</p>
                      <div class="row mt-3 align-items-center">
                          <div class="col">
                              <p class="sub-title">Job Title</p>
                              <h1 class="heading2">{{ $data['job']->job_position }} </h1>
                          </div>
                          <div class="col">
                              <p class="sub-title">Eligibility</p>
                              <p class="para"> {{$data['job']->eligibility}} </p>
                          </div>
                          <div class="col">
                              <p class="sub-title">Number of vacancies</p>
                              <p class="para"> {{$data['job']->no_of_vacancies}} </p>
                          </div>
                          <div class="col">
                              <p class="sub-title">Location</p>
                              <p class="para"> {{$data['job']->location}} </p>
                          </div>
                      </div>
                      <hr />
                  </div>
              
                  <div class="col-12 mt-3 pt-3">
                      <p class="sub-heading">Company Info</p>
                      <div class="row mt-3">
                          <div class="col">
                              <p class="sub-title">Company Domain</p>
                              <h1 class="para">{{ $data['company']->domain }} </h1>
                          </div>
                          <div class="col">
                              <p class="sub-title">Registered In</p>
                              <p class="para"> {{$data['company']->year}} </p>
                          </div>
                          <div class="col">
                              <p class="sub-title">Email</p>
                              <a href="mailto:{{ $data['company']->email}}" class="btn btn-link m-0 p-0"> {{$data['company']->email}} </a>
                              <div class="alert alert-info mt-3">
                                  <small>Click on the email to send the mail to the company.</small>
                              </div>
                          </div>
                          
                      </div>
                  </div>
              </div>
              
          </div>

          </div>
        </main>
    </div>
    
    

    
    <!-- {{-- Bootstrap JS --}} -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
    <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
    <!-- {{-- Carousel JS --}} -->
    {{-- <script src="/jquery-3.4.1.js"></script> --}}
    <script src="/js/owl.carousel.js"></script>
</body>
</html>