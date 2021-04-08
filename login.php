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
    <title>Machakos School  | Login </title>
</head>
<body>
 <center>
    <div class="conatiner" style="margin-top: 70px;" >
        <div class="row ">
            <div class="col-sm-4">
                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.HRQ8J1J4-zMxCEwi4vZ4KAHaFH%26pid%3DApi&f=1" alt="">
            </div>
            <div class="col-sm-7">
            <div class="card text-center " style="margin-left: 30px;">
                <div class="card-body">
                  <h5 class="card-title">Login</h5>
                  <form method="POST" action="">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                      <input name="email" type="email" id="form1Example1" class="form-control" />
                      <label class="form-label" for="form1Example1">Email address</label>
                    </div>
                  
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                      <input name="password" type="password" id="form1Example2" class="form-control" />
                      <label class="form-label" for="form1Example2">Password</label>
                    </div>
                  
                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                      <div class="col d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                            id="form1Example3"
                            checked
                          />
                          <label class="form-check-label" for="form1Example3"> Remember me </label>
                        </div>
                      </div>
                  
                      <div class="col">
                        <!-- Simple link -->
                        <a href="#!">Forgot password?</a>
                      </div>
                    </div>
                  
                    <!-- Submit button -->
                    <button  name="login" type="submit" class="btn btn-primary btn-block">Sign in</button>
                  </form>
                  

               </div>
               <div class="card-footer">Machakos School <?php  ?></div>
               </div>
               <?php require('loginlogic.php'); ?>
            </div>
        </div>


    </div>
</center>
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"
></script>
</body>
</html>