<?php
$title = isset($post['title']) ? (string)$post['title'] : 'Post Title';
$image = isset($post['image_url']) && $post['image_url'] ? (string)$post['image_url'] : 'https://picsum.photos/seed/post/1200/500';
$content = isset($post['content']) ? (string)$post['content'] : 'Dynamic post content will be shown here.';
$created = isset($post['created_at']) ? (string)$post['created_at'] : null;
$category = isset($post['category']) ? (string)$post['category'] : null;
?>
<h1 class="section-title"><?= htmlspecialchars($title) ?></h1>
<div class="text-muted mb-2">
  <?php if ($category): ?><span class="badge text-bg-light me-2"><?= htmlspecialchars($category) ?></span><?php endif; ?>
  <?php if ($created): ?><small><?= htmlspecialchars(date('Y-m-d', strtotime($created))) ?></small><?php endif; ?>
</div>
<div class="row g-4">
  <div class="col-md-8">
    <img src="<?= htmlspecialchars($image) ?>" class="img-fluid rounded mb-3" alt="">
    <div><?= nl2br(htmlspecialchars($content)) ?></div>
  </div>
  <div class="col-md-4">
    <div class="border rounded p-3">
      <h5>Related Posts</h5>
      <ul class="list-unstyled">
        <li><a href="/?page=news">See latest</a></li>
        <li><a href="/?page=news&amp;category=education">Education</a></li>
        <li><a href="/?page=news&amp;category=announcements">Announcements</a></li>
      </ul>
    </div>
  </div>
</div>
