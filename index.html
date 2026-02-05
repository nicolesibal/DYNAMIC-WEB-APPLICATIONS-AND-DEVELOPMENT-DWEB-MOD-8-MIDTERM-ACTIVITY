<?php
date_default_timezone_set("Asia/Manila");
$IMAGE_PATH = "images/";
$statuses = ["Boarding", "Delayed", "Cancelled"];
$gate = [1, 2, 3, 4, 5, 6];

function getRandomStatus($statuses) {
    return $statuses[array_rand($statuses)];
}

function getRandomGate($gate) {
    return $gate[array_rand($gate)];
}

/* INTERNATIONAL FLIGHTS DATA */

$flightsInternational = [
    [
        "img" => "tokyo.jpg",
        "from" => "MNL",
        "to" => "TKO",
        "fromCity" => "Manila, Philippines",
        "toCity" => "Tokyo, Japan",
        "flightNo" => "PR 2831",
        "airline" => "Philippine Airlines (PAL)",
        "originTZ" => "Asia/Manila",
        "destTZ" => "Asia/Tokyo",
        "departure" => "2026-01-22 10:00:00",
        "duration" => 240
    ],
    [
        "img" => "hanoi.jpg",
        "from" => "MNL",
        "to" => "HAN",
        "fromCity" => "Manila, Philippines",
        "toCity" => "Hanoi, Vietnam",
        "flightNo" => "PR 1927",
        "airline" => "Cathay Pacific (CATHAY)",
        "originTZ" => "Asia/Manila",
        "destTZ" => "Asia/Bangkok",
        "departure" => "2026-01-22 11:30:00",
        "duration" => 210
    ],
    [
        "img" => "amsterdam.jpg",
        "from" => "MNL",
        "to" => "AMS",
        "fromCity" => "Manila, Philippines",
        "toCity" => "Amsterdam, Netherlands",
        "flightNo" => "PR 2106",
        "airline" => "Etihad Airways (ETH)",
        "originTZ" => "Asia/Manila",
        "destTZ" => "Europe/Amsterdam",
        "departure" => "2026-01-22 08:00:00",
        "duration" => 1020
    ],
    [ 
        "img" => "geneva.jpeg",
        "from" => "MNL",
        "to" => "GVA",
        "fromCity" => "Manila, Philippines",
        "toCity" => "Geneva, Switzerland",
        "flightNo" => "PR 1962",
        "airline" => "Emirates (EK)",
        "originTZ" => "Asia/Manila",
        "destTZ" => "Europe/Zurich",
        "departure" => "2026-01-22 08:00:00",
        "duration" => 1300
    ],
    [
        "img" => "milan.jpg",
        "from" => "MNL",
        "to" => "MXP",
        "fromCity" => "Manila, Philippines",
        "toCity" => "Milan, Italy",
        "flightNo" => "PR 1968",
        "airline" => "Qantas Airlines (QF)",
        "originTZ" => "Asia/Manila",
        "destTZ" => "Europe/Rome",
        "departure" => "2026-01-22 08:00:00",
        "duration" => 1030
    ]
];

/* DOMESTIC FLIGHTS DATA */

$flightsDomestic = [
    [
        "img" => "siargao.jpg",
        "from" => "MNL",
        "to" => "IAO",
        "fromCity" => "Manila, Philippines",
        "toCity" => "Siargao, Philippines",
        "flightNo" => "DF 2387",
        "airline" => "Cebu Pacific (CEB)",
        "originTZ" => "Asia/Manila",
        "destTZ" => "Asia/Manila",
        "departure" => "2026-01-22 08:00:00",
        "duration" => 120
    ],
    [
        "img" => "cebu.jpg",
        "from" => "MNL",
        "to" => "CEB",
        "fromCity" => "Manila, Philippines",
        "toCity" => "Cebu, Philippines",
        "flightNo" => "DF 2388",
        "airline" => "Cebu Pacific (CEB)",
        "originTZ" => "Asia/Manila",
        "destTZ" => "Asia/Manila",
        "departure" => "2026-01-22 09:00:00",
        "duration" => 80
    ],
    [
        "img" => "palawan.jpg",
        "from" => "MNL",
        "to" => "PLW",
        "fromCity" => "Manila, Philippines",
        "toCity" => "Palawan, Philippines",
        "flightNo" => "DF 2389",
        "airline" => "Jetstar (JST)",
        "originTZ" => "Asia/Manila",
        "destTZ" => "Asia/Manila",
        "departure" => "2026-01-22 10:00:00",
        "duration" => 90
    ],
    [
        "img" => "bohol.jpg",
        "from" => "MNL",
        "to" => "BOH",
        "fromCity" => "Manila, Philippines",
        "toCity" => "Bohol, Philippines",
        "flightNo" => "DF 2390",
        "airline" => "Philippine Airlines (PAL)",
        "originTZ" => "Asia/Manila",
        "destTZ" => "Asia/Manila",
        "departure" => "2026-01-22 10:00:00",
        "duration" => 80
    ],
    [
        "img" => "boracay.jpg",
        "from" => "MNL",
        "to" => "BOR",
        "fromCity" => "Manila, Philippines",
        "toCity" => "Boracay, Philippines",
        "flightNo" => "DF 2391",
        "airline" => "Philippine Airlines (PAL)",
        "originTZ" => "Asia/Manila",
        "destTZ" => "Asia/Manila",
        "departure" => "2026-01-22 10:00:00",
        "duration" => 85
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Schedule</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<?php include 'header.php'; ?>

<header class="header-section">
    <h1>International Departures</h1>
</header>

<main>
    <div class="card-grid">
        <?php foreach ($flightsInternational as $flight): 
            $status = getRandomStatus($statuses);
            $selectedGate = getRandomGate($gate);
            $dep = new DateTime($flight["departure"], new DateTimeZone($flight["originTZ"]));
            $arr = clone $dep;
            $arr->add(new DateInterval("PT{$flight['duration']}M"));
            $arr->setTimezone(new DateTimeZone($flight["destTZ"]));
            $diff = $dep->diff($arr);
        ?>
        <div class="flight-card">
            <img src="<?= $IMAGE_PATH . $flight['img'] ?>" alt="<?= $flight['toCity'] ?>">
            <div class="card-section">
                <h2><?= $flight['from'] ?> → <?= $flight['to'] ?></h2>
                <p>
                    From <?= $flight['fromCity'] ?> to <?= $flight['toCity'] ?><br>
                    <strong>Flight No. <?= $flight['flightNo'] ?></strong><br>
                    <?= $flight['airline'] ?><br>
                    <strong>🎫 Gate: </strong>
                    <span class="gate"><?= $selectedGate ?></span><br><br>
                    <strong>🛫 Departure:</strong> <?= $dep->format('M d, Y h:i A') ?> (<?= $flight['originTZ'] ?>)<br>
                    <strong>🛬 Arrival:</strong> <?= $arr->format('M d, Y h:i A') ?> (<?= $flight['destTZ'] ?>)<br>
                    <strong>⏱️ Duration:</strong> <?= ($diff->d*24 + $diff->h) ?>h <?= $diff->i ?>m<br>
                    <strong>🔴 Status:</strong>
                    <span class="status <?= strtolower($status) ?>"><?= $status ?></span><br><br>
                </p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <header class="header-section">
        <h1>Domestic Departures</h1>
    </header>

    <div class="card-grid">
        <?php foreach ($flightsDomestic as $flight): 
            $status = getRandomStatus($statuses);
            $selectedGate = getRandomGate($gate);
            $dep = new DateTime($flight["departure"], new DateTimeZone($flight["originTZ"]));
            $arr = clone $dep;
            $arr->add(new DateInterval("PT{$flight['duration']}M"));
            $arr->setTimezone(new DateTimeZone($flight["destTZ"]));
            $diff = $dep->diff($arr);
        ?>
        <div class="flight-card">
            <img src="<?= $IMAGE_PATH . $flight['img'] ?>" alt="<?= $flight['toCity'] ?>">
            <div class="card-section">
                <h2><?= $flight['from'] ?> → <?= $flight['to'] ?></h2>
                <p>
                    From <?= $flight['fromCity'] ?> to <?= $flight['toCity'] ?><br>
                    <strong>Flight No. <?= $flight['flightNo'] ?></strong><br>
                    <?= $flight['airline'] ?><br>
                    <strong>🎫 Gate: </strong>
                    <span class="gate"><?= $selectedGate ?></span><br><br>
                    <strong>🛫 Departure:</strong> <?= $dep->format('M d, Y h:i A') ?> (<?= $flight['originTZ'] ?>)<br>
                    <strong>🛬 Arrival:</strong> <?= $arr->format('M d, Y h:i A') ?> (<?= $flight['destTZ'] ?>)<br>
                    <strong>⏱️ Duration:</strong> <?= ($diff->d*24 + $diff->h) ?>h <?= $diff->i ?>m<br>
                    <strong>🔴 Status:</strong>
                    <span class="status <?= strtolower($status) ?>"><?= $status ?></span><br><br>
                </p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    </div> <!-- End of Domestic card-grid -->

    <!-- OTHER TIMEZONES SECTION -->
    <div class="header-section">
        <h1>Current Time in Other Timezones</h1>
    </div>

    <div class="card-grid">
        <?php
        $timezones = [
            "Asia/Tokyo" => "Tokyo, Japan",
            "Asia/Bangkok" => "Bangkok, Thailand",
            "Europe/Amsterdam" => "Amsterdam, Netherlands",
            "Europe/Zurich" => "Zurich, Switzerland",
            "Europe/Rome" => "Rome, Italy",
            "Asia/Manila" => "Manila, Philippines"
        ];

        foreach ($timezones as $tz => $city) :
            $time = new DateTime("now", new DateTimeZone($tz));
        ?>
        <div class="flight-card">
            <div class="card-section">
                <h2><?= $city ?></h2>
                <p>
                    Current Time:<br>
                    <strong><?= $time->format('M d, Y h:i A') ?></strong>
                </p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>


<?php include 'footer.php'; ?>

</body>
</html>
