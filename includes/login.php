<<<<<<< HEAD
<?php
     if( isset($_POST['login'])){
         $type = $_POST['type'];

         if( $type == 'company'){
             header("location: ./company.php");
         }
         else{
             header("location: ./institute.php");
         }
     }

?>

=======
>>>>>>> 000a321677d69317ccbd38c71a972cf5665e8dd6
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/app.css">
        <link rel="stylesheet" href="../css/button.css">
    <title>Sign up Company</title>
=======
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="../css/button.css">
    <title>Login Page</title>

    <script>
        
        $(function() {
            
            $("#form").submit(function(event) {

                var email=$("#email").val();
                var pwd=$("#pwd").val();
                // document.write(email);
                if(email=="" || pwd=="")
                {
                    if(email=="")
                        $("#mailErr").html("Email cant be empty");
                    if(pwd=="")
                        $("#pwdErr").html("Password cant be empty");
                }
                else
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
        <div style="height: 70vh; margin: auto" class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 p-5 person-bg ">
                    <div id="space-between" class="container">
                        <div class="row align-items-start">
                            <h2 class="heading white-text">Login<br/> & hire the best talent</h2>
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
                            <a href="./signup-institute.php">
<<<<<<< HEAD
                                <p class="para white-text">Are you an Institute? <em> Sign up here.</em>
=======
                                <p class="para white-text">Is it an Institute? <em> Sign up here.</em>
>>>>>>> 000a321677d69317ccbd38c71a972cf5665e8dd6
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm p-0 grayBg">
                    <div class="container">
                        <div class=" mt-5 mb-3 mx-0">
                            <h2 style="text-align: center; margin: auto 0; width:100%" class="sub-heading">Login</h2>
                        </div>
                    </div>
<<<<<<< HEAD
                    <form style="padding: 2rem; height: 500px" name="loginForm" action=<?php echo $_SERVER["PHP_SELF"]; ?> method="post">
                        
                        <div class="form-group ">
                            <label for="email">Email</label>
                            <input type="email" class="form-control form-control-lg" name="email">
                            <!-- <span class="text-danger">{{ $errors->first("email")}}</span> -->
                        </div>
                        
                        <div class="form-group ">
                            <label for="password">Set password</label>
                            <input type="password" class="form-control form-control-lg" name="password">
                            <!-- <span class="text-danger">{{ $errors->first("password")}}</span> -->
                        </div>
                        <div class="form-group">
                            <label for="type">Company/Institute</label>
                            <select name="type" class="custom-select custom-select-lg">
=======
                    <form method="POST" action="../jLoginPhp/jLogin.php" style="padding: 2rem; height: 500px" id="form">
                        
                        <div class="form-group ">
                            <label for="email">Email</label>
                            <input type="email" class="form-control form-control-lg" name="email" id="email">
                            <span class="text-danger" id="mailErr"></span>
                        </div>
                        
                        <div class="form-group ">
                            <label for="password">Password</label>
                            <input type="password" class="form-control form-control-lg" name="pwd" id="pwd">
                            <span class="text-danger" id="pwdErr"></span>
                        </div>
                        <div class="form-group">
                            <label for="type">Company/Institute</label>
                            <select name="orgTyp" class="custom-select custom-select-lg">
>>>>>>> 000a321677d69317ccbd38c71a972cf5665e8dd6
                                <option selected value="company">Company</option>
                                <option value="institute">Institute</option>
                            </select>
                        </div>
        
                        <div class="form-group mt-5">
<<<<<<< HEAD
                            <button name="login" type="submit" class=" w-100">Sign In</button>
=======
                            <button type="submit" class=" w-100">Sign In</button>
>>>>>>> 000a321677d69317ccbd38c71a972cf5665e8dd6
                        </div>
                        
        
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>