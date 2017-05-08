<?php
/*
  Template Name: Home Page
 */

get_header(); ?>

<!-- TECHNICAL SKILLS
================================================== -->
<section id="tech-skills">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h2 class="title-bullet-list">Technical skills</h2>
        <ul class="unstyled">
          <li><i class="fa fa-check" aria-hidden="true"></i>Create a local development environment.</li>
          <li><i class="fa fa-check" aria-hidden="true"></i>Convert flat design to HTML5 &amp; CSS3 with Bootstrap.</li>
          <li><i class="fa fa-check" aria-hidden="true"></i>Add WordPress to a static website.</li>
          <li><i class="fa fa-check" aria-hidden="true"></i>Create and use custom post types.</li>
          <li><i class="fa fa-check" aria-hidden="true"></i>Create and use advanced custom fields.</li>
        </ul>
      </div><!-- col -->
    </div><!-- row -->
  </div><!-- container -->
</section>

<!-- OTHER SKILLS
================================================== -->
<section id="other-skills">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h2 class="title-bullet-list">Other skills</h2>
        <ul class="unstyled">
          <li><i class="fa fa-check" aria-hidden="true"></i>Experience using the WordPress CMS.</li>
          <li><i class="fa fa-check" aria-hidden="true"></i>Understanding of SEO fundamentals.</li>
          <li><i class="fa fa-check" aria-hidden="true"></i>Add WordPress to a static website.</li>
          <li><i class="fa fa-check" aria-hidden="true"></i>Experience talking to clients in meetings, on the phone and by email.</li>
          <li><i class="fa fa-check" aria-hidden="true"></i>Understanding of UX principles.</li>
        </ul>
      </div><!-- col -->
    </div><!-- row -->
  </div><!-- container -->
</section>

<!-- PIE CHARTS
================================================== -->
<section id="pie-charts">
  <h2 class="text-center">Languages &amp; Tools</h2>
    <div class="container">

      <!-- First Row
      ================================================== -->
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="chart-box">
            <div class="chart text-center" data-percent="65">
              <span>65%</span>
            </div><!-- chart-->
            <h4>HTML</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div><!-- box -->
        </div><!-- col -->
        <div class="col-sm-6 col-md-3">
          <div class="chart-box">
            <div class="chart text-center" data-percent="60">
              <span>60%</span>
            </div><!-- chart-->
            <h4>CSS</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div><!-- box -->
        </div><!-- col -->
        <div class="col-sm-6 col-md-3">
          <div class="chart-box">
            <div class="chart text-center" data-percent="70">
              <span>70%</span>
            </div><!-- chart-->
            <h4>Bootstrap</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div><!-- box -->
        </div><!-- col -->
        <div class="col-sm-6 col-md-3">
          <div class="chart-box">
            <div class="chart text-center" data-percent="40">
              <span>40%</span>
            </div><!-- chart-->
            <h4>jQuery</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div><!-- box -->
        </div><!-- col -->
      </div><!-- first row -->

      <!-- Second Row
      ================================================== -->
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="chart-box">
            <div class="chart text-center" data-percent="45">
              <span>45%</span>
            </div><!-- chart-->
            <h4>Underscores</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div><!-- box -->
        </div><!-- col -->
        <div class="col-sm-6 col-md-3">
          <div class="chart-box">
            <div class="chart text-center" data-percent="30">
              <span>30%</span>
            </div><!-- chart-->
            <h4>PHP</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div><!-- box -->
        </div><!-- col -->
        <div class="col-sm-6 col-md-3">
          <div class="chart-box">
            <div class="chart text-center" data-percent="50">
              <span>50%</span>
            </div><!-- chart-->
            <h4>Git</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div><!-- box -->
        </div><!-- col -->
        <div class="col-sm-6 col-md-3">
          <div class="chart-box">
            <div class="chart text-center" data-percent="15">
              <span>15%</span>
            </div><!-- chart-->
            <h4>React</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div><!-- box -->
        </div><!-- col -->
      </div><!-- second row -->
    </div><!-- container -->
</section>

<!-- PORTFOLIO
================================================== -->
<section id="portfolio">
  <h2 class="text-center">Portfolio</h2>
    <div class="container">
      <ul id="filters" class="filters">
        <li class="type active" data-filter="*">All</li>
        <li class="type" data-filter=".bs">Bootstrap</li>
        <li class="type" data-filter=".wp">WordPress</li>
        <li class="type" data-filter=".jq">jQuery</li>
        <li class="type" data-filter=".cpt">CPT</li>
        <li class="type" data-filter=".acf">ACF</li>
      </ul>
      <div class="items-wrapper isotope row">

        <!-- 1st row 1st column
        ================================================== -->
        <div class="item bs wp jq cpt acf col-sm-6 col-md-4">
          <div class="item-inner">
            <figure><img class="img-responsive" src="assets/Bootstrap to WordPress 715x400.jpg" alt="Bootstrap to WordPress project screenshot"></figure>
            <div class="content">
              <h3>Bootstrap to WordPress</h3>
              <div class="meta">Bootstrap, WordPress, CPT, ACF, jQuery</div><!-- meta -->
            </div><!-- content -->
              <a href="http://webjigsaw.net/" target="_blank" role="button" class="btn btn-outline-primary">Visit Site</a>
          </div><!-- item-inner -->
        </div><!-- item col -->

        <!-- 1st row 2nd column
        ================================================== -->
        <div class="item bs col-sm-6 col-md-4">
          <div class="item-inner">
            <figure><img class="img-responsive" src="assets/My Favourite Things 717x400.jpg" alt="My Favourite Things project screenshot"></figure>
            <div class="content">
              <h3>My Favourite Things</h3>
              <div class="meta">Bootstrap</div><!-- meta -->
            </div><!-- content -->
            <a href="https://eugelogic.github.io/eugenes-favourites/" target="_blank" role="button" class="btn btn-outline-primary">Visit Site</a>
          </div><!-- item-inner -->
        </div><!-- item col -->

        <!-- 1st row 3rd column
        ================================================== -->
        <div class="item bs jq col-sm-6 col-md-4">
          <div class="item-inner">
            <figure><img class="img-responsive" src="assets/My CV Static 717x400.jpg" alt="My Curriculum Vitae project screenshot"></figure>
            <div class="content">
              <h3>My Curriculum Vitae</h3>
              <div class="meta">Bootstrap, jQuery</div><!-- meta -->
            </div><!-- content -->
            <a href="https://eugelogic.github.io/my-cv-static/" target="_blank" role="button" class="btn btn-outline-primary">Visit Site</a>
          </div><!-- item-inner -->
        </div><!-- item col -->

        <!-- 2nd row 1st column
        ================================================== -->
        <div class="item bs col-sm-6 col-md-4">
          <div class="item-inner">
            <figure><img class="img-responsive" src="assets/Introducing Shutterbugg 717x400.jpg" alt="Introducing Shutterbugg project screenshot"></figure>
            <div class="content">
              <h3>Introducing Shutterbugg</h3>
              <div class="meta">Bootstrap</div><!-- meta -->
            </div><!-- content -->
            <a href="http://shutterbugg.webjigsaw.net/" target="_blank" role="button" class="btn btn-outline-primary">Visit Site</a>
          </div><!-- item-inner -->
        </div><!-- item col -->

        <!-- 2nd row 2nd column
        ================================================== -->
        <div class="item bs wp cpt acf col-sm-6 col-md-4">
          <div class="item-inner">
            <figure>
              <img class="img-responsive" src="assets/My Web Bookmarks 715x400.jpg" alt="My Web Bookmarks project screenshot">
              <figcaption>
                <h5><mark>Work in Progress</mark></h5>
              </figcaption>
            </figure>
            <div class="content">
              <h3>My Web Bookmarks</h3>
              <div class="meta">Bootstrap, WordPress, CPT, ACF</div><!-- meta -->
            </div><!-- content -->
            <a href="http://test.webjigsaw.net/" target="_blank" role="button" class="btn btn-outline-primary">Visit Site</a>
          </div><!-- item-inner -->
        </div><!-- item col -->

        <!-- 2nd row 3th column
        ================================================== -->
        <div class="item bs col-sm-6 col-md-4">
          <div class="item-inner">
            <figure><img class="img-responsive" src="assets/Excursion 717x400.jpg" alt="Excursion project screenshot"></figure>
            <div class="content">
              <h3>Excursion</h3>
              <div class="meta">Bootstrap</div><!-- meta -->
            </div><!-- content -->
            <a href="http://excursion.webjigsaw.net/" target="_blank" role="button" class="btn btn-outline-primary">Visit Site</a>
          </div><!-- item-inner -->
        </div><!-- item col -->

        <!-- 3rd row 1st column
        ================================================== -->
        <div class="item bs col-sm-6 col-md-4">
          <div class="item-inner">
            <figure><img class="img-responsive" src="assets/Pocketbook 717x400.jpg" alt="Pocketbook project screenshot"></figure>
            <div class="content">
              <h3>Pocketbook</h3>
              <div class="meta">Bootstrap</div><!-- meta -->
            </div><!-- content -->
            <a href="http://pocketbook.webjigsaw.net/" target="_blank" role="button" class="btn btn-outline-primary">Visit Site</a>
          </div><!-- item-inner -->
        </div><!-- item col -->

        <!-- 3rd row 2nd column
        ================================================== -->
        <div class="item bs col-sm-6 col-md-4">
          <div class="item-inner">
            <figure><img class="img-responsive" src="assets/Headlines 716x400.jpg" alt="Headlines project screenshot"></figure>
            <div class="content">
              <h3>Headlines</h3>
              <div class="meta">Bootstrap</div><!-- meta -->
            </div><!-- content -->
            <a href="http://headlines.webjigsaw.net/" target="_blank" role="button" class="btn btn-outline-primary">Visit Site</a>
          </div><!-- item-inner -->
        </div><!-- item col -->

        <!-- 3rd row 3rd column
        ================================================== -->
        <div class="item bs col-sm-6 col-md-4">
          <div class="item-inner">
            <figure><img class="img-responsive" src="assets/BestBite 716x400.jpg" alt="BestBite project screenshot"></figure>
            <div class="content">
              <h3>BestBite</h3>
              <div class="meta">Bootstrap</div><!-- meta -->
            </div><!-- content -->
            <a href="http://bestbite.webjigsaw.net/" target="_blank" role="button" class="btn btn-outline-primary">Visit Site</a>
          </div><!-- item-inner -->
        </div><!-- item col -->

      </div><!-- items-wrapper - isotope - row -->
    </div><!-- container -->
</section>

<?php get_footer(); ?>
