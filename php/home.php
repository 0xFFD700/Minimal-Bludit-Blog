<?php if ($WHERE_AM_I == 'home') : ?>

<?php endif; ?>
<!-- all post -->
<div class="container-fluid mt-4">
	<div class="row">
		<div class="col-sm-14 pt-4 pb-4">
			<!-- start blog post -->
			<div class="row row-cols-1 row-cols-md-3 g-4">
				<?php if (empty($content)) {
					$language->p('No pages found');
				} ?>
				<?php foreach ($content as $page) : ?>
					<div class="col-xl-4 col-sm-6 col-12">
						<div class="card m-3 h-100">
							<img src="<?php echo ($page->coverImage() ? $page->coverImage() : Theme::src('img/noimage.png')) ?>" class="card-img-top" alt="...">
							<div class="card-body">
								<i class="far fa-clock"></i> <?php echo $page->date(); ?>
								<a class="text-dark" href="<?php echo $page->permalink(); ?>">
									<h5 class="card-title"><?php echo $page->title(); ?></h5>
								</a>
								<p class="card-text"><?php echo (empty($page->description()) ? $language->p('Complete the description of the article') : $page->description()) ?></p>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div>
			<!--/ start blog post -->
		</div>
	</div>
</div>
<!-- all post -->
<!-- nav -->
<?php if (Paginator::numberOfPages() > 1) : ?>
	<div class="container pt-2 pb-5">
		<div class="row">
			<div class="col">
				<?php if (Paginator::showPrev()) : ?>
					<a href="<?php echo Paginator::previousPageUrl() ?>" class="btn rounded-pill btn-sm">&larr; Previous</a>
				<?php endif ?>
				<?php if (Paginator::showNext()) : ?>
					<a href="<?php echo Paginator::nextPageUrl() ?>" class="btn rounded-pill btn-sm">Next &rarr;</a>
				<?php endif ?>
			</div>
		</div>
	</div>
<?php endif ?>
<!--/ nav -->