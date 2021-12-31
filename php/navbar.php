<nav class="navbar fixed-top navbar-light bg-light text-uppercase">
	<div class="container-fluid">
		<a class="navbar-brand" href="<?php echo Theme::siteUrl() ?>">
			<span class="text-yellow"><?php echo $site->title() ?></span>
		</a>
		
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">

            <?php foreach ($categories->db as $key=>$fields):
            if($fields['list']):  ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo DOMAIN_CATEGORIES.$key; ?>"><?php echo $fields['name']; ?></a>
			</li>
            <?php
            endif;
            endforeach; ?>
          </ul>
          <?php if (pluginActivated('pluginSearch')): ?>
          <div class="d-flex">
            <input id="search-input" class="form-control me-2 rounded-pill" type="search" placeholder="Search" aria-label="Search">
            <button onClick="searchNow()" class="btn rounded-pill" type="submit">GO</button>
            <script>
              function searchNow() {
                var searchURL = "<?php echo Theme::siteUrl(); ?>search/";
                window.open(searchURL + document.getElementById("search-input").value, "_self");
              }
              var elem = document.getElementById('search-input');
              elem.addEventListener('keypress', function(e){
                if (e.keyCode == 13) {
                  searchNow();
                }
              });
            </script>
          </div>
          <?php endif ?>
        </div>
	</div>
</nav>

