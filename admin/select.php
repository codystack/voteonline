<?php
include "../config/db.php";

$userid = 0;
if(isset($_POST['userid'])){
   $userid = mysqli_real_escape_string($conn,$_POST['userid']);
}
$sql = "SELECT * FROM getstarted WHERE id=".$userid;
$result = mysqli_query($conn,$sql);

$response = "<table border='0' width='100%'>";
while( $row = mysqli_fetch_array($result) ){
 $id = $row['id'];
 $firstName = $row['firstName'];
 $lastName = $row['lastName'];
 $phoneNum = $row['phoneNum'];
 $email = $row['email'];
 $company = $row['company'];
 $event = $row['event'];
 $comment = $row['comment'];
 $date = $row['date'];


 $response .= "<div class='table-responsive'>";
     $response .= "<table class='table table-bordered'>";

          $response .= "<tr>";
          $response .= "<th style='background-color: #ececef;'><strong>First Name:</strong></th>";
          $response .= "<td>".$firstName."</td>";
          $response .= "</tr>";

          $response .= "<tr>";
          $response .= "<th style='background-color: #ececef;'><strong>Last Name:</strong></th>";
          $response .= "<td>".$lastName."</td>";
          $response .= "</tr>";

          $response .= "<tr>";
          $response .= "<th style='background-color: #ececef;'><strong>Email:</strong></th>";
          $response .= "<td>".$email."</td>";
          $response .= "</tr>";

          $response .= "<tr>";
          $response .= "<th style='background-color: #ececef;'><strong>Phone Number:</strong></th>";
          $response .= "<td>".$phoneNum."</td>";
          $response .= "</tr>";

          $response .= "<tr>";
          $response .= "<th style='background-color: #ececef;'><strong>Company Name:</strong></th>";
          $response .= "<td>".$company."</td>";
          $response .= "</tr>";

          $response .= "<tr>";
          $response .= "<th style='background-color: #ececef;'><strong>Event:</strong></th>";
          $response .= "<td>".$event."</td>";
          $response .= "</tr>";

          $response .= "<tr>";
          $response .= "<th style='background-color: #ececef;'><strong>Comment:</strong></th>";
          $response .= "<td><div class='form-group'>";
          $response .= "<textarea class='form-control' rows='5' readonly>".$comment."</textarea>";
          "</div></td>";
          $response .= "</tr>";

          $response .= "<tr>";
          $response .= "<th style='background-color: #ececef;'><strong>Request Dtate:</strong></th>";
          $response .= "<td>".date("d(D) M Y", strtotime($date))."</td>";
          $response .= "</tr>";

     }
     $response .= "</table>";
$response .= "</div>";

echo $response;
exit;