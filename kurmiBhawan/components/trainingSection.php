<?php
$links = [
  ["label" => "प्रशिक्षण कैलेंडर", "icon" => "calendar"],
  ["label" => "सक्रिय पाठ्यक्रम", "icon" => "book"],
  ["label" => "आगामी पाठ्यक्रम", "icon" => "screen"],
  ["label" => "ट्रेनिंग पोर्टल", "icon" => "monitor"],
  ["label" => "मिशन कर्मयोगी", "icon" => "location"],
  ["label" => "सेवोत्तम सेल", "icon" => "network"],
  ["label" => "सी.जी.जी. सेल", "icon" => "grid"],
  ["label" => "महत्वपूर्ण लिंक", "icon" => "links"]
];
?>

<div class="links-section">
  <div class="links-grid">

    <?php foreach ($links as $item): ?>
      <a href="#" class="link-item">
        <div class="icon-wrap">
          <div class="icon-inner">

            <?php
            switch($item['icon']) {

              case "calendar": ?>
                <svg viewBox="0 0 24 24">
                  <rect x="3" y="4" width="18" height="18" rx="2"/>
                  <line x1="16" y1="2" x2="16" y2="6"/>
                  <line x1="8" y1="2" x2="8" y2="6"/>
                  <line x1="3" y1="10" x2="21" y2="10"/>
                </svg>
              <?php break;

              case "book": ?>
                <svg viewBox="0 0 24 24">
                  <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/>
                  <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5z"/>
                </svg>
              <?php break;

              case "monitor": ?>
                <svg viewBox="0 0 24 24">
                  <rect x="2" y="3" width="20" height="14" rx="2"/>
                  <line x1="12" y1="17" x2="12" y2="21"/>
                </svg>
              <?php break;

              default: ?>
                <svg viewBox="0 0 24 24">
                  <circle cx="12" cy="12" r="5"/>
                </svg>
            <?php } ?>

          </div>
        </div>

        <span class="link-label"><?= $item['label']; ?></span>
      </a>
    <?php endforeach; ?>

  </div>
</div>