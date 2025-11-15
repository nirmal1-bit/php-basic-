<?php

if(isset($_POST['submit'])){
//valiarion
//_POST is supergolbal array
if(empty($_POST['name'])||empty($_POST['email'])||empty($_POST['age'])||empty($_POST['gender'])){
    echo "please fill all required fields.";
    exit;
}


// file upload
$upload_dir = "images/";
$file_name = $_FILES['profile']['name']; 
move_uploaded_file($_FILES['profile']['tmp_name'], "uploads/".$file_name);




    //display confirmation
    echo "Registeation sucessfull <br>";
    echo "Name: ".$_POST['name']."<br>";
     echo "Email: ".$_POST['email']."<br>";
 echo "Age: ".$_POST['age']."<br>";
 echo "Gender: ".$_POST['gender']."<br>";
echo "Hobbies: ".(isset($_POST['hobbies']) ? implode(", ", $_POST['hobbies']) : "None")."<br>";
echo "Country: ".$_POST['country']."<br>";
echo "Profile Picture: <img src='".$upload_dir.$file_name."' width='100'>";
}

?>