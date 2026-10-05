</main>
<footer class="footer">
  <div>
    <a class="brand" href="index.php"><span class="brand-mark">◉</span>AquaWorld</a>
    <p>Curious minds. Living oceans. Experience the wonder of the underwater world.</p>
  </div>
  <div>
    <strong>Explore</strong>
    <a href="animals.php">Animals</a>
    <a href="exhibits.php">Exhibits</a>
    <a href="gallery.php">Gallery</a>
    <a href="visit.php">Visit</a>
  </div>
  <div>
    <strong>Connect</strong>
    <a href="about.php">About Us</a>
    <a href="conservation.php">Conservation</a>
    <a href="tickets.php">Tickets</a>
  </div>
  <div class="footer-bottom">
    <span>&copy; <?= date('Y') ?> AquaWorld Aquarium. All rights reserved.</span>
    <span>Made with care for the ocean.</span>
  </div>
</footer>
<script>
  const toggle = document.getElementById('menuToggle');
  const nav = document.getElementById('mainNav');
  const overlay = document.getElementById('navOverlay');
  const header = document.getElementById('siteHeader');

  function closeMenu() {
    toggle.classList.remove('open');
    nav.classList.remove('open');
    overlay.classList.remove('show');
    document.body.style.overflow = '';
  }

  toggle.addEventListener('click', () => {
    const isOpen = nav.classList.toggle('open');
    toggle.classList.toggle('open', isOpen);
    overlay.classList.toggle('show', isOpen);
    document.body.style.overflow = isOpen ? 'hidden' : '';
  });

  overlay.addEventListener('click', closeMenu);
  nav.querySelectorAll('a').forEach(a => a.addEventListener('click', closeMenu));

  window.addEventListener('scroll', () => {
    header.classList.toggle('scrolled', window.scrollY > 20);
  }, { passive: true });
</script>
</body>
</html>
