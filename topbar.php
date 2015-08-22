<?php $filename = basename($_SERVER['PHP_SELF']); ?>
		<div><nav class="top-bar contain-to-grid" data-topbar role="navigation">
  <ul class="title-area">
    <li>
    	<a href="index.php">
    	<img class="logo-small show-for-small-only" alt="logo" src="assets/logowhite.png" width="40">
    	<img class="show-for-medium-up" alt="logo" src="assets/logowhite.png" width="40">
    	</a>
    </li>
    <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
  </ul>

  <section class="top-bar-section">
  
 
    <!-- Left Nav Section -->
    <ul class="left">
      <li <?php if($filename == "index.php") echo 'class="active"'; ?>><a href="index.php">Home</a></li>
      <li <?php if($filename == "services.php") echo 'class="active"'; ?>><a href="services.php">Services</a></li>
      <li <?php if($filename == "testimonials.php") echo 'class="active"'; ?>><a href="testimonials.php">Testimonials</a></li>
      <li <?php if($filename == "projects.php") echo 'class="active"'; ?>><a href="projects.php">Projects</a></li>
      <li <?php if($filename == "contact.php") echo 'class="active"'; ?>><a href="contact.php">Contact</a></li>
    </ul>
  </section>
</nav></div>
		<script src="js/vendor/jquery.js">
		</script>
		<script src="js/foundation.min.js">
		</script>
		<script>
			$(document).foundation();
		</script>