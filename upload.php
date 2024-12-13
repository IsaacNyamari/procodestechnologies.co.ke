<?php
// Define the minimum file size (in bytes) – 500KB
$minFileSize = 500 * 1024; // 500 KB in bytes

// Define the directory where the uploaded image will be stored
$targetDir = "uploads/";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {
    $imageFile = $_FILES['image'];
    $targetFile = $targetDir . basename($imageFile['name']);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if file is an actual image
    $check = getimagesize($imageFile['tmp_name']);
    if ($check === false) {
        echo "File is not an image.";
        exit;
    }

    // Check file size, if less than 500KB, return an error
    if ($imageFile['size'] < $minFileSize) {
        echo "Image size must be at least 500KB.";
        exit;
    }

    // Check if the file already exists
    if (file_exists($targetFile)) {
        echo "Sorry, file already exists.";
        exit;
    }

    // Allow certain file formats (JPG, PNG, JPEG)
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        echo "Sorry, only JPG, JPEG, and PNG files are allowed.";
        exit;
    }

    // Resize the image if it is larger than 500KB
    if ($imageFile['size'] > $minFileSize) {
        $imageResized = resizeImage($imageFile['tmp_name'], $imageFileType, 800, 800); // Max width & height
        // Save the resized image to the target directory
        $outputFile = $targetDir . pathinfo($imageFile['name'], PATHINFO_FILENAME) . ".jpg"; // Save as JPEG
        imagejpeg($imageResized, $outputFile, 85); // Save with quality 85
        imagedestroy($imageResized); // Free memory
        echo "Image uploaded and resized successfully!";
    } else {
        // If image is already the required size, just upload it
        if (move_uploaded_file($imageFile['tmp_name'], $targetFile)) {
            echo "The file " . basename($imageFile['name']) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

// Function to resize the image
function resizeImage($filePath, $imageType, $maxWidth, $maxHeight) {
    // Get the original image dimensions
    list($width, $height) = getimagesize($filePath);

    // Calculate the scaling ratio
    $scaleRatio = min($maxWidth / $width, $maxHeight / $height);
    $newWidth = floor($width * $scaleRatio);
    $newHeight = floor($height * $scaleRatio);

    // Create a new blank image with the new dimensions
    $newImage = imagecreatetruecolor($newWidth, $newHeight);

    // Load the image based on its type
    switch ($imageType) {
        case 'jpg':
        case 'jpeg':
            $sourceImage = imagecreatefromjpeg($filePath);
            break;
        case 'png':
            $sourceImage = imagecreatefrompng($filePath);
            // Preserve transparency for PNG
            imagealphablending($newImage, false);
            imagesavealpha($newImage, true);
            break;
        default:
            return false;
    }

    // Copy and resize the image
    imagecopyresampled($newImage, $sourceImage, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
    return $newImage;
}
?>

<!-- HTML form to upload the image -->
<form action="" method="post" enctype="multipart/form-data">
    <label for="image">Upload Image:</label>
    <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png" required>
    <button type="submit">Upload Image</button>
</form>