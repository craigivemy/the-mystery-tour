<?php include_once '../src/partials/header.php'; ?>
<div class="itinerary">
    <a href="/?back=true" class="custom-btn custom-btn--secondary custom-btn--med fixed-back">
        Back
    </a>
    <div class="container">
        <div class="row">
            <div class="col-10 col-md-8 mx-auto itinerary__sheet">
                <h1 class="itinerary__sheet--title">Itinerary</h1>
                <div class="my-4">
                    <button data-toggle="collapse" data-target=".multi-collapse"
                            aria-expanded="false"
                            id="js-expand-all-itinerary"
                            class="d-block ml-auto custom-btn custom-btn--med custom-btn--tertiary">Expand All</button>
                </div>

                <div class="itinerary__sheet__item">
                    <h4 class="itinerary__sheet__item__title">
                        <span class="d-inline-block pr-2"><i class="far fa-calendar-alt"></i></span>Thurs 6th June
                    </h4>
                    <div class="accordion" id="itinerary-accordion">
                        <div class="card">
                            <div class="card-header" id="item1-heading">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn--travel card--btn" type="button" data-toggle="collapse" data-target="#item1" aria-expanded="true" aria-controls="item1">
                                        London (LHR) > Bogota (BOG) <span><i class="fas fa-plane"></i></span>
                                    </button>
                                </h2>
                            </div>

                            <div id="item1" class="collapse multi-collapse" aria-labelledby="item1-heading" data-parent="#itinerary-accordion">
                                <div class="card-body">
                                    <span class="flight-number">KL 1000 - KLM - Booking Ref: SOT4AT</span>
                                    <ul class="travel-steps">
                                        <li>
                                            06:30 London Heathrow (LHR), Terminal 4
                                        </li>
                                        <li>
                                            09:00 Amsterdam, Schiphol (AMS)
                                        </li>
                                    </ul>
                                    <p class="travel-step--text">Connection in Amsterdam : 00h50</p>
                                    <span class="flight-number">KL 0749 - KLM</span>
                                    <ul class="travel-steps">
                                        <li>
                                            09:50 Amsterdam, Schiphol (AMS)
                                        </li>
                                        <li>
                                            13:40 Bogota, Eldorado (BOG), Terminal 1
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="itinerary__sheet__item">
                    <div class="accordion" id="itinerary-accordion-2">
                        <div class="card">
                            <div class="card-header" id="item2-heading">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn--travel card--btn" type="button" data-toggle="collapse" data-target="#item2" aria-expanded="true" aria-controls="item2">
                                        Bogota (BOG) > Medellin (BOG) <span><i class="fas fa-plane"></i></span>
                                    </button>
                                </h2>
                            </div>

                            <div id="item2" class="collapse multi-collapse" aria-labelledby="item2-heading" data-parent="#itinerary-accordion-2">
                                <div class="card-body">
                                    <span class="flight-number">LA4020 - LATAM Airlines/Colombia - Booking Ref: 52 027 624 / Reservation: LDXRKJ</span>
                                    <ul class="travel-steps">
                                        <li>
                                            16:59 Bogotá - El Dorado International (BOG)
                                        </li>
                                        <li>
                                            17:55 Medellín - José María Córdova International (MDE)
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="itinerary__sheet__item">
                    <h4 class="itinerary__sheet__item__title">
                        <span class="d-inline-block pr-2"><i class="far fa-calendar-alt"></i></span>6th - 9th June
                    </h4>

                    <div class="accordion" id="itinerary-accordion-3">
                        <div class="card">
                            <div class="card-header card-header--accomodation" id="item3-heading">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn--travel card--btn" type="button" data-toggle="collapse" data-target="#item3" aria-expanded="true" aria-controls="item3">
                                        Casa Kiwi Hostel <span><i class="fas fa-hotel"></i></span>
                                    </button>
                                </h2>
                            </div>

                            <div id="item3" class="collapse multi-collapse" aria-labelledby="item3-heading" data-parent="#itinerary-accordion-3">
                                <div class="card-body">
                                    <p class="accomodation-info">
                                        Address: Cra. 36 ##7-10, Medellín, Antioquia, Colombia <br>
                                        Phone: +57 4 2682668
                                    </p>
                                    <p class="accomodation-check">
                                        <strong><i class="far fa-calendar-check"></i></strong>&nbsp; Thurs 6th June <br>
                                        <strong><i class="far fa-calendar-times"></i></strong>&nbsp; Sun 9th June
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

<?php include_once '../src/partials/footer.php'; ?>
