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
            $('#list').val(inputtext);}
</script>

    <body>
        <div class="container">
            <!-- Main hero unit for a primary marketing message or call to action -->
            <div class="row well">
             <div class="span2">
                    <img src="http://www.grimwold.org.uk/bgg/avatar.jpg">
                </div>
                <div class="span7">
                    <br/>
                    <h2>Geeklist Sorter</h2>
                </div>
            </div>
            <div class="row">
                <div class="span6">
                    <form id="user-form" class="form-inline">
                        <fieldset>
                            <div class="control-group">
                                <label>List ID</label>
                                <div class="controls">
                                    <input type="text" id='list' name='list'>
                                </div>
                            </div>
                            <div class="control-group">
                                <label>Sort</label>
                                <div class="controls">
                                    <select id='sort' name='sort'>
                                        <option>alpha</option>
                                        <option>user</option>
                                        <option>thumbs</option>
                                        <option value="unsort">unsorted</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label>Extras</label>
                                <div class="controls">
                                    <select id='extra' name='extra'>
                                        <option value=''>none</option>
                                        <option value='leader'>user leaderboard</option>
                                        <option value='game'>game frequency</option>
                                        <option value='extra'>N2Uextra</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label>Meta</label>
                                <div class="controls">
                                    <select id='meta' name='meta'>
                                        <option value=''>none</option>
                                        <option value='meta'>N2Umeta</option>
                                    </select>
                                </div>
                            </div>


                            <div class="control-group">
                                <div class="controls">
                                    <button type="submit" id="sorter" value="sorter" class="btn">Sorter</button>
                                    <button type="submit" id="new2u" value="new2u" class="btn">New 2 U</button>
                                    <button class="btn btn-danger" type="reset">Reset</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>


<table style="padding:0px 0px 0px 5px; border-spacing:15px">
<tr>
<td style="vertical-align:top">

<p class="header3c">Boardgame New To You</p>
<table style="padding:0px 0px 0px 5px; border-spacing:15px">
<tr>
<td>
TOEND;

$new2ulist=array(51507,62659,61538,61050,60363,59300,58313,56404,56114,54945,54287,53283,51691,51077);
$new2uname=array("meta 2010","2010","Dec 2010","Nov 2010","Oct 2010","Sep 2010","Aug 2010","Jul 2010","Jun 2010","May 2010","Apr 2010","Mar 2010","Feb 2010","Jan 2010");
$gl = 0;

while ($gl < min(count($new2uname),count($new2ulist)))
  {
   echo "<a href='javascript:addtext(\"$new2ulist[$gl]\")'>$new2uname[$gl]</a><br />";
   $gl++;
  }

print<<<TOEND
</td>
<td style="vertical-align:top">
TOEND;

$new2ulist=array(63456,97907,97603,74705,73430,71805,71296,69256,69138,67891,66853,65014,63956,63457);
$new2uname=array("meta 2011","2011","Dec 2011","Nov 2011","Oct 2011","Sep 2011","Aug 2011","Jul 2011","Jun 2011","May 2011","Apr 2011","Mar 2011","Feb 2011","Jan 2011");
$gl = 0;

while ($gl < min(count($new2uname),count($new2ulist)))
  {
   echo "<a href='javascript:addtext(\"$new2ulist[$gl]\")'>$new2uname[$gl]</a><br />";
   $gl++;
  }

print<<<TOEND
</td>
<td style="vertical-align:top">
TOEND;

$new2ulist=array(114842,151461,150303,150253,148702,146935,145742,145110,143149,142525,140207,137876,134543,102835);
$new2uname=array("meta 2012","2012","Dec 2012","Nov 2012","Oct 2012","Sep 2012","Aug 2012","Jul 2012","Jun 2012","May 2012","Apr 2012","Mar 2012","Feb 2012","Jan 2012");
$gl = 0;

while ($gl < min(count($new2uname),count($new2ulist)))
  {
   echo "<a href='javascript:addtext(\"$new2ulist[$gl]\")'>$new2uname[$gl]</a><br />";
   $gl++;
  }

print<<<TOEND
</td>

<td style="vertical-align:top">
TOEND;

$new2ulist=array(152227,160219,158978,157523,156584,154416,153769,151744);
$new2uname=array("meta 2013","Jul 2013","Jun 2013","May 2013","Apr 2013","Mar 2013","Feb 2013","Jan 2013");
$gl = 0;

while ($gl < min(count($new2uname),count($new2ulist)))
  {
   echo "<a href='javascript:addtext(\"$new2ulist[$gl]\")'>$new2uname[$gl]</a><br />";
   $gl++;
  }

print<<<TOEND
</td>


</tr>
</table>
</td>

<td style="vertical-align:top">
<p class="header3c">Videogame New To You</p>
<table style="padding:0px 0px 0px 5px; border-spacing:15px">
<tr>
<td style="vertical-align:top">
TOEND;

$new2ulist=array(65160,150304,150251,148579,146516,145268,144350,143316,142524,141432,139924,122569,103741);
$new2uname=array("meta","Dec 2012","Nov 2012","Oct 2012","Sep 2012","Aug 2012","Jul 2012","Jun 2012","May 2012","Apr 2012","Mar 2012","Feb 2012","Jan 2012");
$gl = 0;

while ($gl < min(count($new2uname),count($new2ulist)))
  {
   echo "<a href='javascript:addtext(\"$new2ulist[$gl]\")'>$new2uname[$gl]</a><br />";
   $gl++;
  }

print<<<TOEND
</td>

<td style="vertical-align:top">
TOEND;

$new2ulist=array(160218,158977,157247,156583,154415,153768,152601,152592);
$new2uname=array("Aug 2013","Jul 2013","Jun 2013","May 2013","Apr 2013","Mar 2013","Feb 2013","Jan 2013");
$gl = 0;

while ($gl < min(count($new2uname),count($new2ulist)))
  {
   echo "<a href='javascript:addtext(\"$new2ulist[$gl]\")'>$new2uname[$gl]</a><br />";
   $gl++;
  }

print<<<TOEND
</td>



</tr>
</table>
</td>



<!--

<td style="vertical-align:top">
<p class="header3c">WVGDYPTW</p>
<table style="padding:0px 0px 0px 5px; border-spacing:15px">
<tr>
<td>
TOEND;

$new2ulist=array(152602,151766,152113,152432,152757,153117,153444,153759,154036);
$new2uname=array("meta 2012","07 Jan 2013","14 Jan 2013","21 Jan 2013","28 Jan 2013","04 Feb 2013","11 Feb 2013","18 Feb 2013","25 Feb 2013");
$gl = 0;

while ($gl < min(count($new2uname),count($new2ulist)))
  {
   echo "<a href='javascript:addtext(\"$new2ulist[$gl]\")'>$new2uname[$gl]</a><br />";
   $gl++;
  }

print<<<TOEND
</td>
</tr>

</table>
</td>
-->
</tr>

<tr>
<td>
<a href='javascript:addtext("151365")'>Videogames Beaten 2013</a><br />
<a href='javascript:addtext("98072")'>Videogames Beaten 2012</a><br />
<a href='javascript:addtext("62900")'>Videogames Beaten 2011</a><br />
</td>
</tr>

</table>

                </div>
                <div id="outarea" class="span6">

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
           $("#user-form").submit(function() { return false; });
           $("#sorter, #new2u").click(function(event) {
                var test = $(this).val();
                if(test == 'new2u'){var target = 'new2u.php';}
                else if (test == 'sorter'){var target = 'geeklistSort.php';}
                var list = $('#list').val();
                var sort = $('#sort').val();
                var extra = $('#extra').val();
                var meta = $('#meta').val();
                $(this).button('loading');
                $.ajax({
                  type: 'POST',
                  url: target,
                  data: {
                    list: list,
                    sort: sort,
                    extra: extra,
                    meta: meta
                    }, 
                  success: function(result){
                  if(result != null) 
                    {
                     if (test == 'new2u')
                       {
                        $('#outarea').html('<textarea id="output" rows=30 class="span5"></textarea>');
                        $('#output').text(result);
                       }
                     else if (test == 'sorter')
                       {
                        $('#outarea').html(result);
                       }
                    } 
                    $('.btn').button('reset');
                  }
                });
            });
        });

    </script>



</html>
TOEND;
?>

