<?php
include("function.php");
$objIdcard = new idCard();

if (isset($_GET['status'])) {
    if ($_GET['status'] = 'edit') {
        $id = $_GET['id'];
        $editcard = $objIdcard->edit_data_by_id($id);
    }
}
if (isset($_POST['update'])) {
    $update_msg = $objIdcard->update_data($_POST);
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

                <?php if (isset($update_msg)) {
                    echo $update_msg;
                } ?>
                <input class="form-control mb-2" type="hidden" name="id" value="<?php echo $editcard['id']; ?>">
                <input class="form-control mb-2" type="text" name="u_user_name" value="<?php echo $editcard['user_name']; ?>">
                <input class="form-control mb-2" type="email" name="u_email" value="<?php echo $editcard['email']; ?>">
                <input class="form-control mb-2" type="tel" name="u_number" value="<?php echo $editcard['number']; ?>">
                <input type="file" class="form-control mb-3" name="u_img_name">
                <input class="form-control bg-warning" type="submit" name='update' value="Update Information">

            </form>
        </div>
        <div class="row mt-5">
            <div class="col-4"></div>
            
            <div class="col-4"></div>
            <div class="col-4 d-flex justify-content-end ">
                <a class=" btn btn-secondary" href="index.php">Back</a>
            </div>
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