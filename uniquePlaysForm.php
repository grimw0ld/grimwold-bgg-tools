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
                    <h2>Non Top 200</h2>
                </div>
            </div>
            <div class="row">
                <div class="span6">
                    <form id="user-form" class="form-inline">
                        <fieldset>
                            <div class="control-group">
                                <label>Target Rank</label>
                                <div class="controls">
                                    <input type="text" id='trgRnk' name='trgRnk' value='200'>
                                </div>
                            </div>
                            <div class="control-group">
                                <label>Number of Pages to Check</label>
                                <div class="controls">
                                    <input type="text" id='pages' name='pages' value='1'>
                                </div>
                            </div>
                            <div class="control-group">
                                <label>Start Date</label>
                                <div class="controls">
                                    <input type="text" id='mindate' name='mindate' class="datepicker">
                                </div>
                            </div>
                            <div class="control-group">
                                <label>End Date</label>
                                <div class="controls">
                                    <input type="text" id='maxdate' name='maxdate' class="datepicker">
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
                </div>
                <div id="output" class="span6">

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
            $('#mindate').val(moment().subtract('months', 1).format("YYYY-MM-DD"));
            $('#maxdate').val(moment().format("YYYY-MM-DD"));
            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd'
            });
           $(document).on('submit', '#user-form', function() {
                var trgRnk = $('#trgRnk').val();
                var mindate = $('#mindate').val();
                var maxdate = $('#maxdate').val();
                var pages = $('#pages').val();
                var target = 'uniquePlays.php';
                var outloc = '#output';
                $('.btn').button('loading');
                $.ajax({
                  type: 'POST',
                  url: target,
                  data: {
                    trgRnk: trgRnk,
                    mindate: mindate,
                    maxdate: maxdate,
                    pages: pages
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