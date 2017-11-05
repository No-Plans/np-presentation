
  <div id='case-studies' class="section header title">
    <hr>
    <div class='trunk'>
      <h1>Case 1: <?= $page->title()->html() ?></h1>
      <div class='description'><?= $page->text()->kirbytext() ?>For Unu o Unu the goal was to build an engaging showcase for collective portfolio of artists. </div>
    </div>
  </div>

  <div class="section trunk max-height">
    <div class="table-cell video-column">
      <div class='embed-container mate shadow'>
        <video width="100%" autoplay loop>
          <source src="assets/content/unu/UOU-edit-20171030.mp4" type="video/mp4" />
        </video>
        <?php
      // Images for the "project" template are sortable. You
      // can change the display by clicking the 'edit' button
      // above the files list in the sidebar.
      foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
        <figure>
          <img src="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>" />
        </figure>
      <?php endforeach ?>
      </div>
    </div>
    <div class="caption-column">
      <a class='site-link' href='http://www.unuounu.org/' target='_blank'>unuounu.org</a>
      <li><?= $page->year() ?></li>
      <li>Flexibility for type of content</li>
      <li>Turnaround: 6 weeks</li>
      <li>CMS: Wordpress</li>
    </div>
  </div>