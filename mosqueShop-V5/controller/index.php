<?php

require_once('../model/DB.php');
include('../controller/isLoggedIn.php');

$topNewsRightTitle=null;
$topNewsCenterTitle=null;
$topNewsLeftTitle=null;
$topNewsRightSmallDescriptionNews=null;
$topNewsCenterSmallDescriptionNews=null;
$topNewsLeftSmallDescriptionNews=null;
$topRightImageNews=null;
$topCenterImageNews=null;
$topLeftImageNews=null;
$topNewsRightLongDescriptionNews=null;
$topNewsCenterLongDescriptionNews=null;
$topNewsLeftLongDescriptionNews=null;
$normalSmallNews=null;
$normalLongNews=null;
$normalTitleNews=null;
$normalImageNews=null;
$successTitleRightNews=null;
$successSmallRightNews=null;
$successLongRightNews=null;
$successImageRightNews=null;
$successTitleCenterNews=null;
$successSmallCenterNews=null;
$successLongCenterNews=null;
$successImageCenterNews=null;
$successTitleLeftNews=null;
$successSmallLeftNews=null;
$successLongLeftNews=null;
$successImageLeftNews=null;
$sliderImage=null;
$hadis=null;
$count_content=null;
$count_comment=null;


if(isset($_POST['home'])) {
    if (Login::isLoggedIn()) {
        $userid = Login::isLoggedIn();


        $username = connectDB::query('select username from users where id=:userid', array(':userid' => $userid));
        header("Location:../view/index.php?user=$username");


    } else {
        header("Location:../view/login.php");
    }

}
$category=array(1,2,3,4,5,6,7,8,9);
list($topNewsRightCategory,$topNewsCenterCategory,$topNewsLeftCategory,$sliderCategory,$normalNewsCategory,$successNewsRightCategory,$successNewsCenterCategory,$successNewsLeftCategory,$hadisCategory)=$category;
//-----------------------------------------------------------------------------------------------------------------------------------------
$topNewsRightTitle=connectDB::query('select titleNews from news where category=:category',array(':category'=>$topNewsRightCategory))[0]['titleNews'];

$topNewsCenterTitle=connectDB::query('select titleNews from news where category=:category',array(':category'=>$topNewsCenterCategory))[0]['titleNews'];

$topNewsLeftTitle=connectDB::query('select titleNews from news where category=:category',array(':category'=>$topNewsLeftCategory))[0]['titleNews'];

//-----------------------------------------------------------------------------------------------------------------------------------------

$topNewsRightSmallDescriptionNews=substr(connectDB::query('select LongDescriptionNews from news where category=:category',array(':category'=>$topNewsRightCategory))[0]['LongDescriptionNews'],0,170);

$topNewsCenterSmallDescriptionNews=substr(connectDB::query('select LongDescriptionNews from news where category=:category',array(':category'=>$topNewsCenterCategory))[0]['LongDescriptionNews'],0,170);

$topNewsLeftSmallDescriptionNews=substr(connectDB::query('select LongDescriptionNews from news where category=:category',array(':category'=>$topNewsLeftCategory))[0]['LongDescriptionNews'],0,170);

//---------------------------------------------------------------------------------------------------------------------------

$topRightImageNews=connectDB::query('select imageNewsAddress from news where category=:category',array(':category'=>$topNewsRightCategory))[0]['imageNewsAddress'];

$topCenterImageNews=connectDB::query('select imageNewsAddress from news where category=:category',array(':category'=>$topNewsCenterCategory))[0]['imageNewsAddress'];

$topLeftImageNews=connectDB::query('select imageNewsAddress from news where category=:category',array(':category'=>$topNewsLeftCategory))[0]['imageNewsAddress'];

//--------------------------------------------------------------------------------------------------------------------------------

$topNewsRightLongDescriptionNews=connectDB::query('select LongDescriptionNews from news where category=:category',array(':category'=>$topNewsRightCategory))[0]['LongDescriptionNews'];

$topNewsCenterLongDescriptionNews=connectDB::query('select LongDescriptionNews from news where category=:category',array(':category'=>$topNewsCenterCategory))[0]['LongDescriptionNews'];

$topNewsLeftLongDescriptionNews=connectDB::query('select LongDescriptionNews from news where category=:category',array(':category'=>$topNewsLeftCategory))[0]['LongDescriptionNews'];

//---------------------------------------------------------------------------------------------------------------------------------

//$normalSmallNews=substr(connectDB::query('select LongDescriptionNews from news where category=:category',array(':category'=>$normalNewsCategory))[0]['LongDescriptionNews'],0,80);

//$normalLongNews=connectDB::query('select LongDescriptionNews from news where category=:category',array(':category'=>$normalNewsCategory))[0];

//$normalTitleNews=connectDB::query('select titleNews from news where category=:category',array(':category'=>$normalNewsCategory))[0];

//$normalImageNews=connectDB::query('select imageNewsAddress from news where category=:category',array(':category'=>$normalNewsCategory))[0];

//$countNormalNews=DB::query('select count(smallDescriptionNews) from news where category=:category',array(':category'=>4));
//-----------------------------------------------------------------------------------------------------------------------------------

$successTitleRightNews=connectDB::query('select titleNews from news where category=:category',array(':category'=>$successNewsRightCategory))[0]['titleNews'];

$successSmallRightNews=substr(connectDB::query('select LongDescriptionNews from news where category=:category',array(':category'=>$successNewsRightCategory))[0]['LongDescriptionNews'],0,170);

$successLongRightNews=connectDB::query('select LongDescriptionNews from news where category=:category',array(':category'=>$successNewsRightCategory))[0]['LongDescriptionNews'];

$successImageRightNews=connectDB::query('select imageNewsAddress from news where category=:category',array(':category'=>$successNewsRightCategory))[0]['imageNewsAddress'];

//-----------------------------------------------------------------------------------------------------------------------------------

$successTitleCenterNews=connectDB::query('select titleNews from news where category=:category',array(':category'=>$successNewsCenterCategory))[0]['titleNews'];

$successSmallCenterNews=substr(connectDB::query('select LongDescriptionNews from news where category=:category',array(':category'=>$successNewsCenterCategory))[0]['LongDescriptionNews'],0,170);

$successLongCenterNews=connectDB::query('select LongDescriptionNews from news where category=:category',array(':category'=>$successNewsCenterCategory))[0]['LongDescriptionNews'];

$successImageCenterNews=connectDB::query('select imageNewsAddress from news where category=:category',array(':category'=>$successNewsCenterCategory))[0]['imageNewsAddress'];

//-------------------------------------------------------------------------------------------------------------------------------------

$successTitleLeftNews=connectDB::query('select titleNews from news where category=:category',array(':category'=>$successNewsLeftCategory))[0]['titleNews'];

$successSmallLeftNews=substr(connectDB::query('select LongDescriptionNews from news where category=:category',array(':category'=>$successNewsLeftCategory))[0]['LongDescriptionNews'],0,170);

$successLongLeftNews=connectDB::query('select LongDescriptionNews from news where category=:category',array(':category'=>$successNewsLeftCategory))[0]['LongDescriptionNews'];

$successImageLeftNews=connectDB::query('select imageNewsAddress from news where category=:category',array(':category'=>$successNewsLeftCategory))[0]['imageNewsAddress'];

//-------------------------------------------------------------------------------------------------------------------------------------

$sliderImage=connectDB::query('select sliderImage from news where category=:category',array(':category'=>$sliderCategory));

//-------------------------------------------------------------------------------------------------------------------------------------

$hadis=connectDB::query('select hadis from news where category=:category',array(':category'=>$hadisCategory))[0];

//-------------------------------------------------------------------------------------------------------------------------------------

$count_content=connectDB::query('select count(titleNews)from news',array())[0]['count(titleNews)'];

//--------------------------------------------------------------------------------------------------------------------------------------

$count_comment=connectDB::query('select count(id)from comment',array())[0]['count(id)'];

//--------------------------------------------------------------------------------------------------------------------------------------

