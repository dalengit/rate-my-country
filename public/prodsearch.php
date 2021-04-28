<?php

require_once '../src/DataProvider/db.php';
require_once '../src/classes/checkIn.php';

$searchTerm = '';

if(isset($_GET['search'])) {
    $searchTerm = $_GET['search'];
}

$stmt = $conn->prepare('SELECT * FROM checkins WHERE country LIKE :searchTerm');
$stmt->execute([
    'searchTerm' => '%' . $searchTerm . '%'
]);

$checkins = $stmt->fetchAll(PDO::FETCH_CLASS, checkIn::class);
?>
<!DOCTYPE html>
<html lang="en">
<head>    <?php include 'templates/header.php'?>
    <title>Product Search</title>
</head>
<body class="p-4">
<!-- Navigation bar -->
<?php include 'templates/navbar.php'?>
<?php include 'templates/topbutton.php' ?>
    <div class="container p-3">
        <div class="row">
            <div class="col-md-4 text-center mx-auto">
                <h3>Search for your country</h3>
                <form action="">
                    <input type="text" class="form-control my-4" name="search" value="<?= $searchTerm?>" required="required">
                    <input type="submit" class="btn btn-outline-dark">
                </form>
            </div>
        </div>
    </div>
    <div class="row m-5 px-5">
        <?php if(empty($checkins)){ ?>
            <div class="col-md-6 mx-auto my-2 text-center">
                <img src="../images/sadicon.svg" alt="" width="110" height=110">
                <h4 class="my-3">Uh oh... looks like there are no reviews for this country.</h4>
                <p>Why don't you leave one <a class="link-dark" href="submission.php">here!</a></p>
            </div>
        <?php }?>
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

