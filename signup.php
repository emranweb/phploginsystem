<?php 
require "header.php";
?>
<div class="signup">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
            
            <h2 class="my-5">Sign Up</h2>
                <form action="signup.php" method="POST">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary btn-lg">Sign Up</button>
                </form>

            </div>
        </div>
    </div>
</div>


<?php 

 $name;
 $email ;
 $password;

 if(isset($_REQUEST["name"]) && !empty($_REQUEST["name"])){
     $name = $_REQUEST["name"];
 }

 if(isset($_REQUEST["email"]) && !empty($_REQUEST["email"])){
    $email = $_REQUEST["email"];
}

if(isset($_REQUEST["password"]) && !empty($_REQUEST["password"])){
    $password = $_REQUEST["password"];
}


if(isset($_REQUEST["submit"])){
    if(isEmptyCheck($name, $email, $password) ===true){
        header("location: ./signup?emptyinput");
    }
}

if(emailExist($email)===true){
   echo "hello world";
}





function createUser($conn, $name, $email, $password){
  echo "Hell world";
};




//   if(emailInvalid($email)){

//   }

//   if(emailExist($email)){

//   }


function emailExist($conn, $email){
  $sql = "SELECT * FROM users WHERE email = ?;";
}




function isEmptyCheck($name, $email, $password){
    if(empty($name) || empty($email) || empty($password)){
        return true;
    }else{
        return false;
    }
}



?>




<?php 
require "footer.php";
?>