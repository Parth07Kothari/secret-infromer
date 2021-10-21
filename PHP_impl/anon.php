<?php
    // session_start();
    include('config.php');
    // if(isset($_POST['pnum']))
    // {
    // $con = mysqli_connect('localhost', 'root', '','kmm');
    // $pnum = $_POST['pnum'];
    // $pnum_hash = password_hash($pnum, PASSWORD_BCRYPT);
    // $mess = $_POST['fname']
    // $sql = "INSERT INTO `messages` (`Id`, `Number`, `messages`) VALUES ('0', '$pnum_hash', '$mess');"
    // $rs = mysqli_query($con, $sql);
    // }

    if(isset($_POST['send'])){

        $msg = $_POST['msg'];
        // $file = $_POST['file'];
        $phn = md5(strval($_POST['phn']));
        if(basename($_FILES["file"]["name"]) == null){
            $file_name = null;
            $sql = "INSERT INTO `messages`(`phone_no`, `messages`,`file`) VALUES ('$phn','$msg','$file_name')";
            $rs = mysqli_query($conn, $sql);

            if($rs){
                header('Location: delivered.php');
            }else{
                echo"Failed";
            }
        }else{
            $target_dir = "uploads/";
            $file_name = basename($_FILES["file"]["name"]);
            $target_file = $target_dir . basename($_FILES["file"]["name"]);
            $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                $sql = "INSERT INTO `messages`(`phone_no`, `messages`,`file`) VALUES ('$phn','$msg','$file_name')";
                $rs = mysqli_query($conn, $sql);

                if($rs){
                    header('Location: delivered.php');
                }else{
                    echo"Failed";
                }
                
            }else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

        
        
    }
?>