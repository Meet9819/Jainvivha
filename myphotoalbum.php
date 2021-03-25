
<?php error_reporting(0);
define(SERVER_ROOT, __DIR__);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?> 
<?php include"allcss.php"; ?>

</head>
<body>
<?php include"header.php"; ?>

<section class="breadcrumb-outer text-center">
<div class="container">
<div class="breadcrumb-content">
<h2 class="white">My Photo Album </h2>
<nav aria-label="breadcrumb">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">My Photo Album </li>
</ul>
</nav>
</div>
</div>
<div class="overlay"></div>
</section>

<section class="about-us">
<div class="container">

  
                         <?php
                         //DB details
                          $dbHost = 'localhost';
                          $dbUsername = 'root';
                          $dbPassword = '';
                          $dbName = 'jainvivha';

                          $studentid;
                          //Create connection and select DB
                          $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

                          if ($db->connect_error) {
                              die("Unable to connect database: " . $db->connect_error);
                          } 
                          $query = $db->query("SELECT * FROM customer WHERE userID = $studentid");
                          $custRow = $query->fetch_assoc();                                     
                          ?>  
                       <form action="profileupdatee.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                          
                           <div class="row">
                             <div class="detail-title">
                                 <h3 class="newcolor">Profile Pic</h3>
                             </div>
                            <div class="form-group">
                              <div class="col-sm-4"> 
                                  <img src="admin/media/customer/<?php echo $custRow['img']; ?>" height="200" width="150" />
                                  <input type="file" name="user_image" accept="image/*" />
                                  <p class="help-block">Image should be 500 x 1000 in pixels</p>
                              </div>

                               <div   class="form-group col-md-4 checkbox checkbox-primary">
                              <input   id="imgstatus" name="imgstatus" type="checkbox"   <?php if($custRow['imgstatus']){echo "checked";}?> value="1" >
                              <label for="imgstatus" > Profile Visible
                              </label> 
                            </div> 
                            </div>
                          </div>      

                          <div class="form-btn mar-top-20">
                                   <button type="submit" class="biz-btn biz-btn1 mar-bottom-20"  name="btn_save_updates" >Update Your Profile</button>                              
                          </div>
                                   
                        </form>


    <div class="col-lg-12 col-xs-12"> 
                <div class="box-content card white">
                    <h4 class="box-title">Add Multiple Images</h4>
                    <!-- /.box-title -->
                    <div class="card-content">
                      <div class="info-item">  
                        
                        <form action="customersubimageupload.php" method="post" enctype="multipart/form-data">
                          <div class="col-sm-6"> 
                             <input style="color: black" type="file" name="files[]" multiple >
                          </div>
                           <div class="col-sm-6" style="text-align: right;"> 
                             <input class="btn btn-danger" type="submit"  name="submit" value="Upload" /> 
                           </div>
                          <input type="hidden" name="idd" value="<?php echo $id = $studentid; ?> ">
                        </form>
                        <br><br>

                    </div>
                </div>
         </div>
    </div>
                
  <?php
  $connect = mysqli_connect("localhost","root","","jainvivha"); 
  $query = "SELECT * FROM customerimages where idd = $studentid";
  $result = mysqli_query($connect, $query);
  ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  <?php
   if(mysqli_num_rows($result) > 0)
   {
   ?>
    <div class="contact-info mar-bottom-30">
    <div class="row">
             <?php
              while($row = mysqli_fetch_array($result))
              {
             ?>
                        <div class="col-md-4 col-sm-12 col-xs-12">                      
                        <!-- <input type="checkbox" name="id[]" class="delete_customer" value="<?php echo $row["id"]; ?>" />  -->
                        <img height="300px" width="250px" src="admin/media/customer/<?php echo $row["file_name"]; ?>"> 
                        </div>
             <?php        
           }       
           ?>  

    </div>
    </div>
  <?php
   }
   ?> 
   <!--<div align="center">
    <button type="button" name="btn_delete" id="btn_delete" class="btn btn-danger">Delete</button>
   </div> -->

<script>
$(document).ready(function(){
 
 $('#btn_delete').click(function(){
  
  if(confirm("Are you sure you want to delete this?"))
  {
   var id = [];
   
   $(':checkbox:checked').each(function(i){
    id[i] = $(this).val();
   });
   
   if(id.length === 0) //tell you if the array is empty
   {
    alert("Please Select atleast one checkbox");
   }
   else
   {
    $.ajax({
     url:'ajaxdel/delete.php',
     method:'POST',
     data:{id:id},
     success:function()
     {
      for(var i=0; i<id.length; i++)
      {
       $('tr#'+id[i]+'').css('background-color', '#ccc');
       $('tr#'+id[i]+'').fadeOut('slow');
      }
     }
     
    });
   }
   
  }
  else
  {
   return false;
  }
 });
 
});
</script>

</div> 
</section>

<?php include"footer.php"; ?>
<div id="back-to-top">
<a href="#"></a>
</div>
<?php include"allscript.php"; ?>

</html>