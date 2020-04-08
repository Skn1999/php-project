<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRS</title>
    <link rel="stylesheet" href="../css/app.css">
    <!-- {{-- Carousel CSS --}} -->
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <link rel="stylesheet" href="../css/carousel/dist/assets/owl.theme.default.min.css">

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/company.css">
</head>
<body>

    <!-- {{-- side drawer --}} -->
    <div class="bmd-layout-container bmd-drawer-f-l bmd-drawer-overlay">
        <div id="dw-s2" class="bmd-layout-drawer bg-faded sideDrawer ">
          <div>
            <img src="./../assets/images/blue-logo.png" alt="hired.">

              <?php
                  $con=mysqli_connect("localhost", "root", null, "CRS") or die(mysqli_error($con));
                  session_start();
                  $email=$_SESSION['email'];

                  $selQry = "select * from company where email='$email';";
                  $selQryRst = mysqli_query($con,$selQry) or die(mysqli_error($con));

                  // $nor=0;
                  // $nor=mysqli_num_rows($selQryRst);

                  $row = mysqli_fetch_array($selQryRst);
              ?>
              <p class="orgName">
                  <?php echo($row['name']) ;?>
              </p>
          </div>

<!--             <p class="orgName">
              organisation's name
            </p>
          </div> -->
          <div>
            
            <a href="./../logout.php"> <button class="btn" >Log Out <img class="logOutBtn" src="./../assets/svgs/back-arrow.svg" alt=""> </button></a>
        </div>
        </div>
        <main class="bmd-layout-content">
            <button class="navbar-toggler navToggler" type="button" data-toggle="drawer" data-target="#dw-s2">
                <span class="sr-only">Toggle drawer</span>
                <i class="material-icons">menu</i>
            </button>
          <div class="container-fluid mainContent">
            <!-- @include('inc.message') -->
            <div class="row">
              <div class="main col-md-8 col-sm-12" >
                  <img src="./../assets/images/blue-logo.png" alt="hired."/>
                  <div class='contentBlock' >
                      <h4 class="sub-heading">DashBoard</h4>
                      <div class="banner">
                          <div>
                              <h2 class="alertTitle">Welcome back!</h2>
                              <p class="subtitle">Let's get you started</p>
                              <p class="links">Need help ?</p>
                          </div>
                          <div>
                              <img src="./../assets/svgs/work-.svg" alt=""/>
                          </div>
                      </div>
                  </div>
              
                  <!-- {{-- Pending Jobs --}} -->
                  <div class='contentBlock' >
                      <h4 class="sub-heading">Pending</h4>
                      <div class="owl-carousel owl-theme">


                        <?php

                            $con=mysqli_connect("localhost", "root", null, "CRS") or die(mysqli_error($con));
                            // session_start();
                            $email=$_SESSION['email'];

                        //     $selQry = "select * from job where email='$email';";
                        //     $selQryRst = mysqli_query($con,$selQry) or die(mysqli_error($con));

                        //     // $nor=0;
                        //     $nor=mysqli_num_rows($selQryRst);

                        //     // echo $nor;

                        //   if(!mysqli_num_rows($selQryRst))
                        //   {
                        ?>
                             <div class="item">
                               <div class="jobCard">
                                   <p>
                                       <span class="parameter"><h4>No Pending Jobs</h4></span>
                                   </p>
                               </div>
                             </div>
                        <?php
                        // }
                        //   while($row = mysqli_fetch_array($selQryRst))
                            while($row <5 )
                          {
                        ?>
                                  <div class="item">
                                    <div class="jobCard">
                                        <h2 class="jobtitle">Job Profile: Designer </h2>
                                        <p>
                                            <span class="parameter">Posted by : </span>
                                            <span class="paramValue">XYZ</span>
                                        </p>

                                        <p>
                                            <span class="parameter">Job Location : </span>
                                            <span class="paramValue"> Bangalore </span>
                                        </p>


                                        <p>
                                            <span class="parameter">Salary : </span>
                                            <span class="paramValue">8 LPA</span>
                                        </p>

                                        <!-- <a href="#" class="linkBtn">
                                            <span class="btn">
                                                VIEW MORE
                                            </span>
                                        </a> -->
                                    </div>
                                    <br>
                                  </div>
                          <?php
                            }
                          ?>
                                                    
                      </div>
                  </div>
              
              </div>
              <div class="postJobForm  col-md-4 col-sm-12">
                  <p class="links">Post Job</p>
                  <form action="../jCompanyJob/jPostJob.php" method="POST" class="postJob" id="form">
                      <!-- @csrf -->
                      <div class="form-group">
                          <label for="jobPosition" class="bmd-label-floating">Job Position</label>
                          <input class="form-control" id="jobPosition" name="jobPosition" type="text" variant="outlined">
                          <span class="text-danger" id="jobPosErr"></span>
                      </div>

                      <div class="form-group">
                          <label for="skills" class="bmd-label-floating">Skills Required ( Comma separated )</label>
                          <input class="form-control" id="skills" name="skills" type="text" variant="outlined">
                          <span class="text-danger" id="skillErr"></span>
                      </div>

                      <div class="form-group">
                          <label for="salary" class="bmd-label-floating">Salary(LPA)</label>
                          <input class="form-control" name="salary" type="text" variant="outlined" id="sal">
                          <span class="text-danger" id="salErr"></span>
                      </div>

                      <!-- <div class="form-group">
                          <label for="eligibility" class="bmd-label-floating">Eligibility criteria</label>
                          <input class="form-control" id="eligibility" name="eligibility" type="text" variant="outlined">
                          <span class="text-danger">{{ $errors->first("eligibility")}}</span>
                      </div> -->

                      <div class="form-group">
                          <label for="vacancy" class="bmd-label-floating">Number of Vacancies</label>
                          <input class="form-control" id="vacancy" name="vacancy"  type="number" variant="outlined">
                          <span class="text-danger" id="vacErr"></span>
                      </div>
                      <div class="form-group">
                          <label for="location" class="bmd-label-floating">Job Location</label>
                          <input class="form-control" id="location" name="location" type="text" variant="outlined">
                          <span class="text-danger" id="jobLocErr"></span>
                      </div>
                      <button type="submit" variant="contained" class="btn btnRoot" >Post job</button>
                  </form>
              </div>
          </div>
          </div>
        </main>
    </div>
    
    

    
    <!-- {{-- Bootstrap JS --}} -->
    <script>
        
                $(function() {
                    
                    $("#form").submit(function(event) {

                        var jobPos=$("#jobPosition").val();
                        var skill=$("#skills").val();
                        var sal=$("#sal").val();
                        var vac=$("#vacancy").val();
                        var jobLoc=$("#location").val();
                        // document.write(email);

                        var flag=0;

                        if(jobPos=="" || sal=="" || vac=="" || jobLoc=="" || skill=="")
                        {
                            if(jobPos=="")
                                $("#jobPosErr").html("Job Position cant be empty");
                            if(skill=="")
                                $("#skillErr").html("Skills cant be empty");
                            if(sal=="")
                                $("#salErr").html("Salary cant be empty");
                            if(vac=="")
                                $("#vacErr").html("Vacancy cant be empty");
                            if(jobLoc=="")
                                $("#jobLocErr").html("Job Location cant be empty");
                            flag=flag+1;
                        }
                        
                        if(vac<=0)
                        {
                            $("#vacErr").html("Vacancy should be greater than 0");
                            flag=flag+1;
                        }

                        if(sal<=0)
                        {
                            $("#salErr").html("Salary should be greater than 0");
                            flag=flag+1;
                        }
                        if(flag==0)
                        {
                            var data=$("#form : input").serializeArray();
                            $.post($("#form").attr("action"),data,function(info){

                                //Code

                            });
                        }
                        event.preventDefault();

                        flag=0;
                        // name="";
                        // domain="";
                        // email="";
                        // pwd1="";
                        // pwd2="";
                        // year=-1;
                    });
                });
            </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
    <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
    <!-- {{-- Carousel JS --}} -->
    <!-- {{-- <script src="/jquery-3.4.1.js"></script> --}} -->
    <script src="../js/owl.carousel.js"></script>
    <script>
        $(".owl-carousel").owlCarousel({
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
    })
    </script>
</body>
</html>