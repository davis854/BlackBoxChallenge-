
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>NATAS Level 1</title>
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
                    font-weight: 400;
                }

                footer {
                    background-color: Black;
                    color: white;
                    padding: 10px;
                    position: absolute;
                    bottom: 0;
                    width: 100%;
                    font-size: 35px;
                }

                header {
                    background-color: black;
                    color: white;
                    padding: 20px;
                    font-size: 55px;
                }

                div {
                    margin-left: 300px;
                    margin-right: 300px;
                    margin-bottom: 50px;
                    margin-top:  50px;
                    display: block;
                }
                body,html{
                    width: 100%;
                    height: 100%;
                }
                
                strong{
                    font-size: 20px;
                }

            }

        </style>
    </head>
    <script>
        
    </script>
    <body>
  
        <form action="nataslevel1.php" method="post">

            <header class="container-fluid text-center">
                <p>Black Box Challenge</p>
            </header>

                <div class="container-fluid">    
                    <div class="row content">
                        <div class="col-sm-8 text-center"> 
                            <div class="header">
                                <h1>NATAS Level 1</h1>
                            </div>
                            <label>Username</label>
                            <input type="text" size=30 name="username"><br>

                            <label>Password</label>
                            <input type="password" size=30 name="password"><br>

                            <label>&nbsp;</label>
                            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            <br><br><br>
                            <strong>
                                Challenge Prompt:
                            </strong>
                            <p>
                                Username is natas1.
                                The password here is <?php include 'nataslevel1.php'; echo $natas1_password;?>
                            </p>
                        </div>
                    </div>
                </div>   
        </form>
    <footer class="container-fluid text-center">
        <p>Created by Marshall University 
            Department of Computer Science - 2018</p>
    </footer>
</body>
</html>
