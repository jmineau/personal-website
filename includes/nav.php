<?php
$activePage = $activePage ?? '';
$navLinks = $navLinks ?? [
  ['key' => 'research', 'href' => 'research.php', 'label' => 'research'],
  ['key' => 'software', 'href' => 'software.php', 'label' => 'software'],
  ['key' => 'cv', 'href' => 'cv.pdf', 'label' => 'cv'],
];
?>
<nav>
  <a href="index.php">
    <h1>James K. Mineau</h1>
  </a>
  <div class="nav-links">
    <ul>
      <?php foreach ($navLinks as $item): ?>
        <li class="<?php echo $activePage === $item['key'] ? 'active' : ''; ?>">
          <a href="<?php echo htmlspecialchars($item['href']); ?>"><?php echo htmlspecialchars($item['label']); ?></a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</nav>