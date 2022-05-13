<?php

//Server side validate for contact form

	if(!isset($_POST['name']) || strlen($_POST['name']) < 5)
	{
		exit("Wrong name: ".$_POST['name']);
	}

	$re = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/';
	if(!isset($_POST['e-mail']) || !preg_match($re,$_POST['e-mail']))
	{
		exit("Wrong email: ".$_POST['e-mail']);
	}

	if(!isset($_POST['message']) || empty($_POST['message']))
	{
		exit("Wrong text: ".$_POST['message']);
	}
?>  

<?php         
   if (isset($_POST['send']))
      {
               $name = $_POST['name'] ;             
               $email = $_POST['e-mail'] ;
               $subject = $_POST['subject'] ;
               $message = $_POST['message'] ;
        }
?>

<html>
<head>
    <meta charset=utf-8>
    <style>
            body {text-align: justify; font-family: serif; color: #0075c5; font-size: 20px;}
            h3 {text-align: center;}
            div#divmail{ width: 500px; margin: 0 auto; }
            label.lab {float: left;}
            text.text {float: right;}
            fieldset#fset {width: 500px; border-color:#0075c5; border-style: double; padding: 10 30 30 30;}
            
        
    </style>
</head>
<body>
<?php
echo"
    <div id='divmail'> 
      <fieldset id='fset'>
        <h3>Thank you for your message!</h3>
        <h3>Content of the sent e-mail:</h3><br>
        <label class='lab'>Name:</label>                <text class='text'>$name</text><br><br>
        <label class='lab'>E-mail address:</label>         <text class='text'>$email</text><br><br>
        <label class='lab'>Subject:</label>              <text class='text'>$subject</text><br><br>
        <label class='lab'>Message text:</label>  <text class='text'>$message</text><br><br>               
        <br>
      </fieldset>
    </form>
    </div>";
     
     

?>


</body>
</html>