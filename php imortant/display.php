<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Display Page</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
                         <div class="table-reponsive">

         <body>
          // Data Fetch Code database to display
  <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>subject</th>
                    <th>message</th>
                    <th colspan="2">operation</th>
          </tr>
      </thead>
          <tbody>
         <?php
        include 'conn.php';
        // data fetch for display code
        $selectquery = " select * from details "; 
        $query = mysqli_query($con, $selectquery );
        $num = mysqli_num_rows($query);
        // $res = mysqli_fetch_array($query);
        //single data fetch 
        //echo $res[2];

        // Showing data in display
        while($res = mysqli_fetch_array($query)){
    ?>
     <tr>
            <td> <?php echo $res['id']; ?>  </td>
            <td><?php echo $res['name']; ?>  </td>
            <td><?php echo $res['email']; ?>  </td>
            <td><?php echo $res['subject']; ?>  </td>
            <td><?php echo $res['your_message']; ?>  </td>

            //Update Operation

            <td> <a href="updates.php?id=<?php echo $res['id']; ?> " data-toggle="tooltip" data-placement="bottom" title="UPDATE">UPDATE<i class="fa fa-edit" aria-hidden="true"></i></a></td>


            //Delete Operation
            <td> <a href="#" data-toggle="tooltip" data-placement="bottom" title="DELETE">DELETE <i class="fa fa-trash" aria-hidden="true"></i></a></td>
    </tr>
            <?php
        }

?>
 </tbody>
         </table>
                 </div>
                      </div>                    
                            </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

  </body>
</html>

