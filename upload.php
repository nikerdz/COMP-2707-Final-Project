<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["fileToUpload"])) {
    $targetDir = "uploads/"; // Directory where uploaded files will be stored
    $targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    
    // Check if the file is a PDF
    if ($fileType != "pdf") {
        echo "Only PDF files are allowed.";
        exit();
    }

    // Check if file already exists
    if (file_exists($targetFile)) {
        echo "File already exists.";
        exit();
    }

    // Upload file
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
        header('Location: success.html');
    } else {
        echo "Error uploading file.";
    }
}
?>
