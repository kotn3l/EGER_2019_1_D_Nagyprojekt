<?php


$query = "DELETE FROM contacts WHERE name={$_POST['name']} LIMIT 1";


if (mysql_affected_rows() == 1) {
?>

            <strong>Contact Has Been Deleted</strong><br /><br />

<?php
 } else { 

?>

            <strong>Deletion Failed</strong><br /><br />


<?php
} 