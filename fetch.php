<?php
$db=$con;
$table="sample";
$columns=['SubjectId','SampleId','FreezerNumber','BoxId','Shelf','BoxNumber','Position','Comment']
$fetchData= fetch_data($db,$table,$columns);
function fetch_data($db,$table,$columns){
    if(empty($db)){
        $msg="database connection error ";
    }
    elseif(empty($columns) || !is_array($columns)){
        $msg="columns name must be defined in an indexed arrray";
    }
    else{
        $query="SELECT * FROM $table ;"
        $results=$db->query($query);
        if($results==true){
            if($results->num_rows>0){
                $row=mysqli_fetch_all($results,MYSQLI_ASSOC);
                $msg=$row;
            }
            else{
                $msg="No data found";
            }
        }
        return $msg;
    }
}
?>