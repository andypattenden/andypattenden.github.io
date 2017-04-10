<div class="header">
	<div class="header-inner">
		<div class="container">
			<?php include('nav.php'); ?>
		</div>
	</div>
</div>

<div id="home" class="masthead <?php if($p === '404') : ?>grayscale<?php endif; ?>">
	<div class="masthead-inner">
		<div class="content container">
			<h1>
			<?php if($p === '404') : ?>
				<span class="block">Oops<span class="amp">!</span></span>
				That page could not be found.
			<?php else: ?>
				Hello, I'm Andy and I
				<span class="block">design <span class="amp">&amp;</span> build</span>
				clean and modern websites
			<?php endif; ?>
			</h1>
		</div>
	</div>
</div>

