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
                                        Phone: +57 4 2682668 <br>
                                        <a target="_blank" class="accomodation-detail" href="https://www.hostelbookers.com/hostels/colombia/medellin/44698/">
                                            Hostel Info &nbsp;<i class="fas fa-external-link-alt"></i>
                                        </a>
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

                <div class="itinerary__sheet__item">
                    <h4 class="itinerary__sheet__item__title">
                        <span class="d-inline-block pr-2"><i class="far fa-calendar-alt"></i></span>9th - 11th June
                    </h4>

                    <div class="accordion" id="itinerary-accordion-4">
                        <div class="card">
                            <div class="card-header card-header--accomodation" id="item4-heading">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn--travel card--btn" type="button" data-toggle="collapse" data-target="#item4" aria-expanded="true" aria-controls="item4">
                                        Country House Hostel <span><i class="fas fa-hotel"></i></span>
                                    </button>
                                </h2>
                            </div>

                            <div id="item4" class="collapse multi-collapse" aria-labelledby="item3-heading" data-parent="#itinerary-accordion-4">
                                <div class="card-body">
                                    <p class="accomodation-info">
                                        Address: Playa hermosa Guatape Guatape - San Rafael, 053840 Guatapé, Colombia <br>
                                        Phone: +573187594112 <br>
                                        <a target="_blank" class="accomodation-detail"
                                           href="https://www.booking.com/hotel/co/country-house-hostel.en-gb.html">
                                            Hostel Info &nbsp;<i class="fas fa-external-link-alt"></i>
                                        </a>
                                    </p>
                                    <p class="accomodation-check">
                                        <strong><i class="far fa-calendar-check"></i></strong>&nbsp; Fri 14th June <br>
                                        <strong><i class="far fa-calendar-times"></i></strong>&nbsp; Sun 16th June
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="itinerary__sheet__item">
                    <h4 class="itinerary__sheet__item__title">
                        <span class="d-inline-block pr-2"><i class="far fa-calendar-alt"></i></span>Sun 11th June
                    </h4>
                    <div class="accordion" id="itinerary-accordion-7">
                        <div class="card">
                            <div class="card-header" id="item7-heading">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn--travel card--btn" type="button" data-toggle="collapse" data-target="#item7" aria-expanded="true" aria-controls="item7">
                                        Medellin (MDE) > Santa Marta (SMR) <span><i class="fas fa-plane"></i></span>
                                    </button>
                                </h2>
                            </div>

                            <div id="item7" class="collapse multi-collapse" aria-labelledby="item7-heading" data-parent="#itinerary-accordion-7">
                                <div class="card-body">
                                    <span class="flight-number">8048 - Viva Air/Fast Colombia - Booking Ref: KYQD5A / Misc Ref: 20638396 / Ticket No.: 64108582593</span>
                                    <ul class="travel-steps">
                                        <li>
                                            15:49 Medellin (MDE)
                                        </li>
                                        <li>
                                            17:04 Santa Marta (SMR)
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="itinerary__sheet__item">
                    <h4 class="itinerary__sheet__item__title">
                        <span class="d-inline-block pr-2"><i class="far fa-calendar-alt"></i></span>11th - 14th June
                    </h4>

                    <div class="accordion" id="itinerary-accordion-8">
                        <div class="card">
                            <div class="card-header card-header--accomodation" id="item8-heading">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn--travel card--btn" type="button" data-toggle="collapse" data-target="#item8" aria-expanded="true" aria-controls="item8">
                                        Finca Barlovento <span><i class="fas fa-hotel"></i></span>
                                    </button>
                                </h2>
                            </div>

                            <div id="item8" class="collapse multi-collapse" aria-labelledby="item8-heading" data-parent="#itinerary-accordion-8">
                                <div class="card-body">
                                    <p class="accomodation-info">
                                        Address: Los Naranjos Beach, Troncal del Caribe, km 33, Santa Marta, Colombia <br>
                                        Phone: +57 314 626 9789 <br>
                                        <a target="_blank" class="accomodation-detail"
                                           href="https://fincabarlovento.com/">
                                            Hotel Info &nbsp;<i class="fas fa-external-link-alt"></i>
                                        </a>
                                    </p>
                                    <p class="accomodation-check">
                                        <strong><i class="far fa-calendar-check"></i></strong>&nbsp; Tues 11th June <br>
                                        <strong><i class="far fa-calendar-times"></i></strong>&nbsp; Fri 14th June
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="itinerary__sheet__item">
                    <h4 class="itinerary__sheet__item__title">
                        <span class="d-inline-block pr-2"><i class="far fa-calendar-alt"></i></span>Fri 14th June
                    </h4>
                    <div class="accordion" id="itinerary-accordion">
                        <div class="card">
                            <div class="card-header" id="item5-heading">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn--travel card--btn" type="button" data-toggle="collapse" data-target="#item5" aria-expanded="true" aria-controls="item5">
                                        Santa Marta > Mompox <span><i class="fas fa-bus-alt"></i></span>
                                    </button>
                                </h2>
                            </div>

                            <div id="item5" class="collapse multi-collapse" aria-labelledby="item5-heading" data-parent="#itinerary-accordion">
                                <div class="card-body">
                                    Roughly 6 hours of this...
                                    <img src="assets/img/scary-bus.jpg" alt="Scary Bus" class="img-fluid my-3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="itinerary__sheet__item">
                    <h4 class="itinerary__sheet__item__title">
                        <span class="d-inline-block pr-2"><i class="far fa-calendar-alt"></i></span>14th - 16th June
                    </h4>

                    <div class="accordion" id="itinerary-accordion-6">
                        <div class="card">
                            <div class="card-header card-header--accomodation" id="item6-heading">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn--travel card--btn" type="button" data-toggle="collapse" data-target="#item6" aria-expanded="true" aria-controls="item6">
                                        Casa Sinning. Año 1637 <span><i class="fas fa-hotel"></i></span>
                                    </button>
                                </h2>
                            </div>

                            <div id="item6" class="collapse multi-collapse" aria-labelledby="item6-heading" data-parent="#itinerary-accordion-6">
                                <div class="card-body">
                                    <p class="accomodation-info">
                                        Address: Calle 17A No 1A 39, 132560 Mompos, Colombia <br>
                                        Phone: +57 56855736 <br>
                                        <a target="_blank" class="accomodation-detail"
                                           href="https://www.booking.com/hotel/co/casa-sinning-boutique.en-gb.html">
                                            Hotel Info &nbsp;<i class="fas fa-external-link-alt"></i>
                                        </a>
                                    </p>
                                    <p class="accomodation-check">
                                        <strong><i class="far fa-calendar-check"></i></strong>&nbsp; Fri 14th June <br>
                                        <strong><i class="far fa-calendar-times"></i></strong>&nbsp; Sun 16th June
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="itinerary__sheet__item">
                    <h4 class="itinerary__sheet__item__title">
                        <span class="d-inline-block pr-2"><i class="far fa-calendar-alt"></i></span>16th June
                    </h4>
                    <div class="accordion" id="itinerary-accordion-9">
                        <div class="card">
                            <div class="card-header" id="item9-heading">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn--travel card--btn" type="button" data-toggle="collapse" data-target="#item9" aria-expanded="true" aria-controls="item9">
                                        Mompox > Cartagena <span><i class="fas fa-bus-alt"></i></span>
                                    </button>
                                </h2>
                            </div>

                            <div id="item9" class="collapse multi-collapse" aria-labelledby="item9-heading" data-parent="#itinerary-accordion-9">
                                <div class="card-body">
                                    Another 6 hours of...
                                    <img src="assets/img/scary-bus.jpg" alt="Scary Bus" class="img-fluid my-3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="itinerary__sheet__item">
                    <h4 class="itinerary__sheet__item__title">
                        <span class="d-inline-block pr-2"><i class="far fa-calendar-alt"></i></span>16th - 19th June
                    </h4>

                    <div class="accordion" id="itinerary-accordion-10">
                        <div class="card">
                            <div class="card-header card-header--accomodation" id="item10-heading">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn--travel card--btn" type="button" data-toggle="collapse" data-target="#item10" aria-expanded="true" aria-controls="item10">
                                        Hotel Casa Quero <span><i class="fas fa-hotel"></i></span>
                                    </button>
                                </h2>
                            </div>

                            <div id="item10" class="collapse multi-collapse" aria-labelledby="item10-heading" data-parent="#itinerary-accordion-10">
                                <div class="card-body">
                                    <p class="accomodation-info">
                                        Address: Calle Quero, 9 - 53, San Diego, 130015 Cartagena de Indias, Colombia <br>
                                        Phone: +57 5 6646328 <br>
                                        <a target="_blank" class="accomodation-detail"
                                           href="https://www.booking.com/hotel/co/casa-quero.en-gb.html">
                                            Hotel Info &nbsp;<i class="fas fa-external-link-alt"></i>
                                        </a>
                                    </p>
                                    <p class="accomodation-check">
                                        <strong><i class="far fa-calendar-check"></i></strong>&nbsp; Sun 16th June <br>
                                        <strong><i class="far fa-calendar-times"></i></strong>&nbsp; Wed 19th June
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="itinerary__sheet__item">
                    <h4 class="itinerary__sheet__item__title">
                        <span class="d-inline-block pr-2"><i class="far fa-calendar-alt"></i></span>Wed 19th June
                    </h4>
                    <div class="accordion" id="itinerary-accordion-11">
                        <div class="card">
                            <div class="card-header" id="item11-heading">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn--travel card--btn" type="button" data-toggle="collapse" data-target="#item11" aria-expanded="true" aria-controls="item11">
                                        Bogota (BOG) > London (LHR) <span><i class="fas fa-plane"></i></span>
                                    </button>
                                </h2>
                            </div>

                            <div id="item11" class="collapse multi-collapse" aria-labelledby="item11-heading" data-parent="#itinerary-accordion-11">
                                <div class="card-body">
                                    <span class="flight-number">AF 0429 - Air France - Booking Ref: SOT4AT</span>
                                    <ul class="travel-steps">
                                        <li>
                                            23:55 Bogota, Eldorado(BOG), Terminal 1
                                        </li>
                                        <li>
                                            +1 day 17:20 Paris, Charles de Gaulle(CDG), Terminal 2E
                                        </li>
                                    </ul>
                                    <p class="travel-step--text">Connection in Paris : 03h35</p>
                                    <span class="flight-number">AF 1380 - Air France</span>
                                    <ul class="travel-steps">
                                        <li>
                                            20:55 Paris, Charles de Gaulle (CDG), Terminal 2E
                                        </li>
                                        <li>
                                            21:20 London, Heathrow (LHR), Terminal 4
                                        </li>
                                    </ul>
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
