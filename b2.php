<!DOCTYPE html>
<html>
<body>


<?php 

$book = $_POST['name'];

$book = str_replace(' ','+',$book);

$amz = 'http://www.amazon.in/s/ref=nb_sb_noss_2?url=search-alias%3Dstripbooks&field-keywords=';
$book=$amz.$book;
header("Location: $book");
?>

</body>
</html>