<header id="navbar">
  <div>
    <nav class="menu">
      <?php
      if ($detect->isMobile() && !$detect->isTablet()) {
          echo "<a href='/sauce/layout/boutique_mobile.php'>Products</a>";
      } else {
          echo "<a href='/sauce/layout/boutique.php'>Products</a>";
      }
      ?>
      <a href="#"> Community </a>
      <a href="/sauce/index.php"> About us</a>
    </nav>
    <div class="logo">
      <p class="bold_white">Sauce<strong>.</strong></p>
    </div>
    <div class="account_cart">
      <svg id="account" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 48C141.6 48 48 141.6 48 256s93.6 208 208 208 208-93.6 208-208S370.4 48 256 48zm0 62.4c34.3 0 62.4 28.1 62.4 62.4s-28.1 62.4-62.4 62.4-62.4-28.1-62.4-62.4 28.1-62.4 62.4-62.4zm0 300.4c-52 0-97.8-27-124.8-66.6 1-41.6 83.2-64.5 124.8-64.5s123.8 22.9 124.8 64.5c-27 39.5-72.8 66.6-124.8 66.6z" fill="#fff"/></svg>
      <svg id="cart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><style>.st0{fill:#fff}</style><path class="st0" d="M15.7 20.1c1.1 0 2-.9 2-2v-7.8C17.7 6.8 20.5 4 24 4s6.3 2.8 6.3 6.3v7.8c0 1.1.9 2 2 2s2-.9 2-2v-7.8C34.4 4.6 29.8 0 24.1 0c-5.7 0-10.3 4.6-10.3 10.3v7.8c-.1 1.1.8 2 1.9 2z"/><path class="st0" d="M47 15.6H36.4v2.5c0 2.2-1.8 4-4 4s-4-1.8-4-4v-2.5h-8.6v2.5c0 2.2-1.8 4-4 4s-4-1.8-4-4v-2.5H1c-.6 0-.9.4-.8 1l7 28.5C7.7 46.7 9.3 48 11 48h26c1.7 0 3.3-1.3 3.8-2.9l7-28.5c.1-.5-.2-1-.8-1z"/></svg>
    </div>
  </div>
</header>
