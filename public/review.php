<?php

require_once '../src/DataProvider/db.php';

//Pull from DB and Hydrate Class

$id = '1';

class checkIn
{
    public int $id;
    public int $productid;
    public string $name;
    public string $country;
    public string $food;
    public string $weather;
    public string $people;
    public string $review;
    public int $overall;
    public string $submitted;
}

$stmt = $conn->prepare('SELECT id, productid, name, country, food, weather, people, review, overall, submitted FROM `checkins` WHERE `productid` = :id');
$stmt->execute(['id' => $id]);

$checkins = $stmt->fetchAll(PDO::FETCH_CLASS, checkIn::class);
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'templates/header.php'?>
    <title>Reviews</title>

</head>
<body>
<?php include 'templates/navbar.php'?>
<div class="container p-3">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>What have people been saying about their countries?</h2>
        </div>
    </div>
</div>
<div class="row">
            <!-- Loop which iterates through the local checkins array outputting all fields -->
            <?php foreach ($checkins as $i => $checkIn): ?>
                <div class="card my-4 p-3 border-2 mx-auto" style="width: 20rem;">
                    <h3 class="py-2"><?= $checkIn->country; ?></h3>
                    <p>The food is <strong><?= $checkIn->food; ?></strong></p>
                    <p>The weather is <strong><?= $checkIn->weather; ?></strong></p>
                    <p>The people are <strong><?= $checkIn->people; ?></strong></p>
                    <p><strong><?= $checkIn->name; ?></strong> - <i>"<?= $checkIn->review; ?>"</i></p>
                    <h4>Score: <?= $checkIn->overall;?>/5</h4>
                </div>
            <?php endforeach; ?>
</div>
<?php include 'templates/footer.php'?>
</body>
</html>

