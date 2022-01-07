<nav class="navbar navbar-expand-lg navbar-light bg-light text-uppercase">
  <a class="navbar-brand" href="<?php echo Theme::siteUrl() ?>">
    <span class="text-yellow"><?php echo $site->title() ?></span>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    <li class="nav-item">
            <a class="nav-link" href="/about">about</a>
          </li>
      <?php foreach ($categories->db as $key => $fields) :
        if ($fields['list']) :  ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo DOMAIN_CATEGORIES . $key; ?>"><?php echo $fields['name']; ?></a>
          </li>
      <?php
        endif;
      endforeach; ?>
    </ul>

    <!-- Search Plugin -->
    <?php if (pluginActivated('pluginSearch')) : ?>
      <div class="d-flex">
        <div class="input-group">
          <input type="search" class="form-control mt-1" id="search-input" placeholder="">
          <div class="input-group-append">
            <button class="btn btn-secondary mt-1" type="submit" onClick="searchNow()">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
        <script>
          function searchNow() {
            var searchURL = "<?php echo Theme::siteUrl(); ?>search/";
            window.open(searchURL + document.getElementById("search-input").value, "_self");
          }
          var elem = document.getElementById('search-input');
          elem.addEventListener('keypress', function(e) {
            if (e.keyCode == 13) {
              searchNow();
            }
          });
        </script>
      </div>
    <?php endif ?>

  </div>
</nav>