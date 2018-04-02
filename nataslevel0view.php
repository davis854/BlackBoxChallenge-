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
        <!--<link rel="stylesheet" href="natasHomePage.css" type="text/css">-->
        <title>NATAS Level 0</title>
        <style>
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
                font-size: 15px;
                font-weight: 200;
            }
            @media screen{
                /* Remove the navbar's default margin-bottom and rounded borders */ 
                .navbar {
                    margin-bottom: 0;
                    border-radius: 0;
                }
                
                /* Set black background color, white text and some padding */
                footer {
                    background-color: Black;
                    color: white;
                    padding: 15px;
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
                
            }

        </style>
    </head>
    <body>
        <header class="container-fluid text-center">
            <p>NATAS</p>
        </header>
        <form action="nataslevel0.php" method="post">
            <!--<nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">NATAS</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                    </div>
                </div>
            </nav>-->

            <div class="container-fluid">    
                <div class="row content">

                    <div class="col-sm-8 text-center"> 
                        <div class="header">
                            <h1>NATAS Level 0</h1>
                        </div>
                        <label>Username</label>
                        <input type="text" size="30"name="username"><br>

                        <label>Password</label>
                        <input type="password" size="30" name="password"><br>

                        <label>&nbsp;</label>
                        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                        <br><br><br>
                        <p>
                            Challenge Prompt: The username is natas0.
                            Hint: The password is the same as the username. 
                        </p>
                    </div>

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
