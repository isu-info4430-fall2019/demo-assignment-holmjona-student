<?php require("siteVariables.php") ?>
<doctype html></doctype>
<html>
<head>
    <title>This is my Page</title>
</head>
<body>
    <h1>Site of Awesomeness</h1>
    <?php
    include_once("menu.php");
    $pageName = $_GET["page"];
    if($pageName != null ){
        $pageToLoad = $pages[$pageName][1];
    }else{
        $pageToLoad = "home.php";
    }
    include_once($pageToLoad);
    ?>

</body>
</html>

<?php

    //echo 'Hello Framework!';

    //print "Hello";

    //echo "Hello", " World", " asdf", "   ;alkjd;alf";


    //$variable = "something else";
    //var_dump($variable);

    //include("one.php");


    //$variable = 7412;
    //var_dump($variable);


?>