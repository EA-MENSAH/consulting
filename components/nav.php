<?php
  // Get the current file name, e.g. "about.php"
  $current_page = basename($_SERVER['PHP_SELF']);
?>

<nav id="navmenu" class="navmenu">
  <ul>
    <li><a href="index.php" class="<?= ($current_page == 'index.php') ? 'active' : '' ?>">Home</a></li>
    <li><a href="about.php" class="<?= ($current_page == 'about.php') ? 'active' : '' ?>">About</a></li>
    <li><a href="services.php" class="<?= ($current_page == 'services.php') ? 'active' : '' ?>">Services</a></li>
    <li><a href="projects.php" class="<?= ($current_page == 'projects.php') ? 'active' : '' ?>">Projects</a></li>
    <li><a href="research.php" class="<?= ($current_page == 'research.php') ? 'active' : '' ?>">Research</a></li>

    <li class="dropdown">
      <a href="#" class="<?= in_array($current_page, ['ceo.php', 'team.php', 'gallery.php', 'publications.php']) ? 'active' : '' ?>">
        <span>Us</span> <i class="bi bi-chevron-down toggle-dropdown"></i>
      </a>
      <ul>
        <li><a href="ceo.php" class="<?= ($current_page == 'ceo.php') ? 'active' : '' ?>">CEO</a></li>
        <li><a href="team.php" class="<?= ($current_page == 'team.php') ? 'active' : '' ?>">Team</a></li>
        <li><a href="gallery.php" class="<?= ($current_page == 'gallery.php') ? 'active' : '' ?>">Gallery</a></li>
        <li><a href="publications.php" class="<?= ($current_page == 'publications.php') ? 'active' : '' ?>">Publications</a></li>
      </ul>
    </li>

    <li><a href="contact.php" class="<?= ($current_page == 'contact.php') ? 'active' : '' ?>">Contact</a></li>
  </ul>

  <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>
