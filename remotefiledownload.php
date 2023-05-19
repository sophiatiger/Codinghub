<?php
if(isset($_POST['download_file'])) {
    $url = $_POST['file_url'];
    $file_name = basename($url);
    $file_path = "downloads/" . $file_name;
    if(file_put_contents($file_path, file_get_contents($url))) {
        echo "File downloaded successfully!";
    }
    else {
        echo "Failed to download file";
    }
}
?>

<form method="post">
    <label for="file_url">Enter file URL:</label>
    <input type="text" name="file_url" id="file_url" required>
    <br><br>
    <input type="submit" name="download_file" value="Download">
</form>