
 <!-- Start Html Coding belove  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Assignment !</title>

    <!-- Style -->
    <style>
        *{
            padding:0;
            margin:0;
            border-box:box-sizing;
        }
        .container,th , td  {
            border:1px solid black;
            border-collapse:collapse;
         }

.container{
    width: 550px;
    margin:20px auto;
    text-align:center;
    border-spacing:0;
    
    
}
th{
    background-color:rgba(200,200,200,0.8);
}
   th , td{
    padding:8px;
   }
   tr:nth-child(even){
    background-color:rgba(255,255,00,0.4);
    color:black;
    
   }
   .frm{
    padding:8px;
    width: 490px;
    margin:auto;
    display:flex;
    
   }
   .frm  .box1{
    margin-left :60px;
   }
   .frm .box2{
    margin-left :40px;
   }

   .frm .box3{
    margin-left :50px;
   }
   .frm .box4{
    margin-left :24px;
   }
   .frm .box5{
    margin-left :4px;
    width:160px;
   }
   .frm .box6{
    margin-left :49px;
   }
 
   .box1,.box2,.box3,.box4, .box5,.box6{
    width: 180px;
    margin-left:40px;
    outline:0;
    border:1px solid gray;
    border-radius:2px;
   }
   .sub{
    margin-left:190px;
    margin-top:4px;
    background-color:lightblue;
    padding:4px;
    border-radius:4px;
   }
  .sub:hover{
    background-color:gray;
    color:white;
  }
    </style>

</head>
<body>
   <fieldset class="frm">
    <legend>
        Fill Your Info....
    </legend>
<form method="post" >
    <label for="id">ID : </label>
      <input class="box1" type="number"min="1" name="id"><br>
    <label for="name">Name : </label>
    <input class="box2" type="text" name="name"><br>
    <label for="age">Age : </label>
    <input class="box3" type="number" min="1" name="age"><br>
    <label for="address">Address : </label>
    <input class="box4" type="text" name="address"><br>
    <label for="cname">Collage Name : </label>
    <input class="box5" type="text" name="cname"><br>
    <label for="city">City : </label>
    <input class="box6" type="text" name="city"><br>

    <input class="sub" type="submit" value="Submit"> <br>
    
    
</form>
</fieldset>

<!-- Start PHP coding -->
<?php

 if(empty($_POST["id"])){
echo "Sorry You can't Submit Empty Form !"."<br>";

 }else{

     $id = $_POST["id"];
     $name = $_POST["name"];
     $age= $_POST["age"];
     $address= $_POST["address"];
     $collagename= $_POST["cname"];
     $city= $_POST["city"];
     
 }
 

//  Table for insert data
echo "
<table class='container'>
<caption> Your Information </caption>
<tr>
<th>ID</th>
<th>Name</th>
<th>Age</th>
<th>Address</th>
<th>Collage Name </th>
<th>City  </th>
</tr>
 

<tr>
<td> $id</td>
<td> $name </td>
<td> $age </td>
 <td> $address</td>
 <td>$collagename</td>
<td>$city</>

</tr>

</table>
";
?>
</body>
</html>