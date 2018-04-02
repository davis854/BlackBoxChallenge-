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
                    padding: 10px;
                    font-size: 35px;
                }
                
               
            }

        </style>
    </head>
    <body>
        <script type="text/javascript">
            function goToNATAS() {
                $url = 'nataslevel0view.php';
                window.location = $url;
            }
        </script>
       

        <header class="container-fluid text-center">
            <p>NATAS</p>
        </header>

        <div class="jumbotron">
            <div class="container-fluid">    
                <div class="row content">
                    <!--<div class="col-sm-2 sidenav">
                    </div>-->
                    <div class="col-sm-8"> 
                        <h1>Welcome to NATAS</h1>
                        <hr>
                        <h2>About NATAS</h2>
                        <p>NATAS is a cyber war game that allows you to play different set of challenges 
                            that teaches the basics of web server-side security</p>
                        <hr>
                        <h2>Please read the instructions before proceeding</h2>
                        <p>In this game, your job is to find the randomly generated keys that unlocks each level.
                            The game consists of 15 levels: 5 easy, 5 medium, and 5 hard. This will be a timed game. 
                            You will have 30 minutes to complete this game. Once time runs out, you will be redirected to the summary results page 
                            where you will view your completed levels. If you are lucky to complete all levels, congratulations!
                            Note that you can complete the game anytime, but it must be completed by the end of the final exam.</p>
                        <button type="submit" onclick="goToNATAS()" class="btn btn-primary btn-lg">Start Game</button>
                    </div>
                    <!--<div class="col-sm-2 sidenav">
                    </div>-->
                </div>
            </div>
        </div>
        <footer class="container-fluid text-center">
            <p>Created by Marshall University 
                Department of Computer Science - 2018</p>
        </footer>
    </body>
</html>
