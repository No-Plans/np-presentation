<?php $projects = page('archive')->children(); ?>

<?php foreach($projects as $project): ?>
  <?php if($project->home() == '1'): ?>
    <div class="slider-container">
          <ul class="slides">
            <?php foreach($project->images()->sortBy('sort', 'asc') as $image): ?> 
                <img class="slide" src="<?php echo $site->url() ?>/assets/img/bg.png" data-src="<?php echo thumb($image, array('height'=>500, 'quality' => 100))->url(); ?>"  data-src-retina="<?php echo thumb($image, array('width' => 1000, 'quality' => 100))->url(); ?>" alt="<?php echo $image->caption() ?>">
            <?php endforeach ?>
          </ul>
        <div class="caption-meta" >
          <div class="num"><span><?php echo $project->num() ?>. <span><?php echo $project->title() ?></span></div>
          <div class="legenda slides">
            <?php foreach($project->images()->sortBy('sort', 'asc') as $image): ?> 
                <span class="slide"><?php echo $image->caption() ?> - <?php echo $project->time() ?></span>
            <?php endforeach ?>
          </div>
          <div class="description"><span><?php echo $project->description()->kirbytext() ?></span></div>
          <div class="appendix"><span><?php echo $project->appendix() ?></span></div>
        </div>
    </div>
  <?php endif ?>
<?php endforeach ?>

