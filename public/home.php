<?php
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
<?php include 'templates/footer.php'?>
</body>
</html>

<div class="col-md-8 mx-auto">
    <h2 class="recent-heading">Recent Reviews</h2>
    <!-- Loop which iterates through the local checkins array outputting all fields -->
    <?php foreach ($checkins as $i => $checkIn): ?>
        <div class="card my-4 p-3 border-2 recentrev">
            <h4><?= $checkIn->name; ?></h4>
            <p>Mug Name: <?= $checkIn->mugname; ?></p>
            <p>Rating: <?= $checkIn->rating; ?></p>
            <p>Review: <?= $checkIn->review; ?></p>
            <aside>Date Posted: <?= $checkIn->submitted; ?></aside>
        </div>
        <?php if (++$i > 1) break; endforeach; ?>
    <a href="review.php" class="btn btn-outline-dark">See more..</a>
</div>