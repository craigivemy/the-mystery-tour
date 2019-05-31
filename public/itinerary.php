<?php include_once '../src/partials/header.php'; ?>
<div class="itinerary">
    <a href="/?back=true" class="custom-btn custom-btn--secondary custom-btn--med fixed-back">
        Back
    </a>
    <div class="container">
        <div class="row">
            <div class="col-10 col-md-8 mx-auto itinerary__sheet">
                <h1 class="itinerary__sheet--title">Itinerary</h1>

                <div class="itinerary__sheet__item">
                    <h4 class="itinerary__sheet__item__title">
                        <span class="d-inline-block pr-2"><i class="far fa-calendar-alt"></i></span>Thurs 6th June
                    </h4>
                    <div class="accordion" id="itinerary-accordion">
                        <div class="card">
                            <div class="card-header" id="item1-heading">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn--flight card--btn" type="button" data-toggle="collapse" data-target="#item1" aria-expanded="true" aria-controls="item1">
                                        London (LHR) -> Bogota (BOG) <span><i class="fas fa-plane"></i></span>
                                    </button>
                                </h2>
                            </div>

                            <div id="item1" class="collapse show" aria-labelledby="item1-heading" data-parent="#itinerary-accordion">
                                <div class="card-body">
                                    <span class="flight-number">KL 1000 - KLM</span>
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
            </div>
        </div>
    </div>
</div>

<?php include_once '../src/partials/footer.php'; ?>
