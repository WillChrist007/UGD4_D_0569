<?php 
    session_start(); 

    if(isset($_POST['submit'])){ 
        include('../db.php'); 

        $id = $_SESSION['user']['id']; 
        $name = $_POST['name']; 
        $phonenum = $_POST['phonenum']; 
        $email = $_POST['email'];  
        $job = $_POST['job'];  
        $membership = $_POST['membership']; 
        
        $query = mysqli_query($con, "UPDATE users SET name='$name', phonenum='$phonenum', email='$email', job='$job', membership='$membership' WHERE id='$id'") or die(mysqli_error($con)); 
        
        if($query){ 
            $user = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM users WHERE id = '$id'"));
            $_SESSION['user'] = $user;
            echo 
                '<script> 
                    alert("Edit Success"); window.location = "../page/profilePage.php" 
                </script>'; 
        }
        else{ 
            echo 
                '<script> 
                    alert("Edit Failed"); window.location = "../editProfilePage.php" 
                </script>'; 
        } 
    }
    else{ 
        echo 
            '<script> 
                alert("Edit Failed");
                window.history.back() 
            </script>'; 
    } 
?>