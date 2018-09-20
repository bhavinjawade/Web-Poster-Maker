<?php
//Get the base-64 string from data
$filteredData=substr($_POST['img_val'], strpos($_POST['img_val'], ",")+1);

//Decode the string
$unencodedData=base64_decode($filteredData);

//Save the image
file_put_contents('img.png', $unencodedData);
?>
<html>
    <a href="img.png" target="blank">
    Download Image</a>
<?php
//Show the image
echo '<img src="'.$_POST['img_val'].'"/>';
?>

<style type="text/css">
body, a, span {
	font-family: Tahoma; font-size: 10pt; font-weight: bold;
}
</style>