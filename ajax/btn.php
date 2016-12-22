<html>
<head>
    

 <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


<?php

set_include_path(get_include_path() . PATH_SEPARATOR . 'D:\xampp\htdocs\ajax\PHP-MySQLi-Database-Class');
include 'MysqliDb.php';

echo '<button type="button" id="show">Show Me</button>';
echo '<button type="button" id="clear">Clear Me</button>';
echo '<div id="test"></div>';


$mysqli = new mysqli ('localhost', 'root', '', 'test');
$db = new MysqliDb ($mysqli);

$data = Array ("ID" => "",
               "First_Name" => "Mitya",
               "Last_Name" => 'Hort',
               "Date_Of_Birth" => '1990-10-18'
);
$id = $db->insert ('student', $data);
if($id)
    echo 'user was created. Id=' . $id;







?>
<script type="text/javascript">
    $(document).ready(function(){
        $("#show").click(function(){

            $.ajax({
                type: 'POST',
                url: 'click_fetch.php',
                success: function(data) {
           
                    $("#test").html(data);

                }
            });
   });

$("#clear").click(function(){

                   
                    $("#test").html('');

           
            });



});
</script>



</body>

</html>