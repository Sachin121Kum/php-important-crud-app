<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>


    <form action="" method="post">
    <div class="form-group">
    <label for="exampleInputPassword1">name</label>
    <input type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="Enter here">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Degree</label>
    <input type="text" name="degree" class="form-control" id="exampleInputPassword1" placeholder="Enter here">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name = "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter here">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Refer</label>
    <input type="text" name="refer" class="form-control" id="exampleInputPassword1" placeholder="Enter here">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Mobile</label>
    <input type="text" name="mobile" class="form-control" id="exampleInputPassword1" placeholder="Enter here">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">JobPost</label>
    <input type="text" name="jobpost" class="form-control" id="exampleInputPassword1" placeholder="Enter here">
  </div>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

      // Check Form Details for the next Page

      <div>
    <button type="check" name="check" class="btn btn-primary">Check Form</button>

      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

<?php
  
    //Connection creation
    include 'connection.php';  

  if(isset($_POST['submit']))
    {
            $name=$_POST['name'];
            $degree=$_POST['degree'];
            $email = $_POST['email'];
            $refer = $_POST['refer'];
            $mobile = $_POST['mobile'];
            $jobpost = $_POST['jobpost'];

        //Data Insert 
       $insertquery = "INSERT INTO registration(name,degree, email, refer, mobile, jobpost) values ('$name','$degree','$email','$refer','$mobile','$jobpost');

$res = mysqli_query($con, $insertquery);

if($res){

        echo "inserted";

}else {

    echo "Not Inserted";
 
}

}




?>