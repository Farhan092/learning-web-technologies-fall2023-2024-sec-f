<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == UPLOAD_ERR_OK) {
        $pictureFormats = ["image/jpeg", "image/jpg", "image/png"];
        $maximumFileSize = 4 * 1024 * 1024; // 4MB in bytes

        $fileType = $_FILES["image"]["type"];

        $isValidFormat = false;
        foreach ($pictureFormats as $format) {
            if ($fileType === $format) {
                $isValidFormat = true;
                break;
            }
        }

        if ($isValidFormat) {
            if ($_FILES["image"]["size"] <= $maximumFileSize) {
                echo "Upload successful";
            } else {
                echo "Error: Picture size should not be more than 4MB.";
            }
        } else {
            echo "Error: Picture format must be in jpeg, jpg, or png.";
        }
    } else {
        echo "Error: No file uploaded or an error occurred during the upload.";
    }
}
?>
