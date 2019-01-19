
<header id="navbar">

  <input id="burger" type="checkbox" />

  <label for="burger" class="burger_box">
      <span></span>
      <span></span>
      <span></span>
  </label>

  <nav id="menu">
    <ul>
      <li>
        <?php
        if ($detect->isMobile()) {
            echo "<a href='/sauce/layout/boutique_mobile.php'>Products</a>";
        } else {
            echo "<a href='/sauce/layout/boutique.php'>Products</a>";
        }
        ?>
      </li>
      <li>
        <a href="https://www.instagram.com/?hl=fr">Community</a>
      </li>
      <li>
        <a href="/sauce/index.php">About us</a>
      </li>
      <li>
        <a href="/sauce/layout/compte.php">My Account</a>
      </li>
    </ul>
  </nav>
  <div class="logo">
    <h1 class="bold_white">Sauce.</h1>
  </div>

  <svg id="cart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><style>.st0{fill:#fff}</style><path class="st0" d="M15.7 20.1c1.1 0 2-.9 2-2v-7.8C17.7 6.8 20.5 4 24 4s6.3 2.8 6.3 6.3v7.8c0 1.1.9 2 2 2s2-.9 2-2v-7.8C34.4 4.6 29.8 0 24.1 0c-5.7 0-10.3 4.6-10.3 10.3v7.8c-.1 1.1.8 2 1.9 2z"/><path class="st0" d="M47 15.6H36.4v2.5c0 2.2-1.8 4-4 4s-4-1.8-4-4v-2.5h-8.6v2.5c0 2.2-1.8 4-4 4s-4-1.8-4-4v-2.5H1c-.6 0-.9.4-.8 1l7 28.5C7.7 46.7 9.3 48 11 48h26c1.7 0 3.3-1.3 3.8-2.9l7-28.5c.1-.5-.2-1-.8-1z"/></svg>
</header>
