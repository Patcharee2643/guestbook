<?php


require("connect_db.php");
$sql = "SELECT id, fname, lname,age ,sex,marry_status FROM survey";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc())
   {
    if ( $row["age"]< 15 && $row["sex"]=="M"&&  $row["marry_status"]=="N")
    {
        echo " เด็กชาย " . $row["fname"]. " " . $row["lname"].  "<a href='edit_people.php?id=".$row["id"]."'>Edit</a><br>";


    }
    else if ($row["age"]>= 15 &&  $row["sex"]=="M"&&  $row["marry_status"]=="N")
    {
        echo "นาย " . $row["fname"]. " " . $row["lname"]. "<a href='edit_people.php?id=".$row["id"]."'>Edit</a><br>";



    }
    else if ($row["age"] >= 15 && $row["sex"]=="M"&&  $row["marry_status"]=="Y")
    {
        echo  " นาย " . $row["fname"]. " " . $row["lname"].  "<a href='edit_people.php?id=".$row["id"]."'>Edit</a><br>";


    }
    else if($row["age"]< 15 &&$row["sex"]=="F"&&  $row["marry_status"]=="N")
    {
        echo  " เด็กหญิง " . $row["fname"]. " " . $row["lname"]. "<a href='edit_people.php?id=".$row["id"]."'>Edit</a><br>";


    }
    else if($row["age"] >= 15 &&$row["sex"]=="F"&&  $row["marry_status"]=="N")
    {
        echo " นางสาว " . $row["fname"]. " " . $row["lname"]. "<a href='edit_people.php?id=".$row["id"]."'>Edit</a><br>";


    }
    else if($row["age"] >= 15 && $row["sex"]=="F"&&  $row["marry_status"]=="Y")
    {
        echo" นาง " . $row["fname"]. " " . $row["lname"]. "<a href='edit_people.php?id=".$row["id"]."'>Edit</a><br>";

    }
   
   
  }
} else {
  echo "0 results";
}
$conn->close();
?>