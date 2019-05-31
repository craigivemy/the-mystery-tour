<?php
    $from_itinerary = isset($_GET['back']) ? (bool) $_GET['back'] : false;
?>
<section class="hero-overlay" style="<?= $from_itinerary ? 'display: none;' : false;?>">
    <div class="container">
        <div class="row align-items-center">
            <div class="col text-center">
                <span class="d-block">#themysterytour</span>
                <a id="js-ready-trigger" href="#" onclick="return false;" class="custom-btn custom-btn--primary mt-3 d-inline-block">I'm Ready</a>
            </div>
        </div>
    </div>
</section>
<div class="content" style="<?= !$from_itinerary ? 'display: none;' : false;?>">
    <section class="hero">
        <a href="/itinerary.php" class="custom-btn custom-btn--secondary custom-btn--med fixed-itinerary">
            Itinerary
        </a>
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <span>We are going to...</span>
                    <h1>
                    Colombia</h1>
                </div>
            </div>
        </div>
        <a class="down-arrow" href="#section-1"></a>
    </section>
