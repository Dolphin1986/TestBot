<?php

include 'webhook.php';

print_r($update);


?>

<!doctype html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
</head>
<body>

	<img src='<? echo($update['img_url01'])?>' id="img_url">

<script type="text/javascript">
$(document).ready(function() {
    $('#img_url01').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: 'webhook.php',
            data: $(this).serialize(),
            success: function(response)
            {
                var jsonData = JSON.parse(response);
 
                // user is logged in successfully in the back-end
                // let's redirect
                if (jsonData.success == "1")
                {
                    location.href = 'my_profile.php';
                }
                else
                {
                    alert('Invalid Credentials!');
                }
           }
       });
     });
});
</script>
</body>
</html>