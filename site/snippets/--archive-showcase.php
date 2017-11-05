<?php $archives = page()->children(); ?>

<?php foreach($archives->sortBy('sort', 'asc') as $archive): ?>
<?php $image = $archive->images()->sortBy('sort', 'asc')->first(); ?>
<a href="#">
	<div class="archive-row">
		<img class="first" src="<?php echo thumb($image, array('width' => 550, 'quality' => 90))->url(); ?>" alt="">
	    <div class="archive-field pic">
	    	<div class="archive-slides">
			<?php foreach($archive->images()->sortBy('sort', 'asc') as $image): ?>
				<img class="slide" src="<?php echo $site->url() ?>/assets/img/bg.png" data-src="<?php echo thumb($image, array('width'=>550, 'quality' => 95))->url(); ?>"  data-src-retina="<?php echo thumb($image, array('width' => 1100, 'quality' => 95))->url(); ?>" alt="">
				<?php endforeach ?>
			</div>
	  	</div>
	    
	    <div class="archive-field title"><span><?php echo $archive->title() ?></span></div>
	    <div class="archive-field title description"><span><?php echo $archive->description() ?></span></div>
	    <div class="archive-field time"><span><?php echo $archive->time() ?></span></div>
	    <!--<div class="archive-field category"><span><?php echo $archive->category() ?></span></div>
	    <div class="archive-field type"><span><?php echo $archive->type() ?></span></div> -->
	</div>
</a>
<?php endforeach ?>