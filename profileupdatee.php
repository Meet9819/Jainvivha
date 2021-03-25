


    <?php 
       // error_reporting(0);
        session_start();
        require_once 'class.user.php';
        $user_home = new USER();
        if(!$user_home->is_logged_in())
        {
        }
        $stmt = $user_home->runQuery("SELECT * FROM customer WHERE userID=:uid");
        $stmt->execute(array(":uid"=>$_SESSION['userSession']));
        $row = $stmt->fetch(PDO::FETCH_ASSOC); 

        $con = mysqli_connect("localhost","root","","jainvivha") or die ('Unable to connect');
      

       if(isset($_SESSION['userSession']))
       {
        $username = $row['userName'];   
        $studentid = $row['userID'];    
        $userEmail = $row['userEmail'];   
        $mobile = $row['mobile'];  
       }
    ?>

 <?php  //error_reporting(0);  
    require_once 'admin/dbconfig.php';
    
    if(isset($_POST['btn_save_updates']))
    {        
        $stmt_edit = $DB_con->prepare('SELECT img FROM customer WHERE userID =:userID');
        $stmt_edit->execute(array(':userID'=>$studentid));
        $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
        extract($edit_row);

        $imgFile = $_FILES['user_image']['name'];
        $tmp_dir = $_FILES['user_image']['tmp_name'];
        $imgSize = $_FILES['user_image']['size'];
                    
        if($imgFile)
        {
            $upload_dir = 'admin/media/customer/'; // upload directory 
            $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
            $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
            $img = rand(1000,1000000).".".$imgExt;
            if(in_array($imgExt, $valid_extensions))
            {           
                if($imgSize < 5000000)
                {
                    unlink($upload_dir.$edit_row['img']);
                    move_uploaded_file($tmp_dir,$upload_dir.$img);
                }
                else
                {
                    $errMSG = "Sorry, your file is too large it should be less then 5MB";
                }
            }
            else
            {
                $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";        
            }   
        }
        else
        {
            // if no image selected the old image remain as it is.
            $img = $edit_row['img']; // old image from database
        }   

        $userID = $studentid;
        $imgstatus = $_POST['imgstatus']; 
       

  
        // if no error occured, continue ....
        if(!isset($errMSG))
        {
            $stmt = $DB_con->prepare('UPDATE customer SET img=:img,imgstatus =:imgstatus

                 WHERE userID=:userID');
           
            $stmt->bindParam(':img',$img);
            $stmt->bindParam(':imgstatus',$imgstatus);
 



            $stmt->bindParam(':userID',$userID);

            if($stmt->execute()){
                ?>
                <script>
             alert('Successfully Updated ...');
            window.location.href='myphotoalbum.php';
                </script>
                <?php
            }
            else{
                $errMSGg = "Sorry Data Could Not Updated !";
            }
        }
        
                        
    }
    
?>