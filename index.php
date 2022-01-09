<?php
  include("function.php");
  $objIdcard = new idCard();

  if(isset($_POST['submit'])){
   $return_msg = $objIdcard->add_data($_POST);

  }
    $info = $objIdcard->display_data();

  if(isset($_GET['status'])){
    if($_GET['status']='delete'){
      $delete_id=$_GET['id'];
      $delete_msg = $objIdcard->delete_data($delete_id);
    }
  }



?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <title>FormWithImageField</title>
  </head>
  <body>
      <div class="container">
        <h1 class="text-center m-3 p-5 bg-dark"><a style="text-decoration: none; color:mediumslateblue; font-family: Georgia, 'Times New Roman', Times, serif;" href="index.php">Information Field</a></h1>
         
        <div class="p-5 shadow">
          <form class="form" action="" method="post" enctype="multipart/form-data">
     
          <h4 class="text-success fs-5"><?php if(isset($return_msg)){echo $return_msg;}?></h4>
          <h4 class="text-danger fs-5"><?php if(isset($delete_msg)){echo $delete_msg;}?></h4>
              <input class="form-control mb-2" type="text" name="user_name" placeholder="User Name">
              <input class="form-control mb-2" type="email" name="email" placeholder="Email Address">
              <input class="form-control mb-2" type="tel" name="number" placeholder="Number">
              <input type="file" class="form-control mb-3" name="img_name">
              <input class="form-control bg-warning" type="submit" name='submit' value="Add Information">
      
            </form>
        </div>
        
        <div class="my-3 p-2 shadow">
            <table class="table table-responsive">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th >User Name</th>
                    <th >Email Address</th>
                    <th >Number</th>
                    <th >Image</th>
                    <th >Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while($show=mysqli_fetch_assoc($info)) { ?>
                  <tr>
                    <th><?php echo $show['id'];?></th>
                    <td><?php echo $show['user_name'];?></td>
                    <td><?php echo $show['email'];?></td>
                    <td><?php echo $show['number'];?></td>
                    <td><img style="height:50px;" src="upload/<?php echo $show['img_name'];?>" alt=""></td>
                    <td>
                      <a class=" btn btn-primary btn-sm" href="idcard.php?status=show&&id=<?php echo $show['id'];?>">View Card</a>
                      <a class=" btn btn-success btn-sm" href="edit.php?status=edit&&id=<?php echo $show['id'];?>">Card Edit</a>
                      <a class="btn btn-danger btn-sm" href="?status=delete&&id=<?php echo $show['id'];?>">Delete</a>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody> 
              </table>



        </div>

      </div>

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>