<?php

require_once '../src/DataProvider/db.php';

//Pull from DB and Hydrate Class

$id = '1';

class checkIn
{
    public int $id;
    public int $productid;
    public string $name;
    public string $mugname;
    public int $rating;
    public string $review;
    public string $submitted;
}

$stmt = $conn->prepare('SELECT id, productid, name, mugname, rating, review, submitted FROM `rmm` WHERE `productid` = :id');
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
<div class="container p-5">
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
                    <h4><?= $checkIn->mugname; ?></h4>
                    <p>Mug Name: <?= $checkIn->name; ?></p>
                    <p>Rating: <?= $checkIn->rating; ?></p>
                    <p>Review: <?= $checkIn->review; ?></p>
                    <aside>Date Posted: <?= $checkIn->submitted; ?></aside>
                </div>
            <?php endforeach; ?>
</div>
<?php include 'templates/footer.php'?>
</body>
</html>


