<?php

print<<<TOEND

<!DOCTYPE html>
<html lang="en"
    <head>
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
        <link href="css/datepicker.css" rel="stylesheet">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta name="description" content="Grimwolds Website for Movies, Games and Christianity" />
        <meta name="keywords" content="Grimwold, Birdman, Andy_B, Andy, Andy B, Christianity, Christian, Web, Webpage" />
        <title>The Grim's Homepage</title>  <link rel="shortcut icon" href="http://www.grimwold.org.uk/images/jar.ico" /> 
        <style type="text/css">
          /*<![CDATA[*/
           .c1 {text-align:right}
           .c2 {text-align:left}
           .header3 {font-size: 20px; font-weight: bold;}
           .header3c {font-size: 20px; font-weight: bold; text-align: center;}
           .header4 {font-size: 16px; font-weight: bold;}
          /*]]>*/
        </style>
    </head>

    <body>
        <div class="container">
            <!-- Main hero unit for a primary marketing message or call to action -->
            <div class="row well">
             <div class="span2">
                    <img src="avatar.jpg">
                </div>
                <div class="span7">
                    <br/>
                    <h2>Grimwold's xGG Tools</h2>
                </div>
            </div>
            <div class="row">
                <div class="span6">
                  <ul>
                    <h3>BGG</h3> 
                    <li><a href="userPlaysForm.php">User Plays</a></li>
                    <li><a href="cleancup.php">Cleancup Helper</a></li>
                    <li><a href="geeklistForm.php">Geeklist Sorter</a></li>
                    <li><a href="uniquePlaysForm.php">Non Top 200</a></li>
                    <h3>VGG</h3>
                    <li><a href="vgCollectionPlatformForm.php">Videogame Platform filter</a></li>
                  </ul>
                </div>
            </div>
        </div>
    </body>


</html>

TOEND;
?>