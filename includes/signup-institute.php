<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<<<<<<< HEAD
    
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/button.css">
    <title>Sign up Company</title>
=======
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="../css/button.css">
    <title>Sign up Company</title>

    <script type="text/javascript">
        $(function() {
            
            $("#form").submit(function(event) {

                var name=$("#name").val();
                // document.write(email);

                var affNO=$("#affNO").val();
                var email=$("#email").val();
                var pwd1=$("#pwd1").val();
                var pwd2=$("#pwd2").val();
                var year=$("#year").val();
                // document.write(email);
                var flag=0;
                if(email=="" || affNO==""  || year=="" || name=="")
                {
                    if(email=="")
                        $("#mailErr").html("Email cant be empty");
                    if(affNO=="")
                        $("#affNOErr").html("Aff. No cant be empty");
                    if(name=="")
                        $("#nameErr").html("Name cant be empty");
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
            });
        });

    </script>

>>>>>>> 000a321677d69317ccbd38c71a972cf5665e8dd6
</head>
<body>

    <div class="container justifyCenter">
            <div class="mt-3 mb-3 mx-auto">
<<<<<<< HEAD
             <a href="/"> <img src="/assets/images/blue-logo.png" alt="logo"/></a>
=======
             <a href="/tmp/index.php"> <img src="./../assets/images/blue-logo.png" alt="logo"/></a>
>>>>>>> 000a321677d69317ccbd38c71a972cf5665e8dd6
            </div>
        </div>
    </div>
    
    <div class="container">
<div class="row">
    <div class="col-sm-12 col-md-6 p-5 person-bg ">
        <div id="space-between" class="container">
            <div class="row align-items-start">
                <h2 class="heading white-text">Sign up now & <br> make campus <br> recruitment <br> smoother.</h2>
            </div>
            <div class="row align-items-end">
                <div class="w-100">
                    <a href="./signup-company.php">
<<<<<<< HEAD
                        <p class="para white-text">Are you an Company? <em> Sign up here.</em>
=======
                        <p class="para white-text">Is it a Company? <em> Sign up here.</em>
>>>>>>> 000a321677d69317ccbd38c71a972cf5665e8dd6
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
    <div class="col-sm p-0">
<<<<<<< HEAD
        <form style="padding: 2rem" class="grayBg" action="/institute" method="post">
            <!-- @csrf -->
            <div class="form-group ">
                <label for="name">Let's start with the name of the institute</label>
                <input type="text" class="form-control" name="name"  value="" >
                <span class="text-danger">
=======
        <form  action="../jInstitutePhp/jSignUp.php" method="POST" style="padding: 2rem" class="grayBg" id="form" >
            <!-- @csrf -->
            <div class="form-group ">
                <label for="name">Let's start with the name of the institute</label>
                <input type="text" class="form-control" name="name"  value=""  id="name">
                <span class="text-danger" id="nameErr">
>>>>>>> 000a321677d69317ccbd38c71a972cf5665e8dd6
                    <!-- {{ $errors->first("name")}} -->
                </span>
            </div>
            <div class="form-group ">
                <label for="year">Affiliation Number</label>
<<<<<<< HEAD
                <input type="number" class="form-control" name="affl" value="">
            </div>
            <div class="form-group ">
                <label for="email">Email of your company</label>
                <input type="email" class="form-control" name="email" value="" >
                <span class="text-danger">
=======
                <input type="number" class="form-control" name="affNO" id="affNO">
                <span class="text-danger" id="affNOErr"></span>
            </div>
            <div class="form-group ">
                <label for="email">Email of your company</label>
                <input type="email" class="form-control" name="email" id="email">
                <span class="text-danger" id="mailErr">
>>>>>>> 000a321677d69317ccbd38c71a972cf5665e8dd6
                    <!-- {{ $errors->first("email")}} -->
                </span>
            </div>
            <div class="form-group ">
                <label for="year">Estb. in?</label>
<<<<<<< HEAD
                <input type="number" class="form-control" name="year" value="" required>
                <span class="text-danger">
=======
                <input type="number" class="form-control" name="year" id="year">
                <span class="text-danger" id="yearErr">
>>>>>>> 000a321677d69317ccbd38c71a972cf5665e8dd6
                    <!-- {{ $errors->first("year")}} -->
                </span>
            </div>
            <div class="form-group ">
                <label for="password">Secure password</label>
<<<<<<< HEAD
                <input type="password" class="form-control" name="password" required>
                <span class="text-danger">
=======
                <input type="password" class="form-control" name="pwd1" id="pwd1">
                <span class="text-danger" id="pwd1Err">
>>>>>>> 000a321677d69317ccbd38c71a972cf5665e8dd6
                    <!-- {{ $errors->first("password")}} -->
                </span>
            </div>
            <div class="form-group ">
                <label for="cpassword">Confirm password</label>
<<<<<<< HEAD
                <input type="password" class="form-control" name="cpassword" required>
                <span class="text-danger">
=======
                <input type="password" class="form-control" name="pwd2" id="pwd2">
                <span class="text-danger" id="pwd2Err">
>>>>>>> 000a321677d69317ccbd38c71a972cf5665e8dd6
                    <!-- {{ $errors->first("cpassword")}} -->
                </span>
            </div>
            <div class="form-group mt-5">
                <button type="submit" class="w-100">Sign up</button>
            </div>
            

        </form>
    </div>
</div>

</div>
</body>
</html>