<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Country;
use App\City;
use App\State;

class HomeController extends Controller
{
   public function index()
   {
   	$country=Country::orderBy('country_id')->get();
   	return view('frontend.index', compact('country'));
   }

   public function view($country_id)
   {
       $country=Country::where('country_id','=',$country_id)->first();
   //$state=State::where('country_id','=',$country_id)->get();

   return view('frontend.view', compact('country'));
}

public function  city($country_id)
{
   $city=City::where('country_id','=','$country_id')->get();
   return view('frontend.city',compact('city'));
}

public function count(){
   for($i=0; $i<=100; $i++){
      echo $i;
      echo "<br>";
   }
   

}
public function even()
{
   for($i=0; $i<=100; $i++)
   {
      if($i%2==0)
      {

echo $i;
   echo "<br>";
      }
 
     
   }
}

public function oud(){
   for($i=0; $i<=100; $i++){
      if($i%2==1){
         echo $i;
         echo "<br>";
      }
   }
}

public function swap(){
   /* $a=10;
   $b=5;
   $c=$a;
   $a=$b;
   $b=$c;
   echo $a;
   echo "<br>";
   echo $b; */

   $a=10;
   $b=5;
   $a=$a+$b;
   $b=$a-$b;
   $a=$a-$b;
   echo $a;
   echo "<br>";
   echo $b;
   echo "<br>";
    
}

public function pelindrome(){
   $a=1;
   $b=2;
  

   echo $a;
   echo "<br>";
   echo $b;

   for($i=0; $i<10; $i++){
      $c=$a+$b;
      $a=$b;
      $b=$c;
         
 echo "<br>";
   echo $c;
 
   }
  
  
}

public function arraysum(){
   $arr=array(1,2,4,6,7);
   $sum=0;
   for($i=0; $i<count($arr); $i++){
      $sum=$sum+$arr[$i];

      

   }
   echo $sum;
}

public function sumcombine(){
   $arr=array(1,2,3,4,5,6,7,8);
   $sum=0;
   for($i=0; $i<count($arr); $i++){
      if($arr[$i]%2==0){
         $sum=$sum+$arr[$i];
      }
   }
   echo $sum;
}

public function prime(){
  $arr=array();
  for ($i=2; $i<=10; $i++){
   $c=0;
   for($j=2; $j<$i-1; $j++){
      
      if($i%$j==0){
         $c++;
      }
   }
   if($c==0){
      $arr[]=$i;
   }
  }
  return $arr;
   }

   public function table(){
      $a=99;
      if($a<=33){
         echo "fail";
      }

      if ($a>33 && $a<=50) {
         echo "third";
      }

      if ($a>50 && $a<=65) {
         echo "first";
      }

      if ($a>65 && $a<=100) {
         echo "marit";
      }
      else{
         echo "rong entry";
      }

   }

   public function per(){
      $arr=array(1,1,2,2,3,3);
      $a=2;
      $b=2;
      $c=2;
      
   }



 
  
 

      







  
}
