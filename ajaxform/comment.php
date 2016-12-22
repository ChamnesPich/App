<?php
   if(isset($_POST['submit']))

   {
  		$_POST['name'] = $name;
      $_POST['comment'] = $comment;


echo $_POST['name'];
      echo $_POST['comment'];

}


else{

	echo 'no data';
}



?>