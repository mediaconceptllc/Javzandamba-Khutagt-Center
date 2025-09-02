<h1 class="section-title">Courses</h1>
<div id="featuredCourses" class="carousel slide mb-4" data-bs-ride="carousel">
  <div class="carousel-inner">
    <?php for($i=0;$i&lt;3;$i++): ?>
      <div class="carousel-item <?= $i===0?'active':'' ?>">
        <img src="https://picsum.photos/seed/featuredCourse<?= $i ?>/1200/400" class="d-block w-100" alt="">
        <div class="carousel-caption d-none d-md-block">
          <h5>Top Course <?= $i+1 ?></h5>
        </div>
      </div>
    <?php endfor; ?>
  </div>
</div>

<h2>Featured Courses</h2>
<div class="row row-cols-1 row-cols-md-3 g-3 mb-4">
  <?php for($i=0;$i&lt;3;$i++): ?>
  <div class="col">
    <div class="card h-100">
      <img src="https://picsum.photos/seed/feat<?= $i ?>/600/400" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">Featured Course <?= $i+1 ?></h5>
      </div>
    </div>
  </div>
  <?php endfor; ?>
</div>

<h2>All Courses</h2>
<div class="row row-cols-1 row-cols-md-3 g-3">
  <?php for($i=0;$i&lt;9;$i++): ?>
  <div class="col">
    <div class="card h-100">
      <img src="https://picsum.photos/seed/courseCard<?= $i ?>/600/400" class="card-img-top" alt="">
      <div class="card-body">
        <h6 class="card-title">Course <?= $i+1 ?></h6>
        <a href="#" class="stretched-link">View</a>
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
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
