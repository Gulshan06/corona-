<?php
$server='localhost';
$user='root';
$password='';
$db='corona';

$con=mysqli_connect($server,$user,$password,$db);
if($con)
{
?>
<script>
alert("Connection Successful");
</script>
<?php
    
}
else
{
    ?>
<script>
alert("Connection Not Successful");
</script>
<?php
    
}
?>