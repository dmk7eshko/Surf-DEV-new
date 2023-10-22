<?php
$parent = get_field('title-and-text-block-1-3');
?>

<section class="brands-logo">
    <div class="container">
		<?php if($parent['title'] || $parent['text']): ?>
        <div class="heading">
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
		<?php endif; ?>
        <div class="row">
			<?php if(get_field('logo_1')) : ?>
				<div class="brands-logo_item col-md-2 col-sm-3 col-6">
					<img src="<?php echo get_field('logo_1') ?>" />
				</div>
			<?php endif; ?>
			
			<?php if(get_field('logo_2')) : ?>
				<div class="brands-logo_item col-md-2 col-sm-3 col-6">
					<img src="<?php echo get_field('logo_2') ?>" />
				</div>
			<?php endif; ?>
			
			<?php if(get_field('logo_3')) : ?>
				<div class="brands-logo_item col-md-2 col-sm-3 col-6">
					<img src="<?php echo get_field('logo_3') ?>" />
				</div>
			<?php endif; ?>
			
			<?php if(get_field('logo_4')) : ?>
				<div class="brands-logo_item col-md-2 col-sm-3 col-6">
					<img src="<?php echo get_field('logo_4') ?>" />
				</div>
			<?php endif; ?>
			
			<?php if(get_field('logo_5')) : ?>
				<div class="brands-logo_item col-md-2 col-sm-3 col-6">
					<img src="<?php echo get_field('logo_5') ?>" />
				</div>
			<?php endif; ?>
			
			<?php if(get_field('logo_6')) : ?>
				<div class="brands-logo_item col-md-2 col-sm-3 col-6">
					<img src="<?php echo get_field('logo_6') ?>" />
				</div>
		 	<?php endif; ?>
            
        </div>
    </div>
</section>