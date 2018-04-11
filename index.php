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
        <title>NATAS Cyber War Game</title>
        <style>
            @media screen{
                .navbar {
                    margin-bottom: 0;
                    border-radius: 0;
                }

                footer {
                    background-color: Black;
                    color: white;
                    padding: 10px;
                    position: absolute;
                    bottom: 0;
                    width: 100%;
                }
                
                p {
                  font-size: 20px;  
                }

                header {
                    background-color: black;
                    color: white;
                    padding: 10px;
                    font-size: 35px;
                }
                
                img {
                    position: aboslute;
                    left: 50px;
                }
            }

        </style>
    </head>
    <body>
        <script type="text/javascript">
            function goToNATAS() {
                $url = 'nataslevel1view.php';
                window.location = $url;
            }
        </script>


        <header class="container-fluid text-center">
            <p>Black Box Challenge</p>
        </header>

        <div class="jumbotron">
            <div class="container-fluid">    
                <div class="row content">
                    <!--<div class="col-sm-2 sidenav">
                    </div>-->
                    <div class="col-sm-8"> 
                        <h1>Welcome to the Black Box Challenge</h1>
                        <hr>
                        <h2>About Black Box</h2>
                        <p>The Black Box Challenge (NATAS) is a cyber war game that allows you to play different set of challenges 
                            that teaches the basics of web server-side security</p>
                        <hr>
                        <h2>Please read the instructions before proceeding</h2>
                        <p>In this game, your job is to find the randomly generated keys that unlocks each level.
                            The game consists of 11 levels: 5 easy, 5 medium, and 1 hard. This will be a timed game. 
                            You will have 30 minutes to complete this game. If you are lucky to complete all levels, congratulations!
                            Note that you can complete the game anytime, but it must be completed by the end of the final exam.</p>
                        <button type="submit" onclick="goToNATAS()" class="btn btn-primary btn-lg">Start Game</button>
                    </div>
                    <!--<div class="col-sm-2 sidenav">
                    </div>-->
                    <img src="http://www.plazmedia.com/wp-content/uploads/2015/12/header-tech.jpg" align="middle" height="450" width="450">
                </div>
            </div>
        </div>
        <footer class="container-fluid text-center">
            <p>Created by Marshall University 
                Department of Computer Science - 2018</p>
        </footer>
    </body>
</html>
