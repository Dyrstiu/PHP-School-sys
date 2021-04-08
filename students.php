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
    <title>Machakos School  |  Courses  </title>
</head>
<body>
<?php
  require('nav.php');
  require('dbconn.php');
  $query= "SELECT  `id`,`coursename`, `coursecode`, `teachersname` FROM `courses` WHERE 1";
  $results=mysqli_query($conn,$query);
  if(mysqli_num_rows($results)>0 ){
    //output data from each row 
    echo"<table>
            <th> ID </th>
            <th> Course Name </th> 
            <th> Course  Code </th>
            <th> Teacher's Name </th>
        
    ";
    while($row = mysqli_fetch_assoc($results)){
      $id= $row["id"] ;
      $course=$row["coursename"];
      $code= $row["coursecode"];
      $Teacher=$row["teachersname"];
    echo "
         
           
           <tr>
               <td>  $id  </td>
               <td>   $course  </td>
               <td> $code </td>
               <td> $Teacher</td>
           </tr>

        
        ";
     
    }
    echo"</table>";
  }
  mysqli_close($conn);
  ?>
  <script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"
></script>
</body>
</html>