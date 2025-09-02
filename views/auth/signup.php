<h1 class="section-title">Sign Up</h1>
<form class="row g-3" method="post" action="/?page=signup">
  <input type="hidden" name="_action" value="signup">
  <div class="col-md-6">
    <label class="form-label">Full name</label>
    <input class="form-control" name="name" type="text" required autocomplete="name">
  </div>
  <div class="col-md-6">
    <label class="form-label">Phone number</label>
    <input class="form-control" name="phone" type="tel" required autocomplete="tel">
  </div>
  <div class="col-md-6">
    <label class="form-label">Email</label>
    <input class="form-control" name="email" type="email" required autocomplete="email">
  </div>
  <div class="col-md-6">
    <label class="form-label">Password</label>
    <input class="form-control" name="password" type="password" required autocomplete="new-password">
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Create account</button>
  </div>
</form>
