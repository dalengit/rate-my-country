<?php
require_once '../src/DataProvider/db.php';
require_once  '../src/classes/checkIn.php';

//Pull from DB and Hydrate Class
$id = '1';

$stmt = $conn->prepare('SELECT id, productid, name, country, food, weather, people, review, overall, submitted FROM `checkins` WHERE `productid` = :id ORDER BY id DESC LIMIT 3');
$stmt->execute(['id' => $id]);

$checkins = $stmt->fetchAll(PDO::FETCH_CLASS, checkIn::class);

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'templates/header.php'?>
    <title>My Country</title>

</head>
<body>
<!-- Navigation bar -->
<?php include 'templates/navbar.php'?>

<section class="home">
    <div class="container text-center py-5">
        <div class="row">
            <div class="col-md-7">
            <div class="home-text">
                <h1>Rate Your Country!</h1>
                <p>The World's first country review website, submit a review of your country and see what other say about your country.</p>
                <div class="home-btn">
                    <a href="submission.php" class="btn btn-outline-dark">Rate Your Country!</a>
                </div>
            </div>
            </div>
            <div class="col-md-5 col-sm-4">
                <div class="home-img">
                    <img src="/project/images/marginalia-1196.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about">
    <div class="container text-center py-5 my-5">
        <div class="row">
            <div class="col-md-5 col-sm-4">
                <div class="about-img">
                    <img class="logo-image" src="/project/images/MyCountry.svg" alt="">
                </div>
            </div>
            <div class="col-md-7">
                <div class="about-text">
                    <h1>We're MyCountry!</h1>
                    <h6>About Us &#x1F331</h6>
                    <p>Here at My Country, we want to bring out the best in people. By allowing users to
                        reveal their experience in the country they are from, we can connect to each other
                        on a global scale! Allowing your country to become <strong>MyCountry</strong> &#x1F30D  </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="reviews">
    <div class="container text-center py-5 my-5">
        <div class="row">
            <h1 class="py-2">Recent Reviews</h1>
        <?php foreach ($checkins as $i => $checkIn): ?>
            <div class="card my-5 p-4 border-2 mx-auto" style="width: 20rem; height: 20rem;">
                <h3 class="py-2"><?= $checkIn->country; ?></h3>
                <p>The food is <strong><?= $checkIn->food; ?></strong></p>
                <p>The weather is <strong><?= $checkIn->weather; ?></strong></p>
                <p>The people are <strong><?= $checkIn->people; ?></strong></p>
                <p><strong><?= $checkIn->name; ?></strong> - <i>"<?= $checkIn->review; ?>"</i></p>
                <h4>Score: <?= $checkIn->overall;?>/5</h4>
            </div>
        <?php endforeach; ?>
        </div>
        <div class="row">
            <div class="home-btn">
            <a href="review.php" class="btn btn-outline-dark mx-auto">See More!</a>
            </div>
        </div>
    </div>
</section>

<?php include 'templates/footer.php'?>
</body>
</html>