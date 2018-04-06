<?php
$filename =($_GET['file']);

// Specify file path.
// '/uplods/'

if(!empty($filename)){
    // Check file is exists on given path.
    if(file_exists($filename))
    {
       
    
    header('Content-Disposition: attachment; filename="'.basename($filename).'"');
    header('Content-Length: ' . filesize($filename));
       
      readfile($filename); 
      exit;
    }
    else
    {
      echo 'File does not exists on given path';
    }
 }
    