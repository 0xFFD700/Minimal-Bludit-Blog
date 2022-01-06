<div class="container mt-2 mb-5">
  <div class="row">
    <div class="col-lg-2"></div>
    <div class="col-md-12 col-lg-8">
      <div class="card my-4 border-0">

        <!-- Load Bludit Plugins: Page Begin -->
        <?php Theme::plugins('pageBegin'); ?>

        <?php if ($page->coverImage()) : ?>
          <img class="card-img-top mb-4 rounded-0" alt="Cover Image" src="<?php echo $page->coverImage(); ?>" />
        <?php endif ?>
        <div class="card-body p-0">
          <a class="text-dark" href="<?php echo $page->permalink(); ?>">
            <h1 class="title text-center text-uppercase"><?php echo $page->title(); ?></h1>
          </a>
          <h6 class="card-subtitle mb-5 mt-1 text-muted text-center text-uppercase"> <?php if (!$page->isStatic() && !$url->notFound()) : ?>
              <i class="far fa-clock text-warning">&nbsp;</i><?php echo $page->date(); ?>&nbsp; &nbsp;<i class="far fa-folder text-warning"></i>&nbsp;<?php echo $page->category(); ?>
          </h6>
        <?php endif ?>
        <?php echo $page->content(); ?>
        </div>

        <!-- Load Bludit Plugins: Page End -->
        <?php Theme::plugins('pageEnd'); ?>

      </div>
      <div class="col-lg-2"></div>
    </div>
  </div>
</div>