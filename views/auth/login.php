<?php App\Auth::start(); $user = $_SESSION['user'] ?? null; ?>
<h1 class="section-title">Login</h1>
<form class="row g-3" method="post" action="/?page=login">
  <input type="hidden" name="_action" value="login">
  <div class="col-12">
    <label class="form-label">Email</label>
    <input class="form-control" name="email" type="email" required autocomplete="email">
  </div>
  <div class="col-12">
    <label class="form-label">Password</label>
    <input class="form-control" name="password" type="password" required autocomplete="current-password">
  </div>
  <div class="col-12 d-flex justify-content-between align-items-center">
    <a href="/?page=forgot" class="small">Forgot password?</a>
    <button class="btn btn-primary" type="submit">Login</button>
  </div>
</form>
