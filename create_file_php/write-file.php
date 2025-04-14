 <?php
$fileName = "example.txt";
$content = "Hello, this is a test file.";
$_file = fopen($fileName, "w") or die("Unable to open file!");
fwrite($file, $content);
fclose($file);
echo 'file created successfully';
 ?>