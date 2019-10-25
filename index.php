 <!DOCTYPE html>
 <html lang="en">

<head>
     <meta charset="UTF-8">
     <title>golden shoe</title>
     <meta name="description" content="DESCRIPTION">
    <link rel="stylesheet" href="PATH">

     <!--[if lt IE 9]>
       <script src = "http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <![endif]-->
 </head>

 <body>
<h1>The golden shoe</h1>


<form  action="" method="post">
  <div>
  <label for="select-brand">Select golden option:</label>
 <select name="selectGolden" id="select_golden">
  <option value="All">All</option>
   <option value="golden">golden</option>
   <option value="not_golden">not golden</option>
 </select>
</div>

<div>
 <label for="select-brand">Select brand:</label>
<select name="selectBrand" id="select_brand">
  <option value="All">All</option>
  <option value="addidas">Addidas</option>
  <option value="nike">Nike</option>
  <option value="reebok">Reebok</option>
</select>
<div>

  <input type="submit" name="submit" value="Søg" />
</form>


<?php
// include the model code to acces the functions
include "model/shoemodel.php";


// check for post
if($_SERVER['REQUEST_METHOD'] == 'POST')
{

// get post result
 
$myShoes=brandBased($_POST["selectBrand"]);



//var_dump($myShoes);

//view
echo "<section>";

foreach ($myShoes as $shoe) {

    $shoeImg=$shoe["image"];
    $shoeBrand=$shoe["brand"];
    $stature=$shoe["golden"];
    $shoeSize=$shoe["size"];

  if ($_POST["selectGolden"]=="All") {
      echo "<article>";
      echo '<img src="img/'.$shoeImg.'">';
      echo "<h2> Mærke: ".$shoeBrand."</h2>";
      if ($stature == true) {
        echo "<p> Golden </p>";
      } 
      else{
      echo " ";
      }
      echo "<p> Størrelse: ".$shoeSize."</p>";
      echo "</article>";
  }

  else if ($_POST["selectGolden"]=="golden") {
    if ($stature==true) {
      
      echo "<article>";
      echo '<img src="img/'.$shoeImg.'">';
      echo "<h2> Mærke: ".$shoeBrand."</h2>";
      if ($stature == true) {
        echo "<p> Golden </p>";
      } 
      else{
      echo " ";
      }
      echo "<p> Størrelse: ".$shoeSize."</p>";
      echo "</article>";
}
    }

  
  else
  {
    if ($stature==false) {
      echo "<article>";
      echo '<img src="img/'.$shoeImg.'">';
      echo "<h2> Mærke: ".$shoeBrand."</h2>";
      if ($stature == true) {
        echo "<p> Golden </p>";
      } 
      else{
      echo " ";
      }
      echo "<p> Størrelse: ".$shoeSize."</p>";
      echo "</article>";
    }
  }
 

  
echo "</section>";
}
}


?>



 </body>

 </html>
