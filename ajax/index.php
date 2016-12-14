 <html lan="en">
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div id="result"></div>
<button type="button" id="updateButton"

                      class="btn btn-primary">

                Show

              </button>

 <script>  
 $(document).ready(function(){  
      $('#updateButton').click(function(){  
           
                $.ajax({  
                     url:"click_fetch.php",  
                 
                  
                    
                     success:function(data)  
                     {  
                          $('#result').html(data);  
                     }  
                });  
           }  
        
      });  
  
 </script>  
 </body>
 </html>