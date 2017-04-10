<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="logo pull-left" href="/">
				Andy<span>Pattenden</span>
			</a>

			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		    	<span class="icon-list"></span>
		    </a>

		    <div class="nav-collapse collapse">
				<ul class="nav">
					<?php foreach($nav_items as $nav_item => $value) : ?>
						<li class="<?php echo $nav_item; ?> <?php if($p == $nav_item): ?>active<?php endif; ?>">
							<a href="<?php echo ($p === '404' ? '/' : '').$value['link'] ?>">
								<?php if($nav_item === 'home'): ?>
									<span class="icon-house"></span>
									<span class="hide">
								<?php endif; ?>
									<?php echo $value['text'] ?>
								<?php if($nav_item === 'home'): ?>
									</span>
								<?php endif; ?>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
		    </div>
		</div>
	</div>
</div>