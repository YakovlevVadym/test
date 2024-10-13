<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- * Title -->
  <title>Section 1</title>
  <?php wp_head(); ?>
</head>

<body>

  <!-- * Header -->
  <header class="header">
    <nav>
      <ul class="navigation">
        <li><a href="#">ÜBER UNS</a></li>
        <li><a href="#">ARBEITSZEIT</a></li>
        <li><a href="#">FAQ</a></li>
        <li class="logo-item">
          <img src="<?php bloginfo('template_url'); ?>/assets/logo.png" class="logo" />
        </li>
        <li><a href=" #">BEWERTUNGEN</a>
        </li>
        <li><a href="#">RESERVIEREN</a></li>
      </ul>
    </nav>
  </header>

  <div class="top-section">
    <div class="section">
      <div class="container">
        <h1 class="container-title">THE PLATE RESTAURANT</h1>
        <p class="container-text">Posuere facilisi quis faucibus mi egestas consequat. Id facilisi et egestas ornare ac
          vestibulum fusce diam
          donec. Pellentesque urna egestas urna sit leo vel. Pretium scelerisque est at pretium congue.</p>
        <!-- FIX -->
        <button type="button" class="reserve-button">Einen Tisch Reservieren </button>
      </div>
    </div>
    <div class="section">
      <!-- FIXED -->
      <?php
      if ($image && isset($image['sizes']['large'])):
        ?>
        <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
      <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/platelogo.png" alt="Plate Logo" />
      <?php endif; ?>
    </div>
  </div>

  <!-- Section 2 -->
  <div class="section-plate">
    <div class="plate-content">
      <div class="plate-title">THE PLATE 1</div>
      <div class="plate-text">Viverra viverra magna nunc nunc nulla porttitor sed.</div>
      <?php
      if ($image && isset($image['sizes']['large'])):
        ?>
        <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
      <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/plateone.png" alt="Plate one" />
      <?php endif; ?>
    </div>
    <div class="plate-content">
      <div class="plate-title">THE PLATE 2</div>
      <span class="plate-text">Viverra viverra magna nunc nunc nulla porttitor sed.</span>
      <?php
      if ($image && isset($image['sizes']['large'])):
        ?>
        <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
      <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/platetwo.png" alt="Plate one" />
      <?php endif; ?>
    </div>
    <div class="plate-content">
      <div class="circle-button">Zurück zum Anfang</div>
      <div class="plate-title">THE PLATE 3</div>
      <span class="plate-text">Viverra viverra magna nunc nunc nulla porttitor sed..</span>
      <?php
      if ($image && isset($image['sizes']['large'])):
        ?>
        <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
      <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/platethree.png" alt="Plate one" />
      <?php endif; ?>
    </div>
  </div>





</body>

</html>



<!-- <div class="left-section">
  <h1 class="section-title">The Plate Restaurant</h1>
  <p class="section-text">Posuere facilisi quis faucibus mi egestas consequat. Id facilisi et egestas ornare ac
    vestibulum fusce diam
    donec. Pellentesque urna egestas urna sit leo vel. Pretium scelerisque est at pretium congue.
  </p>
  <button type="button" class="reserve-button">
    <span>Einen Tisch Reservieren</span>
  </button>
</div> -->


<!-- 

<main class="top-section">
  <header class="header">
    <nav class="centered-nav">
      <ul class="horizontal-menu">
        <li><a href="#">ÜBER UNS</a></li>
        <li><a href="#">ARBEITSZEIT</a></li>
        <li><a href="#">FAQ</a></li>
        <li class="logo-item">
          <img src="<?php bloginfo('template_url'); ?>/assets/logo.png" class="logo" />
        </li>
        <li><a href=" #">BEWERTUNGEN</a>
        </li>
        <li><a href="#">RESERVIEREN</a></li>
      </ul>
    </nav>
  </header>
</main>
<section class="container">
  <div class="left-section">
    <h1 class="section-title">The Plate Restaurant</h1>

    <p class="section-text">Posuere facilisi quis faucibus mi egestas consequat. Id facilisi et egestas ornare ac
      vestibulum fusce diam
      donec. Pellentesque urna egestas urna sit leo vel. Pretium scelerisque est at pretium congue.
    </p>

    <button type="button" class="reserve-button">
      <span>Einen Tisch Reservieren</span>
    </button>
  </div>
  <div class="right-section">

  </div>
</section>


<main class="banner">
  <div class="wrapper banner-wrapper">

    <div class="banner-content">
      <h1 class="section-title">The Plate Restaurant</h1>
      <p class="section-text">
        Posuere facilisi quis faucibus mi egestas consequat. Id facilisi et egestas ornare ac
        vestibulum fusce diam
        donec. Pellentesque urna egestas urna sit leo vel. Pretium scelerisque est at pretium congue.
      </p>
      <button type="button" class="reserve-button">
        <span>Einen Tisch Reservieren</span>
      </button>
    </div>


    <div class="banner-image-block">
      <img src="<?php bloginfo('template_url'); ?>/assets/platelogo.png" />
    </div>
  </div>
</main> -->



<!-- <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script> -->