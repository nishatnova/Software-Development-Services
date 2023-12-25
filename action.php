<?php

require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\Primary;
$home = new Home();

if (isset($_GET['page']))

{
    if ($_GET['page'] == 'home')
    {
        $home->index();
    }

    elseif ($_GET['page'] == 'category')
    {
        $home->category($_GET['id']);
    }

    elseif ($_GET['page'] == 'service')
    {
        $home->service($_GET['id']);
    }

    elseif ($_GET['page'] == 'primary')
    {
        $home->primary();
    }
/*
    elseif ($_GET['page'] == 'get-prime')
    {
        $prime = new Primary();
        $prime->index();

    }
*/



}
elseif (isset($_POST['primary_btn']))
{
    $primary = new Primary($_POST);
    $primary->index();
}