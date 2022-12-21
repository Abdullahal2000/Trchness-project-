<?php

  /*
    Operators
    - Used To Perform Operations On Values.

    Array Operators
    - Deal With Arrays

    +     => Union
    ==    => Equal => Same Key And Value
    !=    => Not Equal
    <>    => Not Equal
    ===   => Identical => Same Key And Value, Same Order, Same Type
    !==   => Not Identical
  */

  $arr1 = [1 => "A", 2 => "B"];
  $arr2 = [3 => "C", 4 => "D"];
  $arr3 = $arr1 + $arr2;

  echo '<pre>';
  print_r($arr1 + $arr2);
  print_r($arr3);
  echo '</pre>';

  $arr4 = [1 => "10", 2 => "20"];
  $arr5 = [2 => 20, 1 => 10];

  var_dump($arr4 == $arr5); // True
  echo '<br>';
  var_dump($arr4 != $arr5); // False
  echo '<br>';
  var_dump($arr4 <> $arr5); // False
  echo '<br>';

  $arr6 = [1 => 100, 2 => 200];
  $arr7 = [1 => 100, 2 => 200];

  var_dump($arr6 === $arr7); // Give Me True


 //how to castomize the error message 
echo'<br>';
//   $age=12;
//   $a=@$age or die("varable is not found");
//   echo "valuse is: $a";
  
//   how to inclued another file into this one;
include("included file.php");

if("ahmed"== "dShmed"){
    echo "tes thats right";
}elseif ("ahmed"==="adgmr") {
    echo "yup";
}else
echo "no";
echo '<br>';
// if($_SERVER["REQUEST_METHOD"]==="POST"){
// echo $_POST['username'];
// echo $_POST['lang'];
// };

// if ($_SERVER['REQUEST_METHOD']=="POST") {
// if ($_POST['lang']=='ar') {

//     header("location: ar.php");
//     exit();

// } elseif ($_POST['lang']=='en') {

//     header("location: en.php");
//     exit();
// }

// }else {
//     echo 'sorry';
// }



//shorthand for if 

echo (10>5)?"good":"no";


#wheal

$no=2;
while($no<=7){
echo "$no <br>";
$no++;
}

echo "<br>";
#do wheal it prints the info then check the condition
do{
    echo "$no <br>";
    $no++;
}while($no<=7);

#forloop 
for($no=1; $no<=100;$no+=5){
echo "$no <br>";
} 


#loopforeach
// its the same is forloop but we use it mostally with arry
$counters=["Eg","se","em","ye"];
echo '<pre>';
print_r($counters);
echo '<br>';

foreach($counters as $contery){  //what is rrequired is an array and the value
    echo $contery ."<br>";
}


$counters_with_disconut=["Eg"=>10,"se"=>20,"em"=>30,"ye"=>50];
echo '<pre>';
print_r($counters_with_disconut);
echo '<br>';

foreach($counters_with_disconut as $contery =>$disount){
    echo "contery name is $contery and discont is:$disount <br>";
}

#break and continue 

foreach([1,2,3,4,5,7,8,9] as $rn){
    echo $rn;
    if($rn==4){
        break;
    }
}
echo '<br>';
foreach([1,2,3,4,5,7,8,9] as $rn){
    if($rn==4){
        continue;
        // here it means skip the current no whici is 4 and continue printing  after it;
    }
    echo $rn;
}


# we use inclued and require to inset ao imarge files into this file 
// include("filename.php");
// require("filename.php");


#functions void

function say_hello_to($someone){
    echo "hello Mr: $someone";
};

echo '<br>';

say_hello_to("ali");


#functions  non-void

function add($no1,$no2){
    $no3=$no1+$no2;
    return$no3;
}

 $result=add(1,3);
 echo '<br>';
 echo $result;

#we can add default values to the functions parameters
 function print_info($name,$addres,$phone,$gender,$is_student='yes i am a student')
 {
    echo " hello mr :$name you live in: $addres";
    echo " yoour no phone is:$phone and your gender is:$gender  and you are a $is_student";

 };
 print_info("DHEYA","INDO",9999,"male","no i am not a student");


 # in case if we want to make countless pramaters in function
//  here all the paramters which are given by the user well be saved in array and you need loop to acces them;
  function substruct (...$no){
    print_r($no);
   $result=0;
   foreach($no as $n):
    $result+=$n;
   endforeach;
   echo $result;
  }

  substruct(12,123,124,145,45);


  # function application and traning:
  function get_date($name,$countery="yemen",...$skills){
echo "hi mr $name <br> your caountry is :$countery <br>  you have got skils like:$skill";
foreach($skills as $sk):
    echo "<br>:$sk";
   endforeach;
  };
  get_date("dheya","","js","css","jave");



#if you need to pass a varable by refrance use & 
function multi(&$number){
    $number+=10;
    return $number;
};
echo '<br>';

$numberr=10;

echo multi($numberr);
echo '<br>';
echo "$numberr";


# if you to determent what datatype you want the function to return do it like this
// add the type after the pramaters
// function multi(&$number):float{
//     $number+=10;
//     return $number;
// };


// <!-- arrow function its a return type function  but and annonues and we replace 'function ' -->
// <!-- with  fn and we replace return with => -->



echo' <br>';

$say_hello =fn($somone)  => "hello$somone";

echo $say_hello("osame") ;


$name="Dheya";
echo "the first letter is:$name[0] <br>";

# sterlen ()  its a bi=uilt in function that gave you the number of letters in  a string

echo"the number of letters is:" . strlen($name); 

// we can use  lcfirst() to make the first letter in lower case and we can use ucfirst() to make the first letter in uppercase
echo '<br>';
echo lcfirst("Dheya"). '<br>';
echo ucfirst("dheya"). '<br>';

// we can use  stainglower() to make the  string in lower case and we can use ucfirst() to make the dtring  in uppercase
echo '<br>';
echo strtolower("DHEYA"). '<br>';
echo strtoupper("dheya"). '<br>';


// we can use  ucwords() to make all first letters in each word in a sentance in upper case  string 
echo '<br>';
echo ucwords("dheya ali qasem"). '<br>';


// we can use  ucwords() to mmake doulicate  string 
echo '<br>';
echo str_repeat("dheya", 3). '<br>';



# we use emplose(seperator,[]) to tranform a list into string

$frinds=["ahmed","dheya","kheled","mohomed"];
echo '<br>';
echo implode("-",$frinds);


# we use explodw(seperator,string , optonal no of eleemnt in the arry you want e.i 3 or 2 ...) to tranform a string into list
echo '<br>';
$l=" hi it sme";

echo"<pre";
print_r(explode(" ",$l));
echo"<pre";


# we use shuffle to renodmize the string 

echo '<br>';
$l=" hi it sme";
echo str_shuffle($l);


# we use strrev to revers the string 

echo '<br>';
$l=" hi it sme";
echo strrev($l);


# we use trim(string, )to remove a space or any character you want .defualt is to remove space  but you can specifiy what you want to remove

echo '<br>';
$l="@my name is @";
echo trim($l,"@");

# we use chunk_dplit to split or string (string,no of splits , seperator)

echo '<br>';
$l="@my name is";
echo chunk_split($l,3,"#");




# we use str_split to split or string  and tranform it into array(string , optina =no of letters you want to be in one index )

echo '<br>';
$l="@my name is";
echo'<pre>';
print_r(str_split($l,3));
echo'<pre>';

# we use strip-tages to deactivate html teges 

echo '<br>';
echo"<h1>hi <b>whats <b>going on</h1>";
echo '<br>';
echo strip_tags("<h1>hi <b>whats </b>oing on</h1>");

# we use strpos(string,"serched value" , optinal starting index) to locate the the index of  the serched letter   if the letter exst so many time in the string its going to gave you the  index of the first thats found

echo '<br>';
echo strpos("hi how are you","a");
echo '<br>';

# we use strrpos(string,"serched value" , optinal starting index) to locate the the index of  the serched letter   if the letter exst so many time in the string its going to gave you the  index of the last thats found

echo '<br>';
echo strrpos("hi how are you a","a");
echo '<br>';


# we use substr(string,"serched value",optionsl  starting index ) to determin how many time a specific letter exist in the string
echo '<br>';
echo substr_count("hi how are you a","a");
echo '<br>';



?>



<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>support</title>
</head>
<body>
<form action="" method="POST">
    <input type="text" name="username">
    <select name="lang" id="">
        <option value="ar"> Arabic</option>
        <option value="en"> english</option>
        <option value="sp"> spenash</option>
        <option value="no"> non</option>
        <option value="se"> seomthingels</option>    
    </select>
    <input type="submit" value="GO">
</form>
</body>
</html> -->