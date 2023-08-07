<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php
function capitalizeFirstLetter($str) {
    return mb_convert_case($str, MB_CASE_TITLE, "UTF-8");
}

echo capitalizeFirstLetter("émile");
echo '<br>';

echo date('Y');
echo '<br>';

echo date('Y-m-d H:i:s');
echo '<br>';

function sum($a, $b){
    if (!is_numeric($a) || !is_numeric($b)){
        return "Error this is not a number dumbass";
    }else {
    return $a + $b;
    }
}
echo sum(5,8);
echo '<br>';
echo sum(5,"b");
echo '<br>';

function abbreviate($string){
    $abbreviation = "";
    $string = ucwords($string);
    $words = explode(" ", "$string");
      foreach($words as $word){
          $abbreviation .= $word[0];
      }
   return $abbreviation; 
}
echo abbreviate("The world is mine");
?>