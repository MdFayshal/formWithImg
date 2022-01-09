<?php

 class idCard{

    private $conn;

    public function __construct()
    {
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $dbname = 'imgform';
        $this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

        if(!$this->conn){
            die('Database Connection Error !!');
        }
    }
    public function add_data($data){

        $user = $data['user_name'];
        $email = $data['email'];
        $number = $data['number'];
        $img = $_FILES['img_name']['name'];
        $tmp_name= $_FILES['img_name']['tmp_name'];
       

       $query = "INSERT INTO information(user_name,email,number,img_name) VALUES ('$user', ' $email', $number, '$img')";
    
       if(mysqli_query($this->conn,$query)){
           move_uploaded_file($tmp_name,'upload/'.$img);
            return "Information Added successfully . . .";
        }


    }
    public function display_data(){
        $query = "SELECT * FROM information";
        if(mysqli_query($this->conn,$query)){
            $returndata = mysqli_query($this->conn,$query);

            return $returndata;
        }
    }
    public function show_data_by_id($id){
        $query = "SELECT * FROM information WHERE id=$id";
        if(mysqli_query($this->conn,$query)){
            $returndata = mysqli_query($this->conn,$query);
            return $returndata;
        }

    }
    public function edit_data_by_id($id){
        $query = "SELECT * FROM information WHERE id=$id";
        if(mysqli_query($this->conn,$query)){
            $returndata = mysqli_query($this->conn,$query);
            $editdata = mysqli_fetch_assoc($returndata);
            return $editdata;
        }

    }
    public function update_data($update){ 
        $id=$update['id'];
        $name=$update['u_user_name'];
        $email=$update['u_email'];
        $number=$update['u_number'];
        $img=$_FILES['u_img_name']['name'];
        $tmp_name=$_FILES['u_img_name']['tmp_name'];

        $query = "UPDATE information SET user_name='$name',email='$email',number=$number,img_name='$img' WHERE id=$id";

        if(mysqli_query($this->conn, $query)){
            move_uploaded_file($tmp_name,'upload/'.$img);
            return "Data Updated Successfully. . .";
        }


    }

    public function delete_data($id){
        $catch_img= "SELECT * FROM information WHERE id=$id";
        $img_selected= mysqli_query($this->conn, $catch_img);
        $delete_img = mysqli_fetch_assoc($img_selected);
        $delete = $delete_img['img_name'];
        $query = "DELETE FROM information WHERE id =$id";
        if(mysqli_query($this->conn, $query)){
            unlink('upload/'.$delete);
            return "Data Deleted Successfully. . .";
        }
    }


 }


?>