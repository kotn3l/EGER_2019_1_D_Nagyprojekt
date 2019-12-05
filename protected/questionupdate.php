<?php
         if(isset($_POST['update'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';

            $conn = mysql_connect($dbhost, $dbuser, $dbpass);

            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }

            $emp_id = $_POST['emp_id'];
            $emp_salary = $_POST['emp_salary'];

            $sql = "UPDATE employee ". "SET emp_salary = $emp_salary ".
               "WHERE emp_id = $emp_id" ;
            mysql_select_db('test_db');
            $retval = mysql_query( $sql, $conn );

            if(! $retval ) {
               die('Could not update data: ' . mysql_error());
            }
            echo "Updated data successfully\n";

            mysql_close($conn);
         }
