
<?php

// If upload button is clicked ...
if (isset($_POST['upload'])) {

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];	
	$folder = "public/img/".$filename;
		
		// Get all the submitted data from the form
		$sql = "INSERT INTO items (image) VALUES ('$filename')";

		// Execute query
		mysqli_query($db, $sql);
		
		// Now let's move the uploaded image into the folder: image
		if (move_uploaded_file($tempname, $folder)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "Failed to upload image";
	    }
}
?>

<!DOCTYPE html>
<html>
  
<head>
    <title>Image Upload</title>
    <link rel="stylesheet" 
          type="text/css"
          href="public/css/upload.css" />
</head>
  
<body>
    <div id="content">
  
        <form method="POST" 
              action="" 
              enctype="multipart/form-data">
            <input type="file" 
                   name="uploadfile" 
                   value="" />
  
            <div>
                <button type="submit"
                        name="upload">
                  UPLOAD
                </button>
            </div>
        </form>
    </div>
</body>
  
</html>