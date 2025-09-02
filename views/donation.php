<h1 class="section-title">Donations</h1>
<h2>Top Donators</h2>
<ol class="list-group list-group-numbered mb-4">
  <?php for($i=0;$i<10;$i++): ?>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Donator <?= $i+1 ?>
    <span class="badge bg-success rounded-pill">$<?= (10-$i)*100 ?></span>
  </li>
  <?php endfor; ?>
</ol>

<div class="row g-4">
  <div class="col-md-6">
    <h3>Board Member Donations</h3>
    <ul class="list-group">
      <?php for($i=0;$i<5;$i++): ?><li class="list-group-item">Board Member <?= $i+1 ?> - $<?= ($i+1)*120 ?></li><?php endfor; ?>
    </ul>
  </div>
  <div class="col-md-6">
    <h3>Teachers Donations</h3>
    <ul class="list-group">
      <?php for($i=0;$i<5;$i++): ?><li class="list-group-item">Teacher <?= $i+1 ?> - $<?= ($i+1)*90 ?></li><?php endfor; ?>
    </ul>
  </div>
</div>

<h3 class="mt-4">Members Donations</h3>
<ul class="list-group mb-4">
  <?php for($i=0;$i<8;$i++): ?><li class="list-group-item">Member <?= $i+1 ?> - $<?= ($i+1)*30 ?></li><?php endfor; ?>
</ul>

<h3>Other Donations</h3>
<ul class="list-group">
  <?php for($i=0;$i<6;$i++): ?><li class="list-group-item">Other Donor <?= $i+1 ?> - $<?= ($i+1)*50 ?></li><?php endfor; ?>
</ul>
