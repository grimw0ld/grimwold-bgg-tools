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

<script>
function addtext(inputtext) {
            $('#platform').val(inputtext);}
</script>

    <body>
        <div class="container">
            <!-- Main hero unit for a primary marketing message or call to action -->
            <div class="row well">
             <div class="span2">
                    <img src="avatar.jpg">
                </div>
                <div class="span7">
                    <br/>
                    <h2>VGG Collection Platform Filter</h2>
                </div>
            </div>
            <div class="row">
                <div class="span6">
                    <form id="user-form" class="form-inline">
                        <fieldset>
                            <div class="control-group">
                                <label>Platform</label>
                                <div class="controls">
                                    <input type="text" id='platform' name='platform' value='Windows'>

                                </div>
                            </div>
                            <div class="control-group">
                                <label>User</label>
                                <div class="controls">
                                    <input type="text" id='username' name='user' value='Grimwold'>

                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <button type="submit" class="btn">Generate</button>
                                    <button class="btn btn-danger" type="reset">Reset</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                    <table style="padding:0px 0px 0px 5px; border-spacing:15px">
                      <tr>
                        <td style="vertical-align:top">
                          <p class="header3c">Suggested Platforms</p>
                          <table style="padding:0px 0px 0px 5px; border-spacing:15px">
                            <tr>
                              <td>
TOEND;
$platlist=array("Windows","Wii","ZX Spectrum","Macintosh","Linux","Xbox 360","Wii U","PlayStation 3","PlayStation 2","Android","iPad","iPhone","Nintendo DS","Nintendo 3DS","GameCube","DOS","Game Boy Advance");
foreach($platlist as $gl)
  {
   echo "<a href='javascript:addtext(\"$gl\")'>$gl</a>&nbsp; ";
  }
print<<<TOEND
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    </table>
                </div>
                <div id="output" class="span6">

                </div>
                <div class="span6">

                </div>
            </div>
        </div>
    </body>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/lodash.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script>
        $(function() {
           $(document).on('submit', '#user-form', function() {
                var platform = $('#platform').val();
                var user = $('#username').val();
                var target = 'vgCollectionPlatform.php';
                var outloc = '#output';
                $('.btn').button('loading');
                $.ajax({
                  type: 'POST',
                  url: target,
                  data: {
                    platform: platform,
                    user: user
                    }, 
                  success: function(result){
                  if(result != null) $(outloc).html(result);
                    $('.btn').button('reset');
                  }
                });

                return false;
            });
        });
    </script>
</html>

TOEND;
?>
