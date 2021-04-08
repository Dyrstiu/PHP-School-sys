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
    <title>Machakos School  |  Register</title>
</head>
<body style="background: url('https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.explicit.bing.net%2Fth%3Fid%3DOIF.Eeelm9bOp2aW28X%252fT874EQ%26pid%3DApi&f=1');">
<div class="card  " style="margin-top: 100px; margin-left:80px;margin-right:80px ;">
  <div class="card-body">
  <form method="POST" action="">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input  name="firstname" type="text" id="form3Example1" class="form-control" />
        <label class="form-label" for="form3Example1" >First name</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input name="lastname" type="text" id="form3Example2" class="form-control" />
        <label class="form-label" for="form3Example2">Last name</label>
      </div>
    </div>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input name="email" type="email" id="form3Example3" class="form-control" />
    <label class="form-label" for="form3Example3">Email address</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input name="password" type="password" id="form3Example4" class="form-control" />
    <label class="form-label" for="form3Example4">Password</label>
  </div>

  <!-- Checkbox -->
  <div class="form-check d-flex justify-content-center mb-4">
    <input
      class="form-check-input me-2"
      type="checkbox"
      value=""
      id="form2Example3"
      checked
    />
    <label class="form-check-label" for="form2Example3">
      Subscribe to our newsletter
    </label>
  </div>

  <!-- Submit button -->
  <button name="register" type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>

  <!-- Register buttons -->
  
  </form>
  <?php 
    if(isset($_POST['register'])){
      $firstname =$_POST['firstname'];
      $lastname =$_POST['lastname'];
      $email =$_POST['email'];
      $password =$_POST['password'];

      //require connection file
      require('dbconn.php');
      //hash password 
      $passwordhash = password_hash($password,PASSWORD_DEFAULT);
      //create  query
      $query = "INSERT INTO `students` (`firstname`, `lastname`, `email`, `password`) VALUES ( '$firstname', '$lastname',' $email', '$passwordhash')";
      
      $sql = mysqli_query($conn,$query) ;
      if($sql){
        echo"Registered succesfully";
      }else{echo(mysqli_error($conn));}


    }
   
  ?>

  </div>
</div>
</body>
</html>