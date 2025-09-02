<h1 class="section-title">Charity</h1>
<h2>Charity Types</h2>
<div class="row row-cols-1 row-cols-md-4 g-3 mb-4">
  <?php foreach (['Education','Health','Community','Other'] as $i =&gt; $type): ?>
  <div class="col">
    <div class="card h-100">
      <img src="https://picsum.photos/seed/charity<?= $i ?>/600/400" class="card-img-top" alt="">
      <div class="card-body">
        <h6 class="card-title"><?= htmlspecialchars($type) ?></h6>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
</div>

<h2>Charity Categories</h2>
<div class="row row-cols-1 row-cols-md-3 g-3">
  <?php for($i=0;$i&lt;6;$i++): ?>
  <div class="col">
    <div class="card h-100">
      <img src="https://picsum.photos/seed/charityCat<?= $i ?>/600/400" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">Category <?= $i+1 ?></h5>
        <a href="#" class="stretched-link">View</a>
      </div>
    </div>
  </div>
  <?php endfor; ?>
</div>
