<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require config file
require '/home/ctangree/config.php';

//Connect to database with PDO
try {
    //Instantiate a database object
    $dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
    //echo 'Connected to database!';
} catch (PDOException $e) {
    echo $e->getMessage();
}

//Defines a variable to store the name of the directory that will hold your file uploads
$dirName = 'uploads/';
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>File Uploader</title>
</head>
<body>
<div class="container m-5">
    <h1><a href="index.php">File Uploader</a></h1>
    <h2>Select a file to upload</h2>
    <h4>Valid file types include jpg and gif</h4>
    <form action="#" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload">
        <input type="submit" value="Upload File" name="submit">
    </form>

    <?php
    //var_dump($_FILES);

    //If file has been submitted
    if (isset($_FILES['fileToUpload'])) {

        $file = $_FILES['fileToUpload'];

        //        echo 'name - '.$file['name'] . '<br>';
        //        echo 'type - '.$file['type'] . '<br>';
        //        echo 'tmp_name - '.$file['tmp_name'] . '<br>';
        //        echo 'error - '.$file['error'] . '<br>';
        //        echo 'size - '.$file['size'] . '<br>';

        //Define valid file types
        $validTypes = array('image/gif', 'image/jpeg', 'image/jpg', 'image/png');

        //Check file size - 2 MB maximum
        if ($_SERVER['CONTENT_LENGTH'] > 3000000) {
            echo "<p class='alert alert-danger mt-2'>File is too large. Maximum file size is 3 MB.</p>";
        } //Check file type
        else if (in_array($file['type'], $validTypes)) {
            if ($file['error'] > 0)
                echo "<p class='alert alert-danger mt-2'>Return Code: {$file['error']}</p>";

            //Check for duplicate file
            if (file_exists($dirName . $file['name'])) {
                echo "<p class='alert alert-danger mt-2'>Error uploading: ";
                echo $file['name'] . " already exists.</p>";
            } else {
                //Move file to upload directory
                move_uploaded_file($file['tmp_name'], $dirName . $file['name']);
                echo "<p class='alert alert-success mt-2'>Uploaded {$file['name']} successfully!</p>";

                // store the file name in the database
                $sql = "INSERT INTO uploads(filename) VALUES ('{$file['name']}')";
                $dbh->exec($sql);
            }
        } //Invalid file type
        else {
            echo "<p class='alert alert-danger mt-2'>Invalid file type. Allowed types: gif, jpg, png</p>";
        }
    }

    /*
     * Show each image
     */

    //Open file directory
    $dir = opendir($dirName);

    //Get names of files
    $sql = "SELECT * FROM uploads";
    $result = $dbh->query($sql);

    //Display images
    if (!empty($result)) {
        foreach ($result as $row) {
            $img = $row['filename'];
            echo "<img src='$dirName$img' alt='$img' class='m-3'>";
        }
    }

    ?>

</div>


</body>
</html>