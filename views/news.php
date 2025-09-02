<h1 class="section-title">News</h1>
<div id="newsTop" class="carousel slide mb-4" data-bs-ride="carousel">
  <div class="carousel-inner">
    <?php for($i=0;$i&lt;3;$i++): ?>
      <div class="carousel-item <?= $i===0?'active':'' ?>">
        <img src="https://picsum.photos/seed/newsTop<?= $i ?>/1200/400" class="d-block w-100" alt="">
        <div class="carousel-caption d-none d-md-block">
          <h5>Top Post <?= $i+1 ?></h5>
        </div>
      </div>
    <?php endfor; ?>
  </div>
</div>

<div class="d-flex gap-2 mb-3 flex-wrap">
  <?php foreach (['All','Education','Events','Announcements'] as $cat): ?>
  <a class="btn btn-sm btn-outline-secondary" href="#"><?= htmlspecialchars($cat) ?></a>
  <?php endforeach; ?>
</div>

<h2>Top Posts</h2>
<ul class="list-group mb-4">
  <?php for($i=0;$i&lt;5;$i++): ?>
  <li class="list-group-item d-flex justify-content-between">
    <a href="/?page=post&amp;id=<?= $i+1 ?>">Top Post <?= $i+1 ?></a>
    <span class="text-muted small"><?= date('Y-m-d') ?></span>
  </li>
  <?php endfor; ?>
</ul>

<h2>Latest Posts</h2>
<div class="row row-cols-1 row-cols-md-3 g-3">
  <?php for($i=0;$i&lt;6;$i++): ?>
  <div class="col">
    <div class="card h-100">
      <img src="https://picsum.photos/seed/latest<?= $i ?>/600/400" class="card-img-top" alt="">
      <div class="card-body">
        <h6 class="card-title">Post <?= $i+1 ?></h6>
        <a class="stretched-link" href="/?page=post&amp;id=<?= $i+1 ?>">Read</a>
      </div>
    </div>
  </div>
  <?php endfor; ?>
</div>
