<?php
require_once '../config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="preload" href="/assets/css/styles.css" as="style">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body>
<?php include_once '../src/partials/tmpl-hero.php'; ?>
<!-- Medellin -->
<section id="section-1" class="locations-slider">
    <div class="location-block location-block--medellin">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <h4 class="location-block__subtitle">First stop</h4>
                    <h2 class="location-block__title">Medellin</h2>
                    <p class="location-block__dates">
                        6th - 9th June
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="location-block location-block--accommodation location-block--accommodation-medellin">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <h4 class="location-block__subtitle">Medellin - Accommodation</h4>
                    <h2 class="location-block__title">Casa Kiwi</h2>
                    <p class="location-block__dates">3 nights</p>
                </div>
            </div>
        </div>
    </div>
    <div class="location-block location-block--activities location-block--activities-medellin">
        <div class="container">
            <div class="row align-items-center">
                <div class="col text-center">
                    <h2 class="location-block__title">Activities</h2>
                    <p class="location-block__dates">
                        Cable Car, Botanical Gardens, Parks,
                        Beers, Dancing
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Guatape -->
<section id="section-2" class="locations-slider">
    <div class="location-block location-block--guatape">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <h4 class="location-block__subtitle">Short drive to...</h4>
                    <h2 class="location-block__title">Guatape</h2>
                    <p class="location-block__dates">
                        9th - 11th June
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="location-block location-block--accommodation location-block--accommodation-guatape">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <h4 class="location-block__subtitle">Guatape - Accommodation</h4>
                    <h2 class="location-block__title">Country House Hostel</h2>
                    <p class="location-block__dates">2 nights</p>
                </div>
            </div>
        </div>
    </div>
    <div class="location-block location-block--activities location-block--activities-guatape">
        <div class="container">
            <div class="row align-items-center">
                <div class="col text-center">
                    <h2 class="location-block__title">Activities</h2>
                    <p class="location-block__dates">
                        Moped exploring, lake-side chilling, Climb La Piedra del Penol
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tayrona -->
<section id="section-3" class="locations-slider">
    <div class="location-block location-block--tayrona">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <h4 class="location-block__subtitle">Parque Nacional Natural</h4>
                    <h2 class="location-block__title">Tayrona</h2>
                    <p class="location-block__dates">
                        11th - 14th June
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="location-block location-block--accommodation location-block--accommodation-tayrona">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <h4 class="location-block__subtitle">Tayrona - Accommodation</h4>
                    <h2 class="location-block__title">Finca Barlovento</h2>
                    <p class="location-block__dates">3 nights</p>
                </div>
            </div>
        </div>
    </div>
    <div class="location-block location-block--activities location-block--activities-tayrona">
        <div class="container">
            <div class="row align-items-center">
                <div class="col text-center">
                    <h2 class="location-block__title">Activities</h2>
                    <p class="location-block__dates">
                        Hike to beaches in the park, sweat profusely, return to chill at hotel
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

</div> <!-- /.content -->

<script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="assets/js/app.js"></script>

</body>
</html>

