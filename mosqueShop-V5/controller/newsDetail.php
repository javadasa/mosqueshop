<?php
require_once ('../model/DB.php');

$newDetailContent=null;
$newDetailTitle=null;
$newImage=null;

if(isset($_GET['k'])){
    if ($_GET['k']=='tnrld'){
        $newDetailContent=connectDB::query('select LongDescriptionNews from news where category=:category',array(':category'=>1));
        $newDetailTitle=connectDB::query('select titleNews from news where category=:category',array(':category'=>1));
        $newImage=connectDB::query('select imageNewsAddress from news where category=:category',array(':category'=>1));
    }
    else if ($_GET['k']=='tncld'){
        $newDetailContent=connectDB::query('select LongDescriptionNews from news where category=:category',array(':category'=>2));
        $newDetailTitle=connectDB::query('select titleNews from news where category=:category',array(':category'=>2));
        $newImage=connectDB::query('select imageNewsAddress from news where category=:category',array(':category'=>2));
    }
    else if ($_GET['k']=='tnlld'){
        $newDetailContent=connectDB::query('select LongDescriptionNews from news where category=:category',array(':category'=>3));
        $newDetailTitle=connectDB::query('select titleNews from news where category=:category',array(':category'=>3));
        $newImage=connectDB::query('select imageNewsAddress from news where category=:category',array(':category'=>3));
    }
    else if($_GET['k']=='slrn'){
        $newDetailContent=connectDB::query('select LongDescriptionNews from news where category=:category',array(':category'=>6));
        $newDetailTitle=connectDB::query('select titleNews from news where category=:category',array(':category'=>6));
        $newImage=connectDB::query('select imageNewsAddress from news where category=:category',array(':category'=>6));
    }
    else if ($_GET['k']=='slcn'){
        $newDetailContent=connectDB::query('select LongDescriptionNews from news where category=:category',array(':category'=>7));
        $newDetailTitle=connectDB::query('select titleNews from news where category=:category',array(':category'=>7));
        $newImage=connectDB::query('select imageNewsAddress from news where category=:category',array(':category'=>7));
    }
    else if($_GET['k']=='slln'){
        $newDetailContent=connectDB::query('select LongDescriptionNews from news where category=:category',array(':category'=>8));
        $newDetailTitle=connectDB::query('select titleNews from news where category=:category',array(':category'=>8));
        $newImage=connectDB::query('select imageNewsAddress from news where category=:category',array(':category'=>8));
    }
  //  else if ($_GET['k']=='nn'){
    //    $newDetailContent=connectDB::query('select LongDescriptionNews from news where category=:category',array(':category'=>5))[0]['LongDescriptionNews'];
    //    $newDetailTitle=connectDB::query('select smallDescriptionNews from news where category=:category',array(':category'=>5))[0]['smallDescriptionNews'];
    //    $newImage=connectDB::query('select imageNewsAddress from news where category=:category',array(':category'=>5))[0]['imageNewsAddress'];
    //}
    header('Location:../view/newsDetail.php');
}
?>
