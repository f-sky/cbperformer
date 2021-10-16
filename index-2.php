<!DOCTYPE HTML><html>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>Chaturbate Performer - Index of your favorite broadcasters</title> 
<meta name="description" content="Index list of all your favorite Chaturbate Performer to purchase a membership and get unlimited recordings of your  model. 24 hours 7 days a week monitoring. Stream or download full length videos in your dashboard.">
<meta name="RATING" content="RTA-5042-1996-1400-1577-RTA">
<link href="/boot.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<link href="/style.css" rel="stylesheet" media="screen" title="default">
<link href='https://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>  
<link rel="shortcut icon" type=image/ico href="/favicon.png"/>
<link href="/style2.css" rel="stylesheet" media="screen" title="default">



<body style="background-color:#48953f; height:500px;" /> 
<center><div class="container text-center" style="margin-top:130px; margin-bottom:-20px;  border-radius: 5px;   width:800px; background-color:white; " ><form action="/" role="search" method="post" id="former" > <div class="search input-group"> <input style="margin-top:10px; " type="text" name="searchterm" id="searchterm" class="form-control" placeholder="Search some broadcasters"> <span class="input-group-btn" > <button style="margin-top:10px;height:32px; padding-top:5px;" type="submit" class="btn btn-cta btn-cta-primary">Search</button> </span> </div> </form> 
         <?php   exec('ls  /home4/performer/public_html/names/  |   wc -l') ; ?>
                 <div class="form-group" style="margin-top:10px;" >
    <div class="panel panel-success">
      <div class="panel-heading"><a href="/faq/"><i class="fa fa-question" style="float:left;" aria-hidden="true"></i></a><i class="fa fa-arrow-right" style="float:right;" aria-hidden="true"></i>
        <h3 class="panel-title">Performer Index (Users <?php  echo exec('ls  /home4/performer/public_html/names/  |   wc -l') ; ?>) <i class="fa fa-users" aria-hidden="true"></i>
</h3> 
      </div><div style="width:750px;" >
      <div class="panel-body">
      <?php
$input = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; if (strpos($input,'page') !== false) { $whatIWant2 = substr($input, strpos($input, "page=") + 5); $whatIWant2; } else { } if (false !== strpos($input, 'page')) { $page = isset($whatIWant2)?intval($whatIWant2-1):0; } else { $page = '0' ; }
if (isset($_POST['searchterm'])) {
  exec('find /home4/performer/public_html/names/ -name *'.strtolower($_POST['searchterm']).'* | head -100000', $matches);
  
  
  if (empty($matches)) { echo '<div class="alert alert-success" role="alert">
  No broadcaster found for this search term.
</div>' ;  }
  
  
  preg_match('~/names/(.*?)$~', $matches, $matches2);
  
   $returnz  = $matches2[1]; 
  
   } else {

exec('ls  /home4/performer/public_html/names/  | head -100000', $matches);} 



$returnz = $matches;  
$nb_elem_per_page = 64; $data = $returnz; $number_of_pages = intval(count($data)/$nb_elem_per_page)+2; $page_no = $whatIWant2; foreach (array_slice($data, $page*$nb_elem_per_page, $nb_elem_per_page) as $filezz)  { 
    if (isset($_POST['searchterm'])) {
     preg_match('~/names/(.*?)$~', $filezz, $filezz); $filezz = $filezz[1]; }
    
    
    echo '<div class="col-sm-6 col-md-3" style="margin-top:2px;"><a href="/welcome/'. $filezz.'">'. $filezz.'</a></div>'; } echo '</div></div></div><div style"margin-bottom:20px; ">'; 


  $input = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ; preg_match('~.com/(.*?)/[?]~', $input, $firstpager); if (empty($firstpager[1])) { $url = '/' ; } else { $url = '/'.$firstpager[1].'/' ; } $input2 = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ; ?><div class="rasp"  ></div><div class="mobileul" style="margin-left:5px;" ><center><ui class="pages" style="margin-bottom:10px; margin-top:10px;  "><?php   $input = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ; preg_match('~.com/(.*?)/[?]~', $input, $firstpager); if (empty($firstpager[1])) { $url = '/' ; } else { $url = '/'.$firstpager[1].'/' ; } $input2 = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ; ?><div class="rasp"  ></div><div class="mobileul" style="margin-left:5px;" ><center><ui class="pages" style="margin-bottom:-10px;  "><div class="col-sm-12 col-md-12" style="margin-left:220px;" ><?php 
     


    if (($whatIWant2) == 3) {  $linklink = $url ;  }  else { 
    $linklink = '?page=' . ($whatIWant2-2) ; }
    
    
    $first = "1"; $nextfirst = ($whatIWant2 + 2); if ($whatIWant2 == '1') {$nextfirstt = $nextfirst-1 ;} else {$nextfirstt = $nextfirst; } $next = ($whatIWant2 + 1); $lastlast = ($number_of_pages - 2); $last = ($number_of_pages - 1); 
    
    
    if ($whatIWant2 > $last) {  echo  '<meta http-equiv="refresh" content="0; url='.$url.'">'; } 
    
    
    
    $prev = ($whatIWant2 - 1); if ($last <= 1 ) { } else { 
        

        
        
        if (empty($whatIWant2) OR $whatIWant2 == '1' OR $number_of_pages == '3' OR $number_of_pages == '4') { 
            
        if ($number_of_pages == 3 )  {
        if ($whatIWant2 == "2" ) {  $thisd = "this" ; }
         if ($whatIWant2 == "" ) {  $thisdd = "this" ; }
         
         
        echo '<li class="liltepage"  >Pages:</li><li><a class="'.$thisdd.'" href="'.$url.'"  >1</a></li><li><a class="'.$thisd.'" href="?page=2">2</a>';  }  elseif ($number_of_pages == 4 )  {

if ($whatIWant2 == "3" ) {  $thisd = "this" ; } 
if ($whatIWant2 == "2" ) {  $thisdd = "this" ; } 
if ($whatIWant2 == "" ) {  $thisddd = "this" ; } 

echo '<li class="liltepage">Pages:</li><li><a href="'.$url.'" class="'.$thisddd.'" >1</a></li><li><a class="'.$thisdd.'"  href="?page=2">2</a></li><li><a class="'.$thisd.'" href="?page=3">3</a></li>';  } else {
        
        
        echo '<li class="liltepage">Pages:</li><li><a class="this" >1</a></li><li><a href="?page=2">2</a></li><li><a href="?page=3">3</a></li><li>...</li>';   if ($number_of_pages == 3 OR $number_of_pages == 4)  {  }  else {  echo '<li><a href="?page=' . $last . '">' . $last . '</a></li>';   }
        
        
        }
        
        
        
        
        
        
        } elseif ($whatIWant2 == $last) { echo '<li class="liltepage">Pages:</li><li><a href="'.$url.'">1</a></li><li>...</li><li><a href="?page=' .($last-2). '">' . ($last-2) . '</a></li><li><a href="?page=' . ($last-1) . '">' . ($last-1) . '</a></li><li><a class="this" >' . $last . '</a></li>'; } else { if ($whatIWant2 == '2') { echo '<li class="liltepage">Pages:</li><li><a href="'.$url.'">1</a></li><li><a class="this" >' . $whatIWant2 . '</a></li><li><a href="?page=' . ($whatIWant2+1) . '">' . ($whatIWant2+1) . '</a></li><li>...</li><li><a href="?page=' . $last . '">' . $last . '</a></li>'; } elseif ($whatIWant2 == $lastlast) { echo '<li class="liltepage">Pages:</li><li><a href="'.$url.'">1</a></li><li >...</li><li><a href="?page=' . ($whatIWant2-1) . '">' . ($whatIWant2-1) . '</a></li><li><a class="this" href="?page=' . $whatIWant2 . '">' . $whatIWant2 . '</a></li><li><a href="?page=' . $last . '">' . $last . '</a></li>'; } else { echo '<li class="liltepage">Pages:</li><li><a href="' . $linklink . '">' . ($whatIWant2-2) . '</a></li><li><a href="?page=' . ($whatIWant2-1) . '">' . ($whatIWant2-1) . '</a></li><li><a class="this" >' . $whatIWant2 . '</a></li><li><a href="?page=' . ($whatIWant2+1) . '">' . ($whatIWant2+1) . '</a></li><li><a href="?page=' . ($whatIWant2+2) . '">' . ($whatIWant2+2) . '</a></li>'; } }} ?></ui></center> </div></div> <br/><div class="rasp" style="width:100%"></br><br/><br/><br/> 

</div></body> </html> 
