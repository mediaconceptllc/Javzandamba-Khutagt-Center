<div class="hero mb-4">
  <div class="ratio ratio-16x9">
    <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Hero video" allowfullscreen></iframe>
  </div>
</div>

<h2 class="section-title">Latest News</h2>
<div class="row row-cols-1 row-cols-md-3 g-3">
  <?php for($i=0;$i&lt;3;$i++): ?>
  <div class="col">
    <div class="card h-100">
      <img src="https://picsum.photos/seed/news<?= $i ?>/600/400" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">News title <?= $i+1 ?></h5>
        <p class="card-text text-muted">Short excerpt for the news post.</p>
        <a href="/?page=post&amp;id=<?= $i+1 ?>" class="stretched-link">Read more</a>
      </div>
    </div>
  </div>
  <?php endfor; ?>
</div>

<h2 class="section-title mt-5">Courses</h2>
<div id="courseCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <?php for($i=0;$i&lt;3;$i++): ?>
      <div class="carousel-item <?= $i===0?'active':'' ?>">
        <img src="https://picsum.photos/seed/course<?= $i ?>/1200/400" class="d-block w-100" alt="">
        <div class="carousel-caption d-none d-md-block">
          <h5>Course <?= $i+1 ?></h5>
          <p>Short description for featured course.</p>
        </div>
      </div>
    <?php endfor; ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#courseCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#courseCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
