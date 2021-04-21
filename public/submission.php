<?php

require_once '../src/DataProvider/db.php';

$productAddedSuccess = false;
//Submit to DB
if (!empty($_POST)){

    $name = $_POST['name'];
    $mugName = $_POST['mugname'];
    $rating = $_POST['rating'];
    $review = $_POST['review'];
    $productId = $_POST['productid'];


    $stmt = $conn->prepare('INSERT INTO rmm (name, productid, mugname, rating, review) VALUES (:name, :productid, :mugname, :rating, :review)');

    $stmt->execute([
        'name' => $name,
        'productid' => $productId,
        'mugname' => $mugName,
        'rating' => $rating,
        'review' => $review
    ]);

    $productAddedSuccess = true;
}

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
    <title>Submit Your Mug</title>

</head>
<body>

<!-- Navigation bar -->
<?php include 'templates/navbar.php'?>

<div class="container">
    <h1>Submit Your Mug!</h1>
    <?php if ($productAddedSuccess): ?>
        <p class="alert alert-success">Product Added Successfully!</p>
    <?php endif; ?>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="picture">Upload a Picture</label>
            <input class="form-control" type="file" name="files[]" id="picture">
        </div>
        <div class="form-group">
            <label for="user-name">Name:</label>
            <input class="form-control" type="text" name="name" id="user-name">
        </div>
        <div class="form-group">
            <input type="hidden" id="1" value="1" name="productid">
            <label for="product-name">Mug Name:</label>
            <input class="form-control" type="text" name="mugname" id="product-name">
        </div>
        <div class="form-group">
            <label for="product-rating">Rating:</label>
            <select class="form-control" id="product-rating" name="rating">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-group">
            <label for="product-review">Review:</label>
            <textarea class="form-control" name="review" id="product-review" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
        <button type="submit" name="submit" value="upload" class="btn btn-success">Submit</button>
        </div>
    </form>
</div>

<div class="container">
    <!-- Loop which iterates through the local checkins array outputting all fields -->
    <?php foreach ($checkins as $i => $checkIn): ?>
        <div class="card my-4 p-3">
            <h4><?= $checkIn->name; ?></h4>
            <p>Mug Name: <?= $checkIn->mugname; ?></p>
            <p>Rating: <?= $checkIn->rating; ?></p>
            <p>Review: <?= $checkIn->review; ?></p>
            <aside>Date Posted: <?= $checkIn->submitted; ?></aside>
        </div>
    <?php endforeach; ?>
</div>



<?php include 'templates/footer.php'?>

</body>
</html>

