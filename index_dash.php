<?php
$input = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ; 
    if (strpos($input, '?') !== false) { preg_match('@com/(.*?)[?]page@', $input, $modelname); }  else { preg_match('@com/(.*?)$@', $input, $modelname);  } ;
   
if (!file_exists('/home4/performer/public_html/ip/'.$modelname[1].'/'.$_COOKIE['ip'].'.txt')) { 

header('Location: http://cbperformer.com/') ;

}
?>
<!DOCTYPE HTML><html>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta name="robots" content="noindex">
<title><?php echo $modelname[1]; ?> - Dashboard  </title>
<link href="https://cbperformer.com/boot.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<link href="https://cbperformer.com/style.css" rel="stylesheet" media="screen" title="default">
<link href='https://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>  
<link rel="shortcut icon" type=image/ico href="https://cbperformer.com/favicon.png"/>
<link href="https://cbperformer.com/style2.css" rel="stylesheet" media="screen" title="default">

<?php
   
   
   
 $input = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; if (strpos($input,'page') !== false) { $whatIWant2 = substr($input, strpos($input, "page=") + 5); $whatIWant2; } else { } if (false !== strpos($input, 'page')) { $page = isset($whatIWant2)?intval($whatIWant2-1):0; } else { $page = '0' ; }
 ?>


<body style="background-color:#48953f; height:500px;" /> 
<center><div class="container text-center" style="margin-top:130px; margin-bottom:-20px;  border-radius: 5px;   width:800px; background-color:white; " > 
                
                 <div class="form-group" style="margin-top:10px;" >
    <div class="panel panel-success" style="padding-bottom:20px;">
      <div class="panel-heading">
        <h3 class="panel-title"><?php echo $modelname[1].' Dashboard'; ?> <i class="fa fa-user" aria-hidden="true"></i>
</h3>
      </div>
      <div class="panel-body"><?php exec('ls -t  /home4/performer/public_html/images/'.$modelname[1].'/  | head -1000', $matches); $returnz = $matches; 
      
      if (empty($returnz)) {   echo '<div style="margin-top:30px; margin-bottom:10px;" class="alert alert-success" role="alert">
  <h4 class="alert-heading">No redcordings yet!</h4>
  <p>It seems there has been no recording made yet for broadcaster '.$modelname[1].'. As soon as a cam show is available, it will be listed here. Just wait some time and check back within a few hours</p>
  <hr>
  <p class="mb-0">If 7 days have past with no recording you can request a refund <a href="mailto:contact@star-traffic.com?subject=Refund for broadcaster  '.$modelname[1].' ">here</a>  </p>
</div>'; } 
      
$nb_elem_per_page = 3; $data = $returnz; $number_of_pages = intval(count($data)/$nb_elem_per_page)+2; $page_no = $whatIWant2; foreach (array_slice($data, $page*$nb_elem_per_page, $nb_elem_per_page) as $filezz)  { 
    
    preg_match('@'.$modelname[1].'_(.*?)_preview@si', $filezz, $id);
    
    
    echo '<img src="https://cbperformer.com/images/'.$modelname[1].'/'. $filezz.'" style=" margin-top:10px; width:700px;" ><a href="https://st1.987cdn.com/download/'.$id[1].'/" class="btn btn-cta btn-cta-primary" style=" margin-top:10px;margin-bottom:0px;"><i class="fa fa-download" aria-hidden="true"></i> Download</a>
<a href="https://cbperformer.com/watch/'.$id[1].'/" class="btn btn-cta btn-cta-primary" style=" margin-top:10px;margin-bottom:0px;margin-left:20px;"><i class="fa fa-video-camera" aria-hidden="true"></i> Stream</a>'; } echo '</div></div></div>'; 


  $input = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ; preg_match('~.com/(.*?)/[?]~', $input, $firstpager); if (empty($firstpager[1])) { $url = '/' ; } else { $url = '/'.$firstpager[1].'/' ; } $input2 = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ; ?><div class="rasp"  ></div><div class="mobileul" style="margin-left:5px; margin-bottom:30px; margin-top:-20px;" ><center><ui class="pages" style="margin-bottom:10px; margin-top:10px;  "><?php   $input = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ; preg_match('~.com/(.*?)/[?]~', $input, $firstpager); if (empty($firstpager[1])) { $url = '/'.$modelname[1].'' ; } else { $url = '/'.$firstpager[1].'/' ; } $input2 = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ; ?><div class="rasp"  ></div><div class="mobileul" style="margin-left:5px; " ><center><ui class="pages" ></br><div class="col-sm-12 col-md-12" style="margin-left:220px;" ><?php 
     


    if (($whatIWant2) == 3) {  $linklink = $url ;  }  else { 
    $linklink = '?page=' . ($whatIWant2-2) ; }
    
    
    $first = "1"; $nextfirst = ($whatIWant2 + 2); if ($whatIWant2 == '1') {$nextfirstt = $nextfirst-1 ;} else {$nextfirstt = $nextfirst; } $next = ($whatIWant2 + 1); $lastlast = ($number_of_pages - 2); $last = ($number_of_pages - 1); 
    
    
    
    
    
    
    $prev = ($whatIWant2 - 1); if ($last <= 1 ) { } else { 
        

        
        
        if (empty($whatIWant2) OR $whatIWant2 == '1' OR $number_of_pages == '3' OR $number_of_pages == '4') { 
            
        if ($number_of_pages == 3 )  {
        if ($whatIWant2 == "2" ) {  $thisd = "this" ; }
         if ($whatIWant2 == "" ) {  $thisdd = "this" ; }
         
         
        echo '<li class="liltepage" >Pages:</li><li><a class="'.$thisdd.'" href="'.$url.'"  >1</a></li><li><a class="'.$thisd.'" href="?page=2">2</a>';  }  elseif ($number_of_pages == 4 )  {

if ($whatIWant2 == "3" ) {  $thisd = "this" ; } 
if ($whatIWant2 == "2" ) {  $thisdd = "this" ; } 
if ($whatIWant2 == "" ) {  $thisddd = "this" ; } 

echo '<li class="liltepage"" >Pages:</li><li><a href="'.$url.'" class="'.$thisddd.'" >1</a></li><li><a class="'.$thisdd.'"  href="?page=2">2</a></li><li><a class="'.$thisd.'" href="?page=3">3</a></li>';  } else {
        
        
        echo '<li class="liltepage">Pages:</li><li><a class="this" >1</a></li><li><a href="?page=2">2</a></li><li><a href="?page=3">3</a></li><li>...</li>';   if ($number_of_pages == 3 OR $number_of_pages == 4)  {  }  else {  echo '<li><a href="?page=' . $last . '">' . $last . '</a></li>';   }
        
        
        }
        
        
        
        
        
        
        } elseif ($whatIWant2 == $last) { echo '<li class="liltepage">Pages:</li><li><a href="'.$url.'">1</a></li><li>...</li><li><a href="?page=' .($last-2). '">' . ($last-2) . '</a></li><li><a href="?page=' . ($last-1) . '">' . ($last-1) . '</a></li><li><a class="this" >' . $last . '</a></li>'; } else { if ($whatIWant2 == '2') { echo '<li class="liltepage">Pages:</li><li><a href="'.$url.'">1</a></li><li><a class="this" >' . $whatIWant2 . '</a></li><li><a href="?page=' . ($whatIWant2+1) . '">' . ($whatIWant2+1) . '</a></li><li>...</li><li><a href="?page=' . $last . '">' . $last . '</a></li>'; } elseif ($whatIWant2 == $lastlast) { echo '<li class="liltepage">Pages:</li><li><a href="'.$url.'">1</a></li><li >...</li><li><a href="?page=' . ($whatIWant2-1) . '">' . ($whatIWant2-1) . '</a></li><li><a class="this" href="?page=' . $whatIWant2 . '">' . $whatIWant2 . '</a></li><li><a href="?page=' . $last . '">' . $last . '</a></li>'; } else { echo '<li class="liltepage">Pages:</li><li><a href="' . $linklink . '">' . ($whatIWant2-2) . '</a></li><li><a href="?page=' . ($whatIWant2-1) . '">' . ($whatIWant2-1) . '</a></li><li><a class="this" >' . $whatIWant2 . '</a></li><li><a href="?page=' . ($whatIWant2+1) . '">' . ($whatIWant2+1) . '</a></li><li><a href="?page=' . ($whatIWant2+2) . '">' . ($whatIWant2+2) . '</a></li>'; } }} ?></ui></center> </div></div> <br/><div class="rasp" style="width:100%"></br><br/><br/><br/>  
<br/>  <br/> <div style="margin-top:90px;" ></div></div> 
</div></div>