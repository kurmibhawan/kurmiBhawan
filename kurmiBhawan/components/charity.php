<?php
$donors = [
    ["img"=>"images/d1.jpg","name"=>"Rohit Sharma","desc"=>"₹5000 donated for education"],
    ["img"=>"images/d2.jpg","name"=>"Anjali Verma","desc"=>"Books donated"],
    ["img"=>"images/d3.jpg","name"=>"Amit Singh","desc"=>"₹2000 for help"],
    ["img"=>"images/d4.jpg","name"=>"Neha Gupta","desc"=>"Clothes donation"],
    ["img"=>"images/d5.jpg","name"=>"Rahul Yadav","desc"=>"₹10000 support"],
    ["img"=>"images/d6.jpg","name"=>"Priya Mehta","desc"=>"Food donation"]
];
?>

<section class="charity-section">
    <h2>Our <span>Donors</span></h2>

    <div class="charity-carousel">

        <div class="charity-track" id="charityTrack">

            <?php foreach($donors as $d): ?>
                <div class="donor-card">
                    <img src="<?= $d['img'] ?>">
                    <div class="donor-content">
                        <h3><?= $d['name'] ?></h3>
                        <p><?= $d['desc'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>

    </div>
</section>