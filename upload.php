<?php

if (isset($_FILES["upload"])) {

    $name = rand() . "_" . $_FILES["upload"]["name"];

    move_uploaded_file($_FILES["upload"]["tmp_name"], "image/$name");

    GetUrl("http://localhost/deneme/image/$name");

}

function GetUrl($url)
{
    echo json_encode(array('url' => $url));
}
