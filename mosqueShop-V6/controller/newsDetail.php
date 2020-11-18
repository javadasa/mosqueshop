<?php

include('../model/DB.php');

$title=null;
$newsBody=null;
static $i=0;

if (isset($_GET['k'])) {
    if ($_GET['k'] == 'nrt') {
        $title = DB::query('select titleNews from news where category=1', array());
        $newsBody = DB::query('select longDescriptionNews from news where category=1', array());
        $imageNews=DB::query('select image_Address from image where category_id=1',array());
    }
    if ($_GET['k'] == 'nct') {
        $title = DB::query('select titleNews from news where category=2', array());
        $newsBody = DB::query('select longDescriptionNews from news where category=2', array());
        $imageNews=DB::query('select image_Address from image where category_id=2',array());
    }
    if ($_GET['k'] == 'nlt') {
        $title = DB::query('select titleNews from news where category=3', array());
        $newsBody = DB::query('select longDescriptionNews from news where category=3', array());
        $imageNews=DB::query('select image_Address from image where category_id=3',array());
    }
    if ($_GET['k'] == 'nnt' && isset($_GET['t'])) {
        $category_id=DB::query('select id from news where titleNews=:titleNews',array(':titleNews'=>$_GET['t']))[0]['id'];

        $title = DB::query('select titleNews from news where category=5', array());
        $newsBody = DB::query('select longDescriptionNews from news where category=5', array());
        $imageNews = DB::query('select image_Address from image where category_id=:category_id', array(':category_id' => $category_id));
    }
    if ($_GET['k'] == 'snrt') {
        $title = DB::query('select titleNews from news where category=6', array());
        $newsBody = DB::query('select longDescriptionNews from news where category=6', array());
        $imageNews=DB::query('select image_Address from image where category_id=6',array());

    }
    if ($_GET['k'] == 'snct') {
        $title = DB::query('select titleNews from news where category=7', array());
        $newsBody = DB::query('select longDescriptionNews from news where category=7', array());
        $imageNews=DB::query('select image_Address from image where category_id=7',array());
    }
    if ($_GET['k'] == 'snlt') {
        $title = DB::query('select titleNews from news where category=8', array());
        $newsBody = DB::query('select longDescriptionNews from news where category=8', array());
        $imageNews=DB::query('select image_Address from image where category_id=8',array());
    }
}
