<?php

require_once '../src/DataProvider/db.php';

$productAddedSuccess = false;
//Submit to DB
if (!empty($_POST)){

    $name = $_POST['name'];
    $productId = $_POST['productid'];
    $country = $_POST['country'];
    $food = $_POST['food'];
    $weather = $_POST['weather'];
    $people = $_POST['people'];
    $review = $_POST['review'];
    $overall = $_POST['overall'];


    $stmt = $conn->prepare('INSERT INTO checkins (name, productid, country, food, weather, people, review, overall) VALUES (:name, :productid, :country, :food, :weather, :people, :review, :overall)');

    $stmt->execute([
        'name' => $name,
        'productid' => $productId,
        'country' => $country,
        'food' => $food,
        'weather' => $weather,
        'people' => $people,
        'review' => $review,
        'overall' => $overall
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
                <div class="form-group my-1">
                    <label class="label" for="user-name">Your Name</label>
                    <input class="form-control" type="text" name="name" id="user-name" placeholder="Salvador Dali" required="required">
                </div>
                <div class="form-group my-1">
                    <input type="hidden" id="1" value="1" name="productid">
                    <label class="label" for="product-rating">Country</label>
                    <select class="form-control" id="product-rating" name="country">
                        <option value="US">America</option>
                        <option value='Andorra'>Andorra &#U+1F1E7 U+1F1FF</option>
                        <option value='United Arab Emirates'>United Arab Emirates &#x1F1EA</option>
                        <option value='Afghanistan'>Afghanistan &#x1F1EB</option>
                        <option value='Antigua and Barbuda'>Antigua and Barbuda &#x1F1EC</option>
                        <option value='Anguilla'>Anguilla &#x1F1EE</option>
                        <option value='Albania'>Albania &#x1F1F1</option>
                        <option value='Armenia'>Armenia &#x1F1F2</option>
                        <option value='Angola'>Angola &#x1F1F4</option>
                        <option value='Antarctica'>Antarctica &#x1F1F6</option>
                        <option value='Argentina'>Argentina &#x1F1F7</option>
                        <option value='American Samoa'>American Samoa &#x1F1F8</option>
                        <option value='Austria'>Austria &#x1F1F9</option>
                        <option value='Australia'>Australia &#x1F1FA</option>
                        <option value='Aruba'>Aruba &#x1F1FC</option>
                        <option value='Åland Islands'>Åland Islands &#x1F1FD</option>
                        <option value='Azerbaijan'>Azerbaijan &#x1F1FF</option>
                        <option value='Bosnia and Herzegovina'>Bosnia and Herzegovina &#x1F1E6</option>
                        <option value='Barbados'>Barbados &#x1F1E7</option>
                        <option value='Bangladesh'>Bangladesh &#x1F1E9</option>
                        <option value='Belgium'>Belgium &#x1F1EA</option>
                        <option value='Burkina Faso'>Burkina Faso &#x1F1EB</option>
                        <option value='Bulgaria'>Bulgaria &#x1F1EC</option>
                        <option value='Bahrain'>Bahrain &#x1F1ED</option>
                        <option value='Burundi'>Burundi &#x1F1EE</option>
                        <option value='Benin'>Benin &#x1F1EF</option>
                        <option value='Saint Barthélemy'>Saint Barthélemy &#x1F1F1</option>
                        <option value='Bermuda'>Bermuda &#x1F1F2</option>
                        <option value='Brunei Darussalam'>Brunei Darussalam &#x1F1F3</option>
                        <option value='Bolivia'>Bolivia &#x1F1F4</option>
                        <option value='Bonaire, Sint Eustatius and Saba'>Bonaire, Sint Eustatius and Saba &#x1F1F6</option>
                        <option value='Brazil'>Brazil &#x1F1F7</option>
                        <option value='Bahamas'>Bahamas &#x1F1F8</option>
                        <option value='Bhutan'>Bhutan &#x1F1F9</option>
                        <option value='Bouvet Island'>Bouvet Island &#x1F1FB</option>
                        <option value='Botswana'>Botswana &#x1F1FC</option>
                        <option value='Belarus'>Belarus &#x1F1FE</option>
                        <option value='Belize'>Belize &#x1F1FF</option>
                        <option value='Canada'>Canada &#x1F1E6</option>
                        <option value='Cocos (Keeling) Islands'>Cocos (Keeling) Islands &#x1F1E8</option>
                        <option value='Congo'>Congo &#x1F1E9</option>
                        <option value='Central African Republic'>Central African Republic &#x1F1EB</option>
                        <option value='Congo'>Congo &#x1F1EC</option>
                        <option value='Switzerland'>Switzerland &#x1F1ED</option>
                        <option value='Côte D'Ivoire'>Côte D'Ivoire &#x1F1EE</option>
                        <option value='Cook Islands'>Cook Islands &#x1F1F0</option>
                        <option value='Chile'>Chile &#x1F1F1</option>
                        <option value='Cameroon'>Cameroon &#x1F1F2</option>
                        <option value='China'>China &#x1F1F3</option>
                        <option value='Colombia'>Colombia &#x1F1F4</option>
                        <option value='Costa Rica'>Costa Rica &#x1F1F7</option>
                        <option value='Cuba'>Cuba &#x1F1FA</option>
                        <option value='Cape Verde'>Cape Verde &#x1F1FB</option>
                        <option value='Curaçao'>Curaçao &#x1F1FC</option>
                        <option value='Christmas Island'>Christmas Island &#x1F1FD</option>
                        <option value='Cyprus'>Cyprus &#x1F1FE</option>
                        <option value='Czech Republic'>Czech Republic &#x1F1FF</option>
                        <option value='Germany'>Germany &#x1F1EA</option>
                        <option value='Djibouti'>Djibouti &#x1F1EF</option>
                        <option value='Denmark'>Denmark &#x1F1F0</option>
                        <option value='Dominica'>Dominica &#x1F1F2</option>
                        <option value='Dominican Republic'>Dominican Republic &#x1F1F4</option>
                        <option value='Algeria'>Algeria &#x1F1FF</option>
                        <option value='Ecuador'>Ecuador &#x1F1E8</option>
                        <option value='Estonia'>Estonia &#x1F1EA</option>
                        <option value='Egypt'>Egypt &#x1F1EC</option>
                        <option value='Western Sahara'>Western Sahara &#x1F1ED</option>
                        <option value='Eritrea'>Eritrea &#x1F1F7</option>
                        <option value='Spain'>Spain &#x1F1F8</option>
                        <option value='Ethiopia'>Ethiopia &#x1F1F9</option>
                        <option value='Finland'>Finland &#x1F1EE</option>
                        <option value='Fiji'>Fiji &#x1F1EF</option>
                        <option value='Falkland Islands (Malvinas)'>Falkland Islands (Malvinas) &#x1F1F0</option>
                        <option value='Micronesia'>Micronesia &#x1F1F2</option>
                        <option value='Faroe Islands'>Faroe Islands &#x1F1F4</option>
                        <option value='France'>France &#x1F1F7</option>
                        <option value='Gabon'>Gabon &#x1F1E6</option>
                        <option value='United Kingdom'>United Kingdom &#x1F1E7</option>
                        <option value='Grenada'>Grenada &#x1F1E9</option>
                        <option value='Georgia'>Georgia &#x1F1EA</option>
                        <option value='French Guiana'>French Guiana &#x1F1EB</option>
                        <option value='Guernsey'>Guernsey &#x1F1EC</option>
                        <option value='Ghana'>Ghana &#x1F1ED</option>
                        <option value='Gibraltar'>Gibraltar &#x1F1EE</option>
                        <option value='Greenland'>Greenland &#x1F1F1</option>
                        <option value='Gambia'>Gambia &#x1F1F2</option>
                        <option value='Guinea'>Guinea &#x1F1F3</option>
                        <option value='Guadeloupe'>Guadeloupe &#x1F1F5</option>
                        <option value='Equatorial Guinea'>Equatorial Guinea &#x1F1F6</option>
                        <option value='Greece'>Greece &#x1F1F7</option>
                        <option value='South Georgia'>South Georgia &#x1F1F8</option>
                        <option value='Guatemala'>Guatemala &#x1F1F9</option>
                        <option value='Guam'>Guam &#x1F1FA</option>
                        <option value='Guinea-Bissau'>Guinea-Bissau &#x1F1FC</option>
                        <option value='Guyana'>Guyana &#x1F1FE</option>
                        <option value='Hong Kong'>Hong Kong &#x1F1F0</option>
                        <option value='Heard Island and Mcdonald Islands'>Heard Island and Mcdonald Islands &#x1F1F2</option>
                        <option value='Honduras'>Honduras &#x1F1F3</option>
                        <option value='Croatia'>Croatia &#x1F1F7</option>
                        <option value='Haiti'>Haiti &#x1F1F9</option>
                        <option value='Hungary'>Hungary &#x1F1FA</option>
                        <option value='Indonesia'>Indonesia &#x1F1E9</option>
                        <option value='Ireland'>Ireland &#x1F1EA</option>
                        <option value='Israel'>Israel &#x1F1F1</option>
                        <option value='Isle of Man'>Isle of Man &#x1F1F2</option>
                        <option value='India'>India &#x1F1F3</option>
                        <option value='British Indian Ocean Territory'>British Indian Ocean Territory &#x1F1F4</option>
                        <option value='Iraq'>Iraq &#x1F1F6</option>
                        <option value='Iran'>Iran &#x1F1F7</option>
                        <option value='Iceland'>Iceland &#x1F1F8</option>
                        <option value='Italy'>Italy &#x1F1F9</option>
                        <option value='Jersey'>Jersey &#x1F1EA</option>
                        <option value='Jamaica'>Jamaica &#x1F1F2</option>
                        <option value='Jordan'>Jordan &#x1F1F4</option>
                        <option value='Japan'>Japan &#x1F1F5</option>
                        <option value='Kenya'>Kenya &#x1F1EA</option>
                        <option value='Kyrgyzstan'>Kyrgyzstan &#x1F1EC</option>
                        <option value='Cambodia'>Cambodia &#x1F1ED</option>
                        <option value='Kiribati'>Kiribati &#x1F1EE</option>
                        <option value='Comoros'>Comoros &#x1F1F2</option>
                        <option value='Saint Kitts and Nevis'>Saint Kitts and Nevis &#x1F1F3</option>
                        <option value='North Korea'>North Korea &#x1F1F5</option>
                        <option value='South Korea'>South Korea &#x1F1F7</option>
                        <option value='Kuwait'>Kuwait &#x1F1FC</option>
                        <option value='Cayman Islands'>Cayman Islands &#x1F1FE</option>
                        <option value='Kazakhstan'>Kazakhstan &#x1F1FF</option>
                        <option value='Lao People's Democratic Republic'>Lao People's Democratic Republic &#x1F1E6</option>
                        <option value='Lebanon'>Lebanon &#x1F1E7</option>
                        <option value='Saint Lucia'>Saint Lucia &#x1F1E8</option>
                        <option value='Liechtenstein'>Liechtenstein &#x1F1EE</option>
                        <option value='Sri Lanka'>Sri Lanka &#x1F1F0</option>
                        <option value='Liberia'>Liberia &#x1F1F7</option>
                        <option value='Lesotho'>Lesotho &#x1F1F8</option>
                        <option value='Lithuania'>Lithuania &#x1F1F9</option>
                        <option value='Luxembourg'>Luxembourg &#x1F1FA</option>
                        <option value='Latvia'>Latvia &#x1F1FB</option>
                        <option value='Libya'>Libya &#x1F1FE</option>
                        <option value='Morocco'>Morocco &#x1F1E6</option>
                        <option value='Monaco'>Monaco &#x1F1E8</option>
                        <option value='Moldova'>Moldova &#x1F1E9</option>
                        <option value='Montenegro'>Montenegro &#x1F1EA</option>
                        <option value='Saint Martin (French Part)'>Saint Martin (French Part) &#x1F1EB</option>
                        <option value='Madagascar'>Madagascar &#x1F1EC</option>
                        <option value='Marshall Islands'>Marshall Islands &#x1F1ED</option>
                        <option value='Macedonia'>Macedonia &#x1F1F0</option>
                        <option value='Mali'>Mali &#x1F1F1</option>
                        <option value='Myanmar'>Myanmar &#x1F1F2</option>
                        <option value='Mongolia'>Mongolia &#x1F1F3</option>
                        <option value='Macao'>Macao &#x1F1F4</option>
                        <option value='Northern Mariana Islands'>Northern Mariana Islands &#x1F1F5</option>
                        <option value='Martinique'>Martinique &#x1F1F6</option>
                        <option value='Mauritania'>Mauritania &#x1F1F7</option>
                        <option value='Montserrat'>Montserrat &#x1F1F8</option>
                        <option value='Malta'>Malta &#x1F1F9</option>
                        <option value='Mauritius'>Mauritius &#x1F1FA</option>
                        <option value='Maldives'>Maldives &#x1F1FB</option>
                        <option value='Malawi'>Malawi &#x1F1FC</option>
                        <option value='Mexico'>Mexico &#x1F1FD</option>
                        <option value='Malaysia'>Malaysia &#x1F1FE</option>
                        <option value='Mozambique'>Mozambique &#x1F1FF</option>
                        <option value='Namibia'>Namibia &#x1F1E6</option>
                        <option value='New Caledonia'>New Caledonia &#x1F1E8</option>
                        <option value='Niger'>Niger &#x1F1EA</option>
                        <option value='Norfolk Island'>Norfolk Island &#x1F1EB</option>
                        <option value='Nigeria'>Nigeria &#x1F1EC</option>
                        <option value='Nicaragua'>Nicaragua &#x1F1EE</option>
                        <option value='Netherlands'>Netherlands &#x1F1F1</option>
                        <option value='Norway'>Norway &#x1F1F4</option>
                        <option value='Nepal'>Nepal &#x1F1F5</option>
                        <option value='Nauru'>Nauru &#x1F1F7</option>
                        <option value='Niue'>Niue &#x1F1FA</option>
                        <option value='New Zealand'>New Zealand &#x1F1FF</option>
                        <option value='Oman'>Oman &#x1F1F2</option>
                        <option value='Panama'>Panama &#x1F1E6</option>
                        <option value='Peru'>Peru &#x1F1EA</option>
                        <option value='French Polynesia'>French Polynesia &#x1F1EB</option>
                        <option value='Papua New Guinea'>Papua New Guinea &#x1F1EC</option>
                        <option value='Philippines'>Philippines &#x1F1ED</option>
                        <option value='Pakistan'>Pakistan &#x1F1F0</option>
                        <option value='Poland'>Poland &#x1F1F1</option>
                        <option value='Saint Pierre and Miquelon'>Saint Pierre and Miquelon &#x1F1F2</option>
                        <option value='Pitcairn'>Pitcairn &#x1F1F3</option>
                        <option value='Puerto Rico'>Puerto Rico &#x1F1F7</option>
                        <option value='Palestinian Territory'>Palestinian Territory &#x1F1F8</option>
                        <option value='Portugal'>Portugal &#x1F1F9</option>
                        <option value='Palau'>Palau &#x1F1FC</option>
                        <option value='Paraguay'>Paraguay &#x1F1FE</option>
                        <option value='Qatar'>Qatar &#x1F1E6</option>
                        <option value='Réunion'>Réunion &#x1F1EA</option>
                        <option value='Romania'>Romania &#x1F1F4</option>
                        <option value='Serbia'>Serbia &#x1F1F8</option>
                        <option value='Russia'>Russia &#x1F1FA</option>
                        <option value='Rwanda'>Rwanda &#x1F1FC</option>
                        <option value='Saudi Arabia'>Saudi Arabia &#x1F1E6</option>
                        <option value='Solomon Islands'>Solomon Islands &#x1F1E7</option>
                        <option value='Seychelles'>Seychelles &#x1F1E8</option>
                        <option value='Sudan'>Sudan &#x1F1E9</option>
                        <option value='Sweden'>Sweden &#x1F1EA</option>
                        <option value='Singapore'>Singapore &#x1F1EC</option>
                        <option value='Saint Helena, Ascension and Tristan Da Cunha'>Saint Helena, Ascension and Tristan Da Cunha &#x1F1ED</option>
                        <option value='Slovenia'>Slovenia &#x1F1EE</option>
                        <option value='Svalbard and Jan Mayen'>Svalbard and Jan Mayen &#x1F1EF</option>
                        <option value='Slovakia'>Slovakia &#x1F1F0</option>
                        <option value='Sierra Leone'>Sierra Leone &#x1F1F1</option>
                        <option value='San Marino'>San Marino &#x1F1F2</option>
                        <option value='Senegal'>Senegal &#x1F1F3</option>
                        <option value='Somalia'>Somalia &#x1F1F4</option>
                        <option value='Suriname'>Suriname &#x1F1F7</option>
                        <option value='South Sudan'>South Sudan &#x1F1F8</option>
                        <option value='Sao Tome and Principe'>Sao Tome and Principe &#x1F1F9</option>
                        <option value='El Salvador'>El Salvador &#x1F1FB</option>
                        <option value='Sint Maarten (Dutch Part)'>Sint Maarten (Dutch Part) &#x1F1FD</option>
                        <option value='Syrian Arab Republic'>Syrian Arab Republic &#x1F1FE</option>
                        <option value='Swaziland'>Swaziland &#x1F1FF</option>
                        <option value='Turks and Caicos Islands'>Turks and Caicos Islands &#x1F1E8</option>
                        <option value='Chad'>Chad &#x1F1E9</option>
                        <option value='French Southern Territories'>French Southern Territories &#x1F1EB</option>
                        <option value='Togo'>Togo &#x1F1EC</option>
                        <option value='Thailand'>Thailand &#x1F1ED</option>
                        <option value='Tajikistan'>Tajikistan &#x1F1EF</option>
                        <option value='Tokelau'>Tokelau &#x1F1F0</option>
                        <option value='Timor-Leste'>Timor-Leste &#x1F1F1</option>
                        <option value='Turkmenistan'>Turkmenistan &#x1F1F2</option>
                        <option value='Tunisia'>Tunisia &#x1F1F3</option>
                        <option value='Tonga'>Tonga &#x1F1F4</option>
                        <option value='Turkey'>Turkey &#x1F1F7</option>
                        <option value='Trinidad and Tobago'>Trinidad and Tobago &#x1F1F9</option>
                        <option value='Tuvalu'>Tuvalu &#x1F1FB</option>
                        <option value='Taiwan'>Taiwan &#x1F1FC</option>
                        <option value='Tanzania'>Tanzania &#x1F1FF</option>
                        <option value='Ukraine'>Ukraine &#x1F1E6</option>
                        <option value='Uganda'>Uganda &#x1F1EC</option>
                        <option value='United States Minor Outlying Islands'>United States Minor Outlying Islands &#x1F1F2</option>
                        <option value='United States'>United States &#x1F1F8</option>
                        <option value='Uruguay'>Uruguay &#x1F1FE</option>
                        <option value='Uzbekistan'>Uzbekistan &#x1F1FF</option>
                        <option value='Vatican City'>Vatican City &#x1F1E6</option>
                        <option value='Saint Vincent and The Grenadines'>Saint Vincent and The Grenadines &#x1F1E8</option>
                        <option value='Venezuela'>Venezuela &#x1F1EA</option>
                        <option value='Virgin Islands, British'>Virgin Islands, British &#x1F1EC</option>
                        <option value='Virgin Islands, U.S.'>Virgin Islands, U.S. &#x1F1EE</option>
                        <option value='Viet Nam'>Viet Nam &#x1F1F3</option>
                        <option value='Vanuatu'>Vanuatu &#x1F1FA</option>
                        <option value='Wallis and Futuna'>Wallis and Futuna &#x1F1EB</option>
                        <option value='Samoa'>Samoa &#x1F1F8</option>
                        <option value='Yemen'>Yemen &#x1F1EA</option>
                        <option value='Mayotte'>Mayotte &#x1F1F9</option>
                        <option value='South Africa'>South Africa &#x1F1E6</option>
                        <option value='Zambia'>Zambia &#x1F1F2</option>
                        <option value='Zimbabwe'>Zimbabwe &#x1F1FC</option>
                    </select>
                </div>
                <div class="row mx-auto my-1">
                    <div class="form-group col-md-4 px-1">
                        <label class="label" for="product-rating">Food</label>
                        <select class="form-control" id="product-rating" name="food">
                            <option>Rubbish &#x1F92E</option>
                            <option>Okay.. &#x1F914</option>
                            <option>Pretty nice &#x1F44D</option>
                            <option>Amazing! &#x1F924</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4 px-1">
                        <label class="label" for="product-rating">Weather</label>
                        <select class="form-control" id="product-rating" name="weather">
                            <option>Too Chilly &#x1F976</option>
                            <option>Just Right &#x1F60C</option>
                            <option>Too Hot &#x1F975</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4 px-1">
                        <label class="label" for="product-rating">People</label>
                        <select class="form-control" id="product-rating" name="people">
                            <option>Mean &#x1F92C</option>
                            <option>Nice..&#x1F610</option>
                            <option>Friendly &#x1F917</option>
                            <option>So Nice! &#x1F929</option>
                        </select>
                    </div>
                </div>
                <div class="form-group my-1">
                    <label class="label" for="product-rating">Overall Rating</label>
                    <select class="form-control" id="product-rating" name="overall">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group my-1">
                    <label class="label" for="product-review">Give your home a compliment! (or not).</label>
                    <textarea class="form-control" name="review" id="product-review" cols="30" rows="5" placeholder="I love the food here! (But I hate the people!) &#x1F633" required="required"></textarea>
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

