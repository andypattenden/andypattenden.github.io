<div class="heading">
	<div class="container">
		<h2>Brands</h2>
		<p class="lead">These are the brands that I have worked on over the past few years.</p>
	</div>
</div>
<div class="content container">
	<ul class="brand-list row-fluid">
	<?php foreach($brands as $brand => $value) : ?>
		<li class="xsmall-span12 small-span6 span4">
			<?php
				$class = strtolower(str_replace('&amp;', 'and', str_replace(' ', '-', $value['title'])));
			?>
			<?php if(isset($value['url'])): ?>
				<a class="<?php echo $class; ?>" href="<?php echo $value['url']; ?>">
			<?php else: ?>
				 <span class="<?php echo $class; ?>">
			<?php endif; ?>
				<?php echo $value['title']; ?>
			<?php if(isset($value['url'])): ?>
				</a>
			<?php else: ?>
				 </span>
			<?php endif; ?>
		</li>
	<?php endforeach; ?>
	</ul>
</div>