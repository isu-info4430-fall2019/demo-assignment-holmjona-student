<?php
$pages = ["Page 1" => "objects.php",
        "Page 2" => "objects2.php"];
echo"<ul>";
foreach ($pages as $key => $value)
{
	echo "<li><a href='$value'>$key</a></li>";
}
echo"</ul>";

?>