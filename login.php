<?php

require_once 'configuration/configuration.php';

if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
    header('Location: index.php');
} else {
    $title = 'Login';
    $link = '<link rel="stylesheet" href="css/'.$template.'/login.css">';
    $body = '<h1>page login.php</h1>';
    $body .= '<form action="index.php" method="post">';
    $body .= '<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We\'ll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
';

    require_once 'view/'.$template.'/index.php';
}
