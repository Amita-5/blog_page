<?php
include("db_connect.php");

$sql = "SELECT * FROM `blogs`";
$result = $conn->query($sql);
$resul = $conn->query($sql);

$s= "SELECT * FROM `blog_post`";
$results = $conn->query($s);

if(isset($_POST["author"])){
  $author=$_POST["author"];
  $blog_content=$_POST["blog_content"];
  // image..

  $blog_image=$_FILES['blog_image']['name'];
  $tmp_name = $_FILES['blog_image']['tmp_name'];

  $img_ex = pathinfo($blog_image, PATHINFO_EXTENSION);
	$img_ex_lc = strtolower($img_ex);
	$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
	$img_upload_path = './image/'.$new_img_name;
	move_uploaded_file($tmp_name, $img_upload_path);


  if(isset($_POST["blog_name"])){
    $uploaded_by=$_POST["uploaded_by"];
    $blog_name=$_POST["blog_name"];
    $speaker_bio=$_POST["speaker_bio"];
    $country=$_POST["country"];


    $sql="INSERT INTO blogs( blog_name,speaker_bio, author, uploaded_by,country)
    VALUES ('$blog_name','$speaker_bio','$author','$uploaded_by','$country')";
   $sql1 ="INSERT INTO blog_post(blog_image,blog_content, author) VALUES ('$new_img_name','$blog_content','$author' )";
   
  
  }
  else{
    $id=$_POST["id"];
    $sql = "UPDATE blogs SET author='$author' WHERE id='$id'";
    $sql1="UPDATE blog_post SET blog_image='$new_img_name',blog_content='$blog_content' WHERE id='$id'";
 }
  // $sql="DELETE FROM blogs WHERE id='3'";
  if(mysqli_query($conn,$sql)){

    if(mysqli_query($conn,$sql1)){
      header("Location:index.php");
      exit();
    }

      echo "done!";
  }else{
    echo "try again";
  }

}
?>