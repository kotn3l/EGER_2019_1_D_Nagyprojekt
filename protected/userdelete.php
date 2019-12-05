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

           $sql = "DELETE FROM users WHERE user_id= $user_id" ;
           mysql_select_db('kviz');
           $retval = mysql_query( $sql, $conn );

           if(! $retval ) {
              die('Could not delete data: ' . mysql_error());
           }

           echo "Deleted data successfully\n";

           mysql_close($conn);
