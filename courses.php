<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css"rel="stylesheet"/>
    <link rel="shortcut icon" href="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse3.mm.bing.net%2Fth%3Fid%3DOIP.aNF6v2dWVTXkMalUZiWN_wAAAA%26pid%3DApi&f=1" type="image/x-icon">
    <title>Machakos School   |  Add courses </title>
</head>
<body>
<?php require ('nav.php'); ?>
  

  <div class="container " style="margin-top: 60px;"> 
      <div class=" row" >
           <div class=" col-sm-4" style="margin-right: 60px;">
               <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.9TOba-8WdNj56hqjbT7cDQHaFj%26pid%3DApi&f=1" alt="">
           </div>
           <div class="col-sm-6"  style="margin-left: 60px;">
            <form method="POST" action="">
                      <!-- Name input -->
                <div class="form-outline mb-4">
                    <input name="coursename" type="text" id="form5Example1" class="form-control"  required/>
                    <label class="form-label" for="form5Example1">Course Name</label>
                </div>
                <div class="form-outline mb-4">
                    <input name="coursecode" type="text" id="form5Example1" class="form-control" required />
                    <label class="form-label" for="form5Example1">Course Code</label>
                </div>

                     <!-- Email input -->
                <div class="form-outline mb-4">
                    <input name="teachersname" type="text" id="form5Example2" class="form-control"  required/>
                    <label class="form-label" for="form5Example2">Teachers Name</label>
                </div>

                      <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                         <input
                                class="form-check-input me-2"
                                type="checkbox"
                                value=""
                                id="form5Example3"
                                checked
                         />
                    <label class="form-check-label" for="form5Example3">
                      I have read and agree to the terms
                    </label>
                </div>

                 <!-- Submit button -->
                <button name="submit" type="submit" class="btn btn-primary btn-block mb-4">Add course</button>
                </form>
                <?php
                  if(isset($_POST['submit'])){
                      require('dbconn.php');
                      $coursename =$_POST['coursename'];
                      $coursecode =$_POST['coursecode'] ;
                      $teachersname=$_POST['teachersname'];

                      $query = "INSERT INTO `courses` ( `coursename`, `coursecode`, `teachersname`) VALUES ( ?,?,?) ";
                      //prepare statement
                      if (  $stmt = mysqli_prepare($conn, $query)){
                        mysqli_stmt_bind_param($stmt,"sss",$param_name,$param_code,$param_teacher);
                       
                        $param_name =$coursename;
                        $param_code =$coursecode;
                        $param_teacher =$teachersname;

                        
                        $sql = mysqli_stmt_execute($stmt);
                        if($sql){
                             echo'<div class="alert alert-success mb-0 alert-dismissible alert-absolute fade show " id="alertExample" role="alert" data-mdb-color="secondary">
                             <i class="fas fa-check me-2"></i>
                              Course has been added succesfully!
                             
                             <button type="button" class="btn-close ms-2" data-mdb-dismiss="alert" aria-label="Close"></button>
                           </div>';
                         }else{echo(mysqli_error($conn));}

                        mysqli_close($conn);



                     }
                      //execute 


                      
                    }
                   
                ?>
           </div>
           
      </div>
  </div>

  <script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"
> mdb.Alert.getInstance(document.getElementById("alertExample")).update({
  position: "bottom-right",
  delay: 2000,
  autohide: true,
  width: "300px",
  offset: 20,
  stacking: false,
  appendToBody: true,
});</script>
    
</body>
</html>