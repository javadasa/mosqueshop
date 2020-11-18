<?php
include '../model/DB.php' ;


$hadis_content=DB::query('select hadis_content from hadis ',array());

$slider=DB::query('select sliderImageAddress from slider',array());

$topNewsRightTitle=DB::query('select titleNews from news where category=1',array());
$topNewsRightLongDescription=DB::query('select longDescriptionNews from news where category=1',array());

$topNewsCenterTitle=DB::query('select titleNews from news where category=2',array());
$topNewsCenterLongDescription=DB::query('select longDescriptionNews from news where category=2',array());

$topNewsLeftTitle=DB::query('select titleNews from news where category=3',array());
$topNewsLeftLongDescription=DB::query('select longDescriptionNews from news where category=3',array());

$normalNewsTitle=DB::query('select titleNews from news where category=5',array());
$normalNewsLongDescription=DB::query('select longDescriptionNews from news where category=5',array());
//$normalNewsId=DB::query('select id from news where category=5 and titleNews=:titleNews',array(':titleNews'=>$normalNewsTitle[0]));


$successNewsRightTitle=DB::query('select titleNews from news where category=6',array());
$successNewsRightLongDescription=DB::query('select longDescriptionNews from news where category=6',array());

$successNewsCenterTitle=DB::query('select titleNews from news where category=7',array());
$successNewsCenterLongDescription=DB::query('select longDescriptionNews from news where category=7',array());

$successNewsLeftTitle=DB::query('select titleNews from news where category=8',array());
$successNewsLeftLongDescription=DB::query('select longDescriptionNews from news where category=8',array());



$count_content=DB::query('select count(titleNews)from news',array());

$count_comment=DB::query('select count(id)from comment',array());

function image($normalNewsTitle,$x){
    $category_id=DB::query('select id from news where titleNews=:titleNews',array(':titleNews'=>$normalNewsTitle[$x]['titleNews']))[0]['id'];

    return DB::query('select image_Address from image where category_id=:category',array(':category'=>$category_id))[$x]['image_Address'];
}