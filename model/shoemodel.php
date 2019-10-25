<?php
// bogus database for shoes



// use var dump to check data types
//var_dump(goldBased(true));

//goldBased($myGold)


// returns all data
function allData() {
    include "database.php";
  return $myShoes;
}


// get entries based on brand
function brandBased($myBrand){
  include "database.php";

  $myData=[];

  foreach ($myShoes as $shoe) {

    if($shoe["brand"]==$myBrand){
      array_push($myData, $shoe);
    }

  }

  return $myData;

}


// get entries based on golden status
function goldBased($myGold){
  include "database.php";

  $myData=[];

  foreach ($myShoes as $shoe) {

    if($shoe["golden"]==$myGold){
      array_push($myData, $shoe);
    }

  }

  return $myData;

}



 ?>
