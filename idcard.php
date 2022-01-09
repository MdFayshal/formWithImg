<?php
  include("function.php");
  $objIdcard = new idCard();

  if(isset($_GET['status'])){
      if($_GET['status']='show'){
          $id = $_GET['id'];
         $card = $objIdcard->show_data_by_id($id);
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

  <title>Card</title>
</head>

<body class="container">
  <div class="pt-5 px-5 mx-5 mt-5 mb-3  d-flex justify-content-center ">
    <div class="card  shadow  " style="width: 18rem;">
    <?php while($show=mysqli_fetch_assoc($card)) { ?>
      <img src="upload/<?php echo $show['img_name'];?>" class="card-img-top" alt="Image">
      <div class="card-body">
        <h5 class="card-title"><?php echo $show['user_name']?></h5>
        <p class="card-text">Web Developer</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Email : <?php echo $show['email']?></li>
        <li class="list-group-item">ID: <?php echo $show['number']?></li>
        <li class="list-group-item">SMFDEv Org</li>
      </ul>
      <?php } ?>
    </div>
  </div>
  <div class="row">
    <div class="col-4"></div>
    <div class="col-4 d-flex justify-content-end ">
  <a class=" btn btn-secondary" href="index.php">Back</a>
  </div>
    <div class="col-4"></div>
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