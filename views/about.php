<h1 class="section-title">About Us</h1>
<p>Introductions and mission.</p>
<h2>Story</h2>
<p>Our story section.</p>
<h2>Founders</h2>
<div class="row row-cols-1 row-cols-md-3 g-3">
  <?php for($i=0;$i&lt;3;$i++): ?>
  <div class="col">
    <div class="card h-100">
      <img src="https://picsum.photos/seed/founder<?= $i ?>/600/400" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">Founder <?= $i+1 ?></h5>
      </div>
    </div>
  </div>
  <?php endfor; ?>
</div>

<h2 class="mt-4">Teachers</h2>
<div class="row row-cols-1 row-cols-md-4 g-3">
  <?php for($i=0;$i&lt;4;$i++): ?>
  <div class="col">
    <a class="text-decoration-none text-reset" href="/?page=teacher&amp;id=<?= $i+1 ?>">
      <div class="card h-100">
        <img src="https://picsum.photos/seed/teacher<?= $i ?>/600/400" class="card-img-top" alt="">
        <div class="card-body">
          <h6 class="card-title">Teacher <?= $i+1 ?></h6>
        </div>
      </div>
    </a>
  </div>
  <?php endfor; ?>
</div>

<h2 class="mt-4">Board Members</h2>
<div class="row row-cols-2 row-cols-md-6 g-3">
  <?php for($i=0;$i&lt;6;$i++): ?>
  <div class="col">
    <div class="card h-100">
      <img src="https://picsum.photos/seed/board<?= $i ?>/600/400" class="card-img-top" alt="">
      <div class="card-body">
        <div class="small">Board Member <?= $i+1 ?></div>
      </div>
    </div>
  </div>
  <?php endfor; ?>
</div>

<h2 class="mt-4">Members</h2>
<div class="row row-cols-2 row-cols-md-6 g-3">
  <?php for($i=0;$i&lt;12;$i++): ?>
  <div class="col">
    <div class="card h-100">
      <img src="https://picsum.photos/seed/member<?= $i ?>/600/400" class="card-img-top" alt="">
      <div class="card-body">
        <div class="small">Member <?= $i+1 ?></div>
      </div>
    </div>
  </div>
  <?php endfor; ?>
</div>
