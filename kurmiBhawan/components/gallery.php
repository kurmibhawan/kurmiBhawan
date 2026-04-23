<?php
$gallery = [
    ["img"=>"https://petapixel.com/assets/uploads/2023/03/fusionofheliosfeature-550x288.jpg","title"=>"Academy Meeting"],
    ["img"=>"https://images.unsplash.com/photo-1575936123452-b67c3203c357?fm=jpg&q=60&w=3000&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aW1hZ2V8ZW58MHx8MHx8fDA%3D","title"=>"Training Batch"],
    ["img"=>"images/g3.jpg","title"=>"IAS Programme"],
    ["img"=>"images/g4.jpg","title"=>"Award Ceremony"],
    ["img"=>"images/g5.jpg","title"=>"Plantation Drive"],
    ["img"=>"images/g6.jpg","title"=>"Public Event"],
    ["img"=>"images/g7.jpg","title"=>"Conference Hall"],
    ["img"=>"images/g8.jpg","title"=>"Workshop Session"]
];
?>

<section class="gallery-section">
    <h2>Academy <span>Gallery</span></h2>

    <div class="gallery-grid">
        <?php foreach($gallery as $item): ?>
        <div class="gallery-card">
            <img src="<?= $item['img'] ?>" alt="">
            
            <div class="gallery-overlay">
                <p><?= $item['title'] ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>