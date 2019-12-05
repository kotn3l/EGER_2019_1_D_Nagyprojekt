<?php
        if(isset($_POST['delete'])) {
           $dbhost = 'localhost';
           $dbuser = 'root';
           $dbpass = '';
           $conn = mysql_connect($dbhost, $dbuser, $dbpass);

           if(! $conn ) {
              die('Could not connect: ' . mysql_error());
           }

           $emp_id = $_POST['user_id'];

           
