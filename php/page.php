<!-- Post -->
<div class="card my-5 border-0">

	<!-- Load Bludit Plugins: Page Begin -->
	<?php Theme::plugins('pageBegin'); ?>

	<div class="container">
		<div class="row">

			<div class="col-lg-2"></div>

			<!-- Blog Posts -->
			<div class="col-lg-8">

				<!-- Cover image -->
				<?php if ($page->coverImage()) : ?>
					<img class="card-img-top mb-5 rounded-0" alt="Cover Image" src="<?php echo $page->coverImage(); ?>" />
				<?php endif ?>

				<div class="card-body p-0">
					<!-- Title -->
					<a class="text-center title" href="<?php echo $page->permalink(); ?>">
						<h1 class="title text-center"><?php echo $page->title(); ?></h1>
					</a>

					<?php if (!$page->isStatic() && !$url->notFound()) : ?>
						<!-- Creation date -->
						<h6 class="card-subtitle mb-5 text-muted text-center undertitle">
							<i class="far fa-clock"></i> <?php echo $page->date(); ?> &nbsp; &nbsp;
							<i class="far fa-folder"></i> <a href="<?php echo $page->categoryPermalink() ?>"><?php echo $page->category() ?></a>
						</h6>
					<?php endif ?>

					<!-- Full content -->
					<?php echo $page->content(); ?>

				</div>
			</div>

			<div class="col-lg-2"></div>

		</div>
	</div>

	<!-- Load Bludit Plugins: Page End -->
	<?php Theme::plugins('pageEnd'); ?>

</div>