<?php if ($gallery->getMaxIndex() == 0): ?>
  <div id="bdy">
    <div id="gallery">
      <img src="<?php echo $gallery->getPhoto() ?>" height="504" alt="">
    </div>
  </div>
<?php else: ?>
  <div id="bdy">
    <div id="gallery">
      <a href="?i=<?php echo $gallery->getNextIndex() ?>"><img src="<?php echo $gallery->getPhoto() ?>" height="504" alt=""></a>
      <div class="gallery-nav">
        <a href="?i=<?php echo $gallery->getPrevIndex() ?>" class="prev">&laquo; previous</a>
        <a href="?i=<?php echo $gallery->getNextIndex() ?>" class="next">next &raquo;</a>
        <span>
          <?php echo $gallery->getIndex() + 1 ?> of <?php echo $gallery->getMaxIndex() + 1?>
        </span>
      </div>
    </div>
  </div>
<?php endif ?>
