
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'nataslevel0.php';
include 'nataslevel1.php';
include 'nataslevel2.php';
include 'nataslevel3.php';
include 'nataslevel4.php';
include 'nataslevel5.php';
include 'nataslevel6.php';
include 'nataslevel7.php';
include 'nataslevel8.php';
include 'nataslevel9.php';
include 'nataslevel10.php';
include 'nataslevel11.php';
include 'nataslevel12.php';
include 'nataslevel13.php';
include 'nataslevel14.php';
include 'nataslevel15.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Summary of Results</title>
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
                    font-size: 15px;
                    font-weight: 200;
                }

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

                #results {
                    font-family: Arial, sans-serif;
                    border-collapse: collapse;
                    width: 100%;
                }

                #results td, #results th {
                    border: 1px solid #ddd;
                    padding: 6px;
                }

                #results tr:nth-child(even) {background-color: #f2f2f2;}

                #results tr:hover {background-color: #ddd;}
                
                #results th {
                    background-color: green;
                    color: white;
                }

            }

        </style>
    </head>
    <body>
        <header class="container-fluid text-center">
            <p>NATAS</p>
        </header>

        <div class="container-fluid">
            <h1>Congratulations you have completed all required levels!</h1>
            <h3>Below is a summary of your results!</h3>
            <table id = "results">

                <tr>
                    <th>NATAS Level</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Points</th>
                </tr>

                <tr>
                    <td>Level 0</td>
                    <td><?php echo $natas0_username; ?></td>
                    <td><?php echo $natas0_password; ?></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Level 1</td>
                    <td><?php echo $natas1_username; ?></td>
                    <td><?php echo $natas1_password; ?></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Level 2</td>
                    <td><?php echo $natas2_username; ?></td>
                    <td><?php echo $natas2_password; ?></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Level 3</td>
                    <td><?php echo $natas3_username; ?></td>
                    <td><?php echo $natas3_password; ?></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Level 4</td>
                    <td><?php echo $natas4_username; ?></td>
                    <td><?php echo $natas4_password; ?></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Level 5</td>
                    <td><?php echo $natas5_username; ?></td>
                    <td><?php echo $natas5_password; ?></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Level 6</td>
                    <td><?php echo $natas6_username; ?></td>
                    <td><?php echo $natas6_password; ?></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Level 7</td>
                    <td><?php echo $natas7_username; ?></td>
                    <td><?php echo $natas7_password; ?></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Level 8</td>
                    <td><?php echo $natas8_username; ?></td>
                    <td><?php echo $natas8_password; ?></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Level 9</td>
                    <td><?php echo $natas9_username; ?></td>
                    <td><?php echo $natas9_password; ?></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Level 10</td>
                    <td><?php echo $natas10_username; ?></td>
                    <td><?php echo $natas10_password; ?></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Level 11</td>
                    <td><?php echo $natas11_username; ?></td>
                    <td><?php echo $natas11_password; ?></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Level 12</td>
                    <td><?php echo $natas12_username; ?></td>
                    <td><?php echo $natas12_password; ?></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Level 13</td>
                    <td><?php echo $natas13_username; ?></td>
                    <td><?php echo $natas13_password; ?></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Level 14</td>
                    <td><?php echo $natas14_username; ?></td>
                    <td><?php echo $natas14_password; ?></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Level 15</td>
                    <td><?php echo $natas15_username; ?></td>
                    <td><?php echo $natas15_password; ?></td>
                    <td></td>
                </tr>
            </table>


        </div> 
    </form>
    <footer class="container-fluid text-center">
        <p>Created by Marshall University 
            Department of Computer Science - 2018</p>
    </footer>
</body>
</html>
