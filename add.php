<?php
 include 'connect.php';
$data = json_decode(file_get_contents("php://input"), true);
$name = $data['name'];
$rollnumber = $data['rollnumber'];
$category = $data['category'];
$subCategory = $data['subCategory'];
$marks = $data['marks'];
$query = "INSERT INTO add_marks (Name,Roll_Number,Category,Activity,Marks) VALUES ('$name', '$rollnumber','$category','$subCategory','$marks')";
$result = mysqli_query($con, $query);
$query2 = "INSERT INTO student (student_rollnumber,student_name,category,activity,marks) VALUES ( '$rollnumber','$name','$category','$subCategory','$marks')";
$result2 = mysqli_query($con, $query2);
if($result2){
    echo'Data added succesffuly';

}
else{
    echo'Data not added succesffuly';
}
