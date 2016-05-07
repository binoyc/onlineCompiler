<?php
/**
 * Created by PhpStorm.
 * User: Binoy Chacko
 * Date: 05-04-2016
 * Time: 11:17 PM
 */
session_start();
include("../php/connect.php");

$program = $_POST['code'];
$input = $_POST['input'];
$output = $_POST['output'];
$id = $_SESSION['id'];
$pid = $_SESSION['pid'];

$date = date("Y-m-d h:i:sa");


$sql = "INSERT INTO codelab.solutions (program, input, output, uid, pid, date) VALUES ('$program', '$input', '$output', $id, $pid, '$date')";
$result = mysqli_query($conn, $sql);


if($result) {

    echo "Result Submitted Successfully";
}
else {
    echo "Please check your output";

}

?>