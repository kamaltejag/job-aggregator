<?php

include "includes/includes.php";

?>

<div class="container mt-5 rounded p-5 bg-white">
    <h2 class="text-info mb-3">Login</h2>
    <form method="POST">
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
      </div>
      <button type="submit" class="btn btn-primary" name="login">Login</button>
    </form>
    <p class="mt-3">Don't have an Account yet ? <a href="signup.php">Sign Up</a></p>
</div>        
    
<?php

include "html/footer.php";

?>
