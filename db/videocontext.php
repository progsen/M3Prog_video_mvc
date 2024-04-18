<?php
include_once "model/video.php";

function createStubData()
{
    return [

        makeVideoModel(0,"mario first play","https://www.youtube.com/watch?v=YhDLt3o0V6w","img/mario.PNG"),
        makeVideoModel(1,"mario full guide","https://www.youtube.com/watch?v=iFAT6BqhE5A","img/mario2.PNG")

    ];
}

function getVideoById($id)
{
    $data =createStubData();
    return $data[$id];
}
