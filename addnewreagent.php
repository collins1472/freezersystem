<?php
include_once('connect.php');
$subid=$_POST['subject_id'];
$sampid=$_POST['sample_id'];
$freezerno=$_POST['freezer_No'];
$bid=$_POST['box_id'];
$shelfno=$_POST['shelf_No'];
$bno=$_POST['box_No'];
$samplposition=$_POST['sample_position'];
$samplcomment=$_POST['sample_comment'];
$sql="INSERT INTO  reagents (SubjectId,ReagentId,FreezerNumber,BoxId,Shelf,BoxNumber,Position,Comment) VALUES('$subid','$sampid','$freezerno','$bid','$shelfno','$bno','$samplposition','$samplcomment')";
if(mysqli_query($con,$sql)){
    echo"data inserted successfully ";
}
?>