

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <script type="text/javascript">
        document.onkeydown = function(e){
            if(e.ctrlKey && e.keyCode === 85){
                alert('Error! Cannot use Ctrl+u');
                return false;
            }else if(e.keyCode === 123){
                alert('Error! Cannot use F12');
                return false;
            }else{
                return true;
            }
        }
    </script>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>NATAS Level 2</title>
        <style>
            @media screen{

                label {
                    font-size: 20px;
                    font-family: sans-serif;

                }
                input {
                    height: 30px;
                    border-style: groove;
                    border-radius: 5px;
                }
                p {
                    font-size: 20px;
                    font-weight: 200;
                }

                footer {
                    background-color: Black;
                    color: white;
                    padding: 10px;
                    position: absolute;
                    bottom: 0;
                    width: 100%;
                }

                header {
                    background-color: black;
                    color: white;
                    padding: 20px;
                    font-size: 35px;
                }

                div {
                    margin-left: 300px;
                    margin-right: 300px;
                    margin-bottom: 50px;
                    margin-top:  50px;
                    display: block;
                }
                
                body, html{
                    height: 100%;
                    width: 100%;
                }
                
                strong{
                    font-size: 20px;
                }

            }

        </style>
    </head>
    <body oncontextmenu="return false">
        <form action="nataslevel2.php" method="post">
            <header class="container-fluid text-center">
                <p>Black Box Challenge</p>
            </header>

            <div class="container-fluid">    
                <div class="row content">

                    <div class="col-sm-8 text-center"> 
                        <div class="header">
                            <h1>NATAS Level 2</h1>
                        </div>
                        <label>Username</label>
                        <input type="text" size="30" name="username"><br>

                        <label>Password</label>
                        <input type="password" size="30" name="password"><br>

                        <label>&nbsp;</label>
                        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                        <br><br><br>
                        <strong>Challenge Prompt:</strong>
                        <p>
                            Username is natas2.
                            Hint: The password is somewhere on this page, but 
                            certain functions have been disabled.
                        </p>
                    </div>

                </div>
            </div> 
        </form>
        <footer class="container-fluid text-center">
            <p>Created by Marshall University 
                Department of Computer Science - 2018</p>
            <!--<p>The password for natas2 is <?php include 'nataslevel2.php'; echo $natas2_password;?></p>-->
        </footer>
    </body>
</html>
