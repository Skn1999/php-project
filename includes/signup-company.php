<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="../css/button.css">
    <title>Sign up Company</title>

    <script>
        
        $(function() {
            
            $("#form").submit(function(event) {

                var name=$("#name").val();
                var domain=$("#domain").val();
                var email=$("#email").val();
                var pwd1=$("#pwd1").val();
                var pwd2=$("#pwd2").val();
                var year=$("#year").val();
                // document.write(email);

                var flag=0;

                if(email=="" || name=="" || domain=="" || year=="")
                {
                    if(email=="")
                        $("#emailErr").html("Email cant be empty");
                    if(name=="")
                        $("#nameErr").html("Name cant be empty");
                    if(domain=="")
                        $("#domainErr").html("Domain cant be empty");
                    if(year=="")
                        $("#yearErr").html("Year cant be empty");
                    flag=flag+1;
                }
                if((pwd1=="" || pwd2=="") || (pwd1!="" && pwd2!=""))
                {
                    if(pwd1=="" && pwd2=="")
                    {
                        if(pwd1=="")
                            $("#pwd1Err").html("Secure Password cant be empty");
                        if(pwd2=="")
                            $("#pwd2Err").html("Confirm Password cant be empty");
                        flag=flag+1;
                    }
                    else if(pwd1!=pwd2) {
                        $("#pwd1Err").html("Passwords doesnt match");
                        flag=flag+1;
                    }
                }
                if(year>2020 || year<0)
                {
                    $("#yearErr").html("Year should be b/w 0-2020");
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

                name="";
                domain="";
                email="";
                pwd1="";
                pwd2="";
                year=-1;
            });
        });

    </script>


</head>

<body>

    <div class="container justifyCenter">
        <div class="mt-3 mb-3 mx-auto">
            <a href="/tmp/index.php"> <img src="./../assets/images/blue-logo.png" alt="logo" /></a>
        </div>
    </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 p-5 person-bg ">
                <div id="space-between" class="container">
                    <div class="row align-items-start">
                        <h2 class="heading white-text">Sign up<br /> & hire the best talent</h2>
                    </div>
                    <div class="row align-items-end">
                        <div class="w-100">
                            <a href="./signup-institute.php">
                                <p class="para white-text">Is it an Institute? <em> Sign up here.</em>
                                </p>
                            </a>
                        </div>
                        <a href="./login.php">
                            <p class="para white-text">Already a member? <em> Login here.</em>
                            </p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 p-0">
                <form action="../jCompanyPhp/jSignUp.php"  method="POST" autocomplete="off" autofill="off"style="padding: 2rem; width:100%" class="grayBg" id="form">
                    <!-- @csrf -->
                    <div class="form-group">
                        <label for="name">Let's start with the name of the company</label>
                        <input type="text" class="form-control" name="comName" value="" id="name">
                        <span class="text-danger" id="nameErr">
                            <!-- {{ $errors->first("name")}} -->
                        </span>
                    </div>
                    <div class="form-group ">
                        <label for="year">The year you got registered</label>
                        <input type="number" class="form-control" name="year" value="" id="year">
                        <span class="text-danger" id="yearErr">
                            <!-- {{ $errors->first("year")}} -->
                        </span>
                    </div>
                    <div class="form-group ">
                        <label for="domain">Domain of your company</label>
                        <input type="text" class="form-control" name="domain" value="" id="domain">
                        <span class="text-danger" id="domainErr">
                            <!-- {{ $errors->first("domain")}} -->
                        </span>
                    </div>
                    <div class="form-group ">
                        <label for="email">Email of your company</label>
                        <input type="email" class="form-control" name="email" value="" id="email">
                        <span class="text-danger" id="emailErr">
                            <!-- {{ $errors->first("email")}} -->
                        </span>
                    </div>
                    <div class="form-group ">
                        <label for="password">Secure password</label>
                        <input type="password" class="form-control" name="pwd1" id="pwd1">
                        <span class="text-danger" id="pwd1Err">
                            <!-- {{ $errors->first("password")}} -->
                        </span>
                    </div>
                    <div class="form-group ">
                        <label for="cpassword">Confirm password</label>
                        <input type="password" class="form-control" name="pwd2" id="pwd2">
                        <span class="text-danger" id="pwd2Err">
                            <!-- {{ $errors->first("cpassword")}} -->
                        </span>
                    </div>
                    <div class="form-group mt-5">
                        <button type="submit" class=" w-100">Sign up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>