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