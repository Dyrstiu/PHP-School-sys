<?php
 if (isset($_POST['login'])) {
    # code...
    //capture the form data
    $email = $_POST['email'];
    $password = $_POST['password'];


    //connect
    require('dbconn.php');
    //sql
    $sql = "SELECT * FROM students WHERE email = ?";

    //use bind
    //prepare the statement
    //bind

    if ($stmt = mysqli_prepare($conn,$sql)) {
        # code...
        //bind
        mysqli_stmt_bind_param($stmt,"s",$param_email);
        $param_email = $email;
        //$param_password = $password;

        //execute the query
        mysqli_stmt_execute($stmt);

        //get results
        $result = mysqli_stmt_get_result($stmt);
        echo "testing 1";

        if ($result) {
            echo " result[]";
        # code...
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $record = mysqli_fetch_assoc($result);
            # code...
            echo" result[]";
            //verify password
            //function password_verify
          
            $status = password_verify($password, $record['password']);
            echo " .$password";
            if ($status) {
                # code...
                echo "Successfully Logined In.Welcome ".$record['firstname'];
                header('location:index.php');

                //store the name of logined person
                //sessions
                session_start();
                $_SESSION['name']=$record['firstname'];
                $_SESSION['id'] = $record['id'];
                $_SESSION['role'] = $record['role'];

            }else{
                echo "<h4 style='color:red'>Invalid email or password.Try again</h4>";
            }
            
            
        }else{
            echo "<h4 style='color:red'>Invalid email or password.Try again</h4>";
        }

        }else{
            echo "Something is wrong ".mysqli_error($conn);
        }

    }else{
        echo "Something is wrong ".mysqli_error($conn);
    }











}