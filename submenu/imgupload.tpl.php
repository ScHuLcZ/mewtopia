<?php
        include('config.inc.php');
    $messages = array();   

    
    if (isset($_POST['send'])) {
        
        foreach($_FILES as $file) {
            if ($file['error'] == 4);   
            elseif (!in_array($file['type'], $MEDIATYPES))
                $messages[] = "Not accepted type of file: " . $file['name'];
            elseif ($file['error'] == 1   
                        or $file['error'] == 2   
                        or $file['size'] > $MAXSIZE) 
                $messages[] = "Too big file: " . $file['name'];
            else {
                $finalplace = $FOLDER.strtolower($file['name']);
                if (file_exists($finalplace))
                    $messages[] = "Existing file: " . $file['name'];
                else {
                    move_uploaded_file($file['tmp_name'], $finalplace);
                    $messages[] = ' Ok: ' . $file['name'];
                }
            }
        }        
    }
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Gallery</title>
    <style type="text/css">
        label { display: block; }
    </style>
</head>
<body>
    <h1>Upload pictures</h1>
<?php
    if (!empty($messages))
    {
        echo '<ul>';
        foreach($messages as $m)
            echo "<li>$m</li>";
        echo '</ul>';
    }
?>
    <form action="index.php?page=imgupload" method="post" enctype="multipart/form-data">
        <label style="padding-left: 15px" >First photo:<br><br>
            <input style="padding-left: 20px" type="file" name="first" required>
        </label><br>
        <label style="padding-left: 15px" >Second photo:<br><br>
            <input style="padding-left: 20px" type="file" name="second">
        </label><br>
        <label style="padding-left: 15px"   >Third photo:<br><br>
            <input style="padding-left: 20px" type="file" name="third">
        </label> <br>      
        <br><input style="float: left; margin-left: 10px" type="submit" name="send">
      </form>    

      <br><br><br><br><br><br><br><br><br><br><br><br><br>

</body>
</html>