<?php
include_once('connect.php');
$query="SELECT * FROM `reagents`;";
$results=mysqli_query($con,$query);
$arr_sample=[];
if(mysqli_num_rows($results)>0){
    $arr_sample=mysqli_fetch_all($results, MYSQLI_ASSOC);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
</head>
<body>
	<table id="tbsample" target="_blank" >
		<thead>
			<tr>
			    <th>subject id</th>
			    <th>sample id</th>
			    <th>freezer number</th>
			    <th>box id</th>
			    <th>shelf</th>
			    <th>box number</th>
			    <th>position</th>
			    <th>comment</th>
			</tr>
		</thead>
		<tbody>
		    <?php foreach ($arr_sample as $value) { ?>
                <tr>
                    <td><?php echo $value['SubjectId']; ?></td>
                    <td><?php echo $value['ReagentId']; ?></td>
                    <td><?php echo $value['FreezerNumber']; ?></td>
                    <td><?php echo $value['BoxId']; ?></td>
                    <td><?php echo $value['Shelf']; ?></td>
                    <td><?php echo $value['BoxNumber']; ?></td>
                    <td><?php echo $value['Position']; ?></td>
                    <td><?php echo $value['Comment']; ?></td>
                </tr>
            <?php } ?>
		</tbody>
	</table>
	<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
	<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>	
</body>
</html>