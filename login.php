<?php 
require "header.php";
?>
<div class="login">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="my-5">Login</h2>
                <form action="form.php" method="POST">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary btn-lg">login</button>
                </form>

            </div>
        </div>
    </div>
</div>

<?php 
require "footer.php";
?>