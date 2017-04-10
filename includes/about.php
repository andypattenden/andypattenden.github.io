<?php

	$coding = array(
		'HTML5' => '90'
		, 'CSS3' => '90'
		, 'SASS' => '90'
		, 'JavaScript &amp; jQuery' => '80'
		, 'Apache Velocity' => '90'
		, 'PHP' => '60'
		, 'JSTL' => '90'
		//, 'Ruby' => '30'
		, 'Java' => '30'
		, 'Regular Expressions' => '60'
		, 'Node.js' => '60'
		, 'Shell Script (Bash)' => '60'
	);

	$creative = array(
		'Responsive Design' => '90'
		, 'Photoshop' => '50'
		, 'Fireworks' => '40'
	);
?>
<div class="heading">
	<div class="container">
		<h2>About me</h2>
		<p class="lead">
			I am a front-end developer and aspiring designer. I love to design &amp; create attractive, modern &amp; accessible websites.
		</p>
	</div>
</div>
<div class="content container">
	<div class="row-fluid">
		<div class="span4 text-center">
			<p><img class="profile" width="567" height="567" alt="Image of Andy Pattenden" src="/images/profile.jpg" /></p>
		</div>
		<div class="span8">
			<p>I'm currently working for the <a href="http://www.specialistholidays.com/">Specialist Holidays Group</a>, part of the <a href="http://www.tuigroup.com/en">TUI Group</a>, as a Front End Technical Lead.</p>
			<p>I enjoy spending my free time with my family as well as playing squash and going mountain biking. I have an interest in classic and retro cars and regularly enjoy visiting events to see them and meet other enthusiasts.</p>

			<h3>My Skills</h3>
			<p>These are my main skills that I'm continually looking to improve and add to. For a complete set of my skills, check out my <a title="LinkedIn" href="http://uk.linkedin.com/in/andypattenden/">LinkedIn
				</a> profile.</p>
			<?php /*<div class="rowFluid">
				<div class="span4">
					<h4>Coding</h4>
					<ul>
					<?php foreach($coding as $code => $level) : ?>
						<li><?php echo $code; ?></li>
					<?php endforeach; ?>
					</ul>
				</div>
				<div class="span4">
					<h5>Design</h5>
					<ul>
					<?php foreach($creative as $item => $level) : ?>
						<li><?php echo $item; ?></li>
					<?php endforeach; ?>
					</ul>
				</div>
			</div> */ ?>


			<div class="row-fluid">
				<div class="span5 small-span5 xsmall-span12">
					<h4>Coding</h4>

					<ul class="skills">
					<?php foreach($coding as $code => $level) : ?>
						<li>
							<?php echo $code; ?>
							<div class="bar">
								<span class="level level<?php echo $level; ?>">
									<span class="skill">
										<strong><?php echo $level; ?>%</strong>
									</span>
								</span>
							</div>
						</li>
					<?php endforeach; ?>
					</ul>

				</div>
				<div class="span5 small-span5 xsmall-span12 xsmall-offset0 offset2">
					<h4>Design</h4>
					<ul class="skills">
					<?php foreach($creative as $program => $level) : ?>
						<li>
							<?php echo $program; ?>
							<div class="bar">
								<span class="level level<?php echo $level; ?>">
									<span class="skill">
										<strong><?php echo $level; ?>%</strong>
									</span>
								</span>
							</div>
						</li>
					<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>