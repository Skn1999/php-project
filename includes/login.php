<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="../css/button.css">
    <title>Login Page</title>


    <script type="text/javascript">
        
        $(document).ready(function() {
            
            $("button").click(function(event) {

                var email=$("#email").val();
                var pwd=$("#pwd").val();
                var orgTyp=$("#orgTyp").val();

                // document.write(email);
                // document.write(orgTyp);

                if(email=="" || pwd=="")
                {
                    if(email=="")
                        $("#mailErr").html("Email cant be empty");
                    if(pwd=="")
                        $("#pwdErr").html("Password cant be empty");
                }
                else
                {
                    $.ajax({
                        url: '../jLoginPhp/jLogin.php',
                        type: 'POST',
                        // dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
                        data: {'email':email, 'pwd':pwd, 'orgTyp':orgTyp},

                        success: function(response)
                        {
                            if(response=="error")
                                $("#usrErr").html("invalid username/password");
                            else if(response=="institute")
                                window.location.replace("../includes/institute.php");
                            else if(response=="company")
                                window.location.replace("../includes/company.php");
                            // document.write(response);
                        } 
                    });
                }
                event.preventDefault();
            });
        });

    </script>


</head>
<body>

    <div class="container justifyCenter">
            <div class="mt-3 mb-3 mx-auto">
             <a href="/tmp/index.php"> <img src="./../assets/images/blue-logo.png" alt="logo"/></a>
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
                                    <p class="para white-text">Is it a Company? <em> Sign up here.</em>
                                    </p>
                                </a>
                            </div>
                            <a href="./signup-institute.php">
                                <p class="para white-text">Is it an Institute? <em> Sign up here.</em>
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
                    <form style="padding: 2rem; height: 500px" id="form">
                        
                        <div class="form-group ">
                            <label for="email">Email</label>  <span class="text-danger" id="usrErr" style="float: right" ></span>
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
                            <select name="orgTyp" class="custom-select custom-select-lg" id="orgTyp">
                                <option selected value="company">Company</option>
                                <option value="institute">Institute</option>
                            </select>
                        </div>
        
                        <div class="form-group mt-5">
                            <button type="submit" class=" w-100">Sign In</button>
                        </div>
                        
        
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
