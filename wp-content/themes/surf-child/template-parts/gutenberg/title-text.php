<?php
$parent = get_field('title-and-text-block-1-3');
?>
<section class="heading bg-<?php echo $parent['background_color']; ?>">
	<div class="container">
		<div class="row">
			<?php if($parent['title']): ?>
			<h2 class="heading-title col-12 col-lg-3"><?php echo $parent['title']; ?></h2>
			<?php else: ?>
			<div class="heading-title col-12 col-lg-3"></div>
			<?php endif; ?>
			<div class="heading-text col-12 col-lg-6 col-lg-offset-1">
				<?php echo $parent['text']; ?>
			</div>
		</div>
	</div>
</section>
