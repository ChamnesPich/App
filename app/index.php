<html lan="en">
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
 <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<?php


echo 'Hello World' . '<br />';

$mysqli = new mysqli("localhost", "root", "", "test");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "SELECT ID, First_Name, Last_Name, Date_Of_Birth FROM student ORDER by ID";
 
 if ($result = $mysqli->query($query)) {


echo '<div id="form1">
	  <div id="formhead">
Information

     </div>
<div id="content">';
echo '<table><tr><td>ID</td><td>First Name</td><td>Last Name</td><td>Date of Birth</td></tr>';


    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {

    	$date = strtotime($row['Date_Of_Birth']);

     //   printf ("%s | %s | %s | %s)\n", $row["ID"], $row["First_Name"], $row["Last_Name"], date("j F Y", $date) );
    	
    	echo '<tr><td>' . $row["ID"] . '</td><td>' . $row["First_Name"] . '</td><td>' . $row["Last_Name"] . '</td><td>' . date("F j Y", $date) . '</td></tr>';
        echo '<br />';


      //  var_dump($row);
    }

echo '</table>';
echo '</div></div>';

    /* free result set */
    $result->free();
}



$mysqli->close();


?>

 <?php  
 $connect = mysqli_connect("localhost", "root", "", "test");  
 $output = '';  
 $sql = "SELECT * FROM student";  
 $result = mysqli_query($connect, $sql);  
 if(mysqli_num_rows($result) > 0)  
 {  
      $output .= '<h4 align="center">Search Result</h4>';  
      $output .= '<div class="table-responsive">  
                          <table class="table table bordered">  
                               <tr>  
                                    <th>ID</th>  
                                    <th>First_Name</th>  
                                    <th>Last_Name</th>  
                                    <th>Date_Of_Birth</th>  
                                      
                               </tr>';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["ID"].'</td>  
                     <td>'.$row["First_Name"].'</td>  
                     <td>'.$row["Last_Name"].'</td>  
                     <td>'.$row["Date_Of_Birth"].'</td>  
            
                </tr>  
           ';  
      }  
      echo $output;  
 }  
 else  
 {  
      echo 'Data Not Found';  
 }  


 ?> 

</body>
</html>