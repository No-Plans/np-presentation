<?php snippet('header') ?>

<div class="bk"></div>
<!-- Loader --> 
<div class='loader'>
  <div class='loading L-1-1'>
    <div class='trunk gutters'>
      No Plans for you<!-- Client Name --> – Loading
    </div>
  </div>
</div>

<div class='logo'>
  <img src="assets/img/noplans-logo.svg">
</div>

<nav class='header-menu'>
  <div class='trunk float-container'>
    <ul class='inline-block-container'>
      <li>No Plans for you:<!-- Client Name --></li>
      <li><a href="#top">Introduction</a></li>
      <li><a href="#clients">Clients<!-- prject title --></a></li>
      <li><a href="#work-process">Work Process<!-- project title --></a></li>
      <li><a href="#case-studies">Case Studies<!-- project title --></a></li>
      <li><a href="#team">Team<!-- project title --></a></li>
      <!-- <li><a href="#references">References</a></li> -->
    </ul>
    <div class="arrows">
      <div class="arrows-text">Use </div><button class="up"> <span>▲</span> </button><button class="down"> <span>▼</span> </button>
    </div>
  </div>
</nav>

<!-- Main slides -->
  <div id='top' class="section about header current trunk">
    <h1 class="title">No Plans</h1><br>
    <h2>
      No Plans is a digital design studio specialising in website design, programming and brand identity.
    <br/>
      We create websites that are both unique experiences and efficient service tools.
    </h2>
    <p class='L-1-2'>
      Based in London and New York, No Plans was founded in 2015 by Daniel Pianetti and Daniel Baer.
    </p>
  </div>

<!-- Main slides -->
  <div id='clients' class="section about header current">
  <hr>
    <div class='trunk'>
      <h1 class="title">Clients</h1><br>
      <h2>
        We have worked with Christie’s, Leonardo DiCaprio Foundation / De Pury, Fantastic Man, Pigalle, Mr Porter, Sotheby’s, Mother Design, Bodega, New Tendency.
      </h2>
    </div>
  </div>

    <!-- Team -->
  <div id='team' class="section header">
    <hr>
    <div class='trunk'>
      <h1>Team</h1>
        <h2>Team</h2>
        <p class='L-3-4'>
          Started in Switzerland, then moved to London and New York, we have a background in graphic design and typography with 10 years of experience in digital design and development: we have worked with clients in the creative field, conceived e-commerce solutions and consulted for new ventures who need an online presence.
        </p>
        <p class='L-3-4'>
          A team of 3 people (covering design, developement, strategy/project management) will be assigned to your project, with the option of bringing in experts from our network.
        </p>
        <h2>Network</h2>
        <p class='L-3-4'>
          We work on a regular basis with designers specialized in typography and branding (ATMA, Robert Huber) and collaborate with professionals from the Are.na community in fields such as research, publishing, strategy and techincal development.
        </p>
      </div>
  </div>

<!-- Main slides -->
  <div id='work-process' class="section header">
    <hr>
    <div class='trunk'>
      <h1>Typical Work Process</h1>
        <h2>Research</h2>
        <p class='L-3-4'>
          Define the structure and goals of the online presence: conversation with the client, research of industry references, setting a list of priorities and choice of technology.
        </p>
        <h2>Design</h2>
        <p class='L-3-4'>
          Starting with visual explorations and client’s feedback, we design a few directions towards the brief goals and fitting with the brand. The mobile experience and transitions are prototyped for better sensing.
        </p>
        <h2>Development</h2>
        <p class='L-3-4'>
          The development phase is structured to allow time for testing and content population from the client’s side. Websites are migrated to the server to then be proved against all screen sizes and main browsers before launch.</p>
      </div>
  </div>

<!-- Artist ..................... -->

<?php $projects = page('projects')->children(); ?>

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

  <div id='case-studies' class="section header title">
    <hr>
    <div class='trunk'>
      <h1>Case 1: Unu o Unu</h1>
      <div class='description'>For Unu o Unu the goal was to build an engaging showcase for collective portfolio of artists. </div>
    </div>
  </div>

  <div class="section trunk max-height">
    <div class="table-cell video-column">
      <div class='embed-container mate shadow'>
        <video width="100%" autoplay loop>
          <source src="assets/content/unu/UOU-edit-20171030.mp4" type="video/mp4" />
        </video>
      </div>
    </div>
    <div class="caption-column">
      <a class='site-link' href='http://www.unuounu.org/' target='_blank'>unuounu.org</a>
      <li>Innovative slideshow</li>
      <li>Flexibility for type of content</li>
      <li>Turnaround: 6 weeks</li>
      <li>CMS: Wordpress</li>
    </div>
  </div>


<!-- Agency  ..................... -->

    <div id='project-2' class="section title">
      <hr>
      <div class='trunk'>
        <h1>Case 2: Mother</h1>
        <div class='description'>Modular, solid portfolio for the agency.</div>
      </div>
    </div>

    <div class="section trunk max-height">
      <div class="table-cell video-column">
        <div class='embed-container mate shadow'>
          <video width="100%" autoplay loop>
            <source src="assets/content/mother/mother-all-edit-171030.mp4" type="video/mp4" />
          </video>
        </div>
      </div>
      <div class="caption-column">
        <a class='site-link' href='http://www.motherdesign.com/' target='_blank'>motherdesign.com</a>
        <li>Focus on video assets</li>
        <li>Turnaround: 10 weeks</li>
        <li>CMS: Wordpress</li>
      </div>
    </div>

<!-- AJAX ..................... -->

  <div  id='project-3'  class="section header title">
    <hr>
    <div class='trunk'>
      <h1>Case 3: Series by Bodega</h1>
      <div class='description'>The established shop needed an online space for their new collaborative and exhibition initiative. It was important to have the visitor dive in the new branding of SERIES, treating the website as a capsule.</div>
    </div>
  </div>

  <div class="section trunk max-height">
    <div class="table-cell video-column">
      <div class='embed-container mate shadow'>
        <video width="100%" autoplay loop>
          <source src="assets/content/bodega/bodega-edit-02-171031.mp4" type="video/mp4" />
        </video>
      </div>
    </div>
    <div class="caption-column">
      <a class='site-link' href='http://seriesbybodega.com/' target='_blank'>seriesbybodega.com</a>
      <li>Turnaround: 4 weeks</li>
      <li>AJAX to seamlessly load posts</li>
      <li>CMS: Kirby</li>
    </div>
  </div>

  <!-- Other work ..................... 

  <div  id='project-4'  class="section header title trunk">
    <h1>Other projects</h1>
    <div class='description'>Selection of work.</div>
  </div>

  <div class="section trunk max-height">
    <div class="table-cell video-column">
      <div class='embed-container mate shadow'>
        <video width="100%" autoplay loop>
          <source src="assets/content/bodega/bodega-edit-02-171031.mp4" type="video/mp4" />
        </video>
      </div>
    </div>
    <div class="caption-column">
      <a class='site-link' href='http://seriesbybodega.com/' target='_blank'>seriesbybodega.com</a>
      <li>Turnaround: 4 weeks</li>
      <li>AJAX to seamlessly load posts</li>
      <li>CMS: Kirby</li>
    </div>
  </div> -->

  <!-- Brief -->
  <div id='brief' class="section header title">
    <hr>
    <div class='trunk'>
      <h1>Brief</h1>
      <h2>Objectives</h2>
      <div class='L-3-4'>
      </div>
    </div>
  </div>

  <!-- Proposal -->
  <div id='proposal' class="section header title">
    <hr>
    <div class='trunk'>
      <h1>Proposal and timeline</h1>
    </div>
    <div class="table-container trunk">
      <table class="L-1-2">
        <tr class="table-cell-title">
          <th>Homepage</th>
        </tr>
        <tr class="table-cell-details">
          <td>Playful representation of hi- and low-end products</td>
          <td>Call to action to shop</td>
        </tr>

        <tr class="table-cell-title">
          <th>Shop overview</th>
        </tr>

        <tr class="table-cell-details">
          <td>Filters</td>
          <td>Labels</td>
          <td>Minimal design</td>
        </tr>

        <tr class="table-cell-title">
          <th>Static pages</th>
        </tr>

        <tr class="table-cell-details">
          <td>About + Newsletter form</td>
          <td>Stockists</td>
        </tr>
      </table>
      <table class="L-1-2">
        <tr class="table-cell-title">
          <th>Timeline</th>
        </tr>
        <tr class="table-cell-details">
          <td>2 weeks</td>
        </tr>
     </table>
    </div>
    </div>






