<h1 class="section-title">Events</h1>
<div class="row row-cols-1 row-cols-md-3 g-3">
  <?php for($i=0;$i<6;$i++): ?>
  <div class="col">
    <div class="card h-100">
      <img src="https://picsum.photos/seed/events<?= $i ?>/600/400" class="card-img-top" alt="">
      <div class="card-body">
        <div class="small text-muted mb-1"><?= date('Y-m-d', strtotime("+$i day")) ?></div>
        <h6 class="card-title">Event <?= $i+1 ?></h6>
        <p class="card-text text-muted">Short description for event <?= $i+1 ?>.</p>
        <a class="stretched-link" href="/?page=event&amp;id=<?= $i+1 ?>">View details</a>
      </div>
    </div>
  </div>
  <?php endfor; ?>
</div>

<nav class="mt-4">
  <ul class="pagination">
    <li class="page-item disabled"><span class="page-link">Previous</span></li>
    <li class="page-item active"><span class="page-link">1</span></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
