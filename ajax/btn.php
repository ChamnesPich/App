<html>
<head>
    

 <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


<?php

echo '<button type="button" id="show">Show Me</button>';
echo '<button type="button" id="clear">Clere Me</button>';
echo '<div id="test"></div>';


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