<?php
include('connect.class.php');

// ------------------------ NEW PHOTO
$btn_new_photo = $_POST['btn_new_photo'];
/*
$new_photo = $_FILES['name_photos']['name'];
$temporario_new_photo = $_FILES['name_photos']['tmp_name'];
$diretorio_new_photo = "photos/".$new_photo;
move_uploaded_file($temporario_new_photo, $diretorio_new_photo);

if(isset($btn_new_photo)){
  $insert_new_photo = mysqli_query($link, "INSERT INTO photos(name_photos)VALUES('$diretorio_new_photo')");
  if($insert_new_photo){
    //header("location: ok-new-photo.php");
    echo "<h1>foi, $diretorio_new_photo</h1>";
  }else{
    echo "<h1>Erro</h1>";
  }
}*/


if(isset($btn_new_photo)){
  foreach($_FILES['name1_photos']['tmp_name'] as $key1 => $tmp_name1 ){
   $file_name1 = $key.$_FILES['name1_photos']['name'][$key1];
   $file_size1 =$_FILES['name1_photos']['size'][$key1];
   $file_tmp1 =$_FILES['name1_photos']['tmp_name'][$key1];	

   $desired_dir1="photos";
   $dir1 = "$desired_dir1/".$file_name1;
   if(is_dir("$desired_dir1/".$file_name1)==false){
           move_uploaded_file($file_tmp1,$dir1);
   } // IF

   } // FOR EACH 1
   foreach($_FILES['name2_photos']['tmp_name'] as $key2 => $tmp_name2 ){
       $file_name2 = $key.$_FILES['name2_photos']['name'][$key2];
       $file_size2 =$_FILES['name2_photos']['size'][$key2];
       $file_tmp2 =$_FILES['name2_photos']['tmp_name'][$key2];	

       $desired_dir2="photos";
       $dir2 = "$desired_dir2/".$file_name2;
       if(is_dir("$desired_dir2/".$file_name2)==false){
               move_uploaded_file($file_tmp2,$dir2);
       } // IF
   } // FOR EACH

   foreach($_FILES['name3_photos']['tmp_name'] as $key3 => $tmp_name3 ){
       $file_name3 = $key.$_FILES['name3_photos']['name'][$key3];
       $file_size3 =$_FILES['name3_photos']['size'][$key3];
       $file_tmp3 =$_FILES['name3_photos']['tmp_name'][$key3];	

       $desired_dir3="photos";
       $dir3 = "$desired_dir3/".$file_name3;
       if(is_dir("$desired_dir3/".$file_name3)==false){
               move_uploaded_file($file_tmp3,$dir3);
       } // IF
   } // FOR EACH

   foreach($_FILES['name4_photos']['tmp_name'] as $key4 => $tmp_name4 ){
       $file_name4 = $key.$_FILES['name4_photos']['name'][$key4];
       $file_size4 =$_FILES['name4_photos']['size'][$key4];
       $file_tmp4 =$_FILES['name4_photos']['tmp_name'][$key4];	

       $desired_dir4="photos";
       $dir4 = "$desired_dir4/".$file_name4;
       if(is_dir("$desired_dir4/".$file_name4)==false){
               move_uploaded_file($file_tmp4,$dir4);
       } // IF
   } // FOR EACH

   foreach($_FILES['name5_photos']['tmp_name'] as $key5 => $tmp_name5 ){
    $file_name5 = $key.$_FILES['name5_photos']['name'][$key5];
    $file_size5 =$_FILES['name5_photos']['size'][$key5];
    $file_tmp5 =$_FILES['name5_photos']['tmp_name'][$key5];	

    $desired_dir5="photos";
    $dir5 = "$desired_dir5/".$file_name5;
    if(is_dir("$desired_dir5/".$file_name5)==false){
            move_uploaded_file($file_tmp5,$dir5);
    } // IF
} // FOR EACH

   $insert_new_photo = "INSERT INTO photos(name_photos)VALUES('$dir1'),('$dir2'),('$dir3'),('$dir4'),('$dir5')";

   if (mysqli_multi_query($link, $insert_new_photo)) {
       header('location: ok-photo.php');
   }else{echo "Erro";}
}

// GET PHOTO
$get_photo = mysqli_query($link, "SELECT * FROM photos ORDER BY id_photos DESC LIMIT 4");
$get_photos = mysqli_query($link, "SELECT * FROM photos ORDER BY id_photos DESC");

          
          


?>
