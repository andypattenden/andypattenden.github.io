<?php
	if(isset($_GET['project'])) {
		//$project = $_GET['project'];
	}
?>

<?php if(isset($project)) : ?>
	<div class="heading">
		<div class="container">
			<h2>><?php echo $projects[$project]['title']; ?> <small><?php echo $projects[$project]['subtitle']; ?></small></h2>
		</div>
	</div>
	<div class="content container">
		<div class="row-fluid">
			<div class="span8">
				<?php foreach($projects[$project]['screenshots'] as $screenshot) : ?>
					<img class="screenshot" src="/images/portfolio/<?php echo $screenshot; ?>" />
				<?php endforeach; ?>
			</div>
			<div class="span4">
				<p class="lead"><?php echo $projects[$project]['tagline']; ?></p>
				<p><?php echo $projects[$project]['text']; ?></p>

				<h4>Services provided</h4>
				<p class="services"><?php echo $projects[$project]['services']; ?></p>

			<?php if(isset($projects[$project]['url']) && $projects[$project]['url'] !== '') : ?>
				<a class="btn btn-primary" href="<?php echo $projects[$project]['url']; ?>">visit site <i class="icon-play-circle icon-white"></i></a>
			<?php endif; ?>
			</div>
		</div>
	</div>
<? else : ?>
	<div class="heading">
		<div class="container">
			<h2>Some of my most recent work</h2>
			<p class="lead">A selection of my recently completed projects. Projects range from simple static content sites to ecommerce websites.</p>
		</div>
	</div>
	<div class="content container">
		<ul class="recent-projects">
	<?php
		$counter = 1;
		foreach($projects as $project => $value) :
	?>
			<li class="project <?php echo $project; ?>">
				<h3 class="text-center"><?php echo $value['title']; ?></h3>
				<p class="lead text-center"><?php echo $projects[$project]['tagline']; ?></p>
				<div class="row-fluid">
					<div class="span8 text-center">
						<?php if(isset($projects[$project]['url']) && $projects[$project]['url'] !== '') : ?>
							<a href="<?php echo $projects[$project]['url']; ?>">
						<?php endif; ?>

						<img width="906" height="514" alt="Screen shot of <?php echo $value['title']; ?> website" src="/images/portfolio/home/<?php echo $value['screenshots'][0]; ?>" />

						<?php if(isset($projects[$project]['url']) && $projects[$project]['url'] !== '') : ?>
							</a>
						<?php endif; ?>
					</div>
					<div class="span4">
						<?php echo $projects[$project]['text']; ?>
						<h5>Services provided</h5>
						<p><?php echo $projects[$project]['services']; ?></p>
						<?php if(isset($projects[$project]['url']) && $projects[$project]['url'] !== '') : ?>
							<p><a class="view-site" href="<?php echo $projects[$project]['url']; ?>">Visit site</a></p>
						<?php endif; ?>
					</div>
				</div>
			</li>
	<?php
		$counter++;
		 endforeach;
	?>
		</ul>
	</div>
<?php endif; ?>