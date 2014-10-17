<?php

if(isset($_POST['data1'],$_POST['data2']))
{
    $data1 = $_POST['data1'];
    $data2 = $_POST['data2'];

    echo 'This is POST Method Result : '.$data1 * $data2;


}
else if(isset($_GET['data1'],$_GET['data2']))
{
    $data1 = $_GET['data1'];
    $data2 = $_GET['data2'];

    echo 'This is GET Method Result : '.$data1 * $data2;
}
