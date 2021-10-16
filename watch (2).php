<!DOCTYPE HTML><html><?php
$input = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ; preg_match('@/watch/(.*?)/@', $input, $id); 
 ?>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta name="robots" content="noindex">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Watch  <?php echo $id[1]; ?> on Chaturbate Performer</title>
<link href="/boot.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<link href="/style.css" rel="stylesheet" media="screen" title="default">
<link href='https://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>  
<link rel="shortcut icon" type=image/ico href="/favicon.png"/>
<link rel="stylesheet" href="/player.css" type="text/css"/><script src="/player.js"></script>
<link href="/mobile.css" rel="stylesheet" type="text/css">  


<body style="background-color:#48953f; height:700px;" /> 
<center><div class="container" style="margin-top:130px; margin-bottom:-20px;  border-radius: 5px;   width:800px;  " 
                
                 <div class="form-group" style="margin-top:10px;" >
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">Watch <?php echo $id[1]; ?></h3>
      </div>
      <div class="panel-body">
     <center><video id="video-player"height="480" style="width:700px;" controls > <source src="https://st1.987cdn.com/watch/<?php echo $id[1] ?>/" type="video/mp4"> </center> </video><script src="/playerasset.js"></script>
</div><a href="https://my.cbperformer.com/<?php echo $_COOKIE['model'] ?>" class="btn btn-cta btn-cta-primary" style="margin-bottom:20px;" ><i class="fa fa-arrow-left" aria-hidden="true"></i> Back to <?php echo $_COOKIE['model'] ?> </a><a href="https://st1.987cdn.com/download/<?php echo $id[1] ?>/" class="btn btn-cta btn-cta-primary" style="margin-bottom:20px; margin-left:20px;" ><i class="fa fa-download" aria-hidden="true"></i>
 Download</a>
</div></div></br><div style="margin-bottom:-600px;"></div>
</body></html>