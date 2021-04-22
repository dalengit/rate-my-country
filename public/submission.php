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
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'templates/header.php'?>
    <title>Rate your Country!</title>

</head>
<body>

<!-- Navigation bar -->
<?php include 'templates/navbar.php'?>

<div class="container py-3">
    <div class="row">
        <div class="col-md-4 mx-auto">
    <h2>Submit Your Country!</h2>
    <?php if ($productAddedSuccess): ?>
        <p class="alert alert-light">Submitted successfully!</p>
    <?php endif; ?>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label class="label" for="user-name">Your Name</label>
            <input class="form-control" type="text" name="name" id="user-name" placeholder="Salvador Dali">
        </div>
        <div class="form-group">
            <input type="hidden" id="1" value="1" name="productid">
            <label class="label" for="product-name">Country</label>
            <input class="form-control" type="text" name="mugname" id="product-name" placeholder="France">
        </div>
        <div class="form-group">
            <label class="label" for="product-rating">Rating</label>
            <select class="form-control" id="product-rating" name="rating">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-group">
            <label class="label" for="product-review">Give your home a compliment!</label>
            <textarea class="form-control" name="review" id="product-review" cols="30" rows="10" placeholder="I love the food here!"></textarea>
        </div>
        <div class="form-group">
        <button type="submit" name="submit" value="upload" class="btn btn-outline-dark">Submit</button>
            <a href="review.php" class="btn btn-outline-dark">See Your Review</a>
        </div>
    </form>
        </div>
</div>
<?php include 'templates/footer.php'?>

</body>
</html>

