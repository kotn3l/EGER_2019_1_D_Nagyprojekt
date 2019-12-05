<?php


$query = "DELETE FROM question WHERE question={$_POST['question']} LIMIT 1";


if (mysql_affected_rows() == 1) {
?>

            <strong>Contact Has Been Deleted</strong><br /><br />

<?php
 } else {

?>

            <strong>Deletion Failed</strong><br /><br />


<?php
}
