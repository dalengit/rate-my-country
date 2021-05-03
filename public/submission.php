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
                        <option value='Ascension Island 🇦🇨'>Ascension Island 🇦🇨</option>
                        <option value='Andorra 🇦🇩'>Andorra 🇦🇩</option>
                        <option value='Afghanistan 🇦🇫'>Afghanistan 🇦🇫</option>
                        <option value='Antigua & Barbuda 🇦🇬'>Antigua & Barbuda 🇦🇬</option>
                        <option value='Anguilla 🇦🇮'>Anguilla 🇦🇮</option>
                        <option value='Albania 🇦🇱'>Albania 🇦🇱</option>
                        <option value='Armenia 🇦🇲'>Armenia 🇦🇲</option>
                        <option value='Angola 🇦🇴'>Angola 🇦🇴</option>
                        <option value='Antarctica 🇦🇶'>Antarctica 🇦🇶</option>
                        <option value='Argentina 🇦🇷'>Argentina 🇦🇷</option>
                        <option value='American Samoa 🇦🇸'>American Samoa 🇦🇸</option>
                        <option value='Austria 🇦🇹'>Austria 🇦🇹</option>
                        <option value='Australia 🇦🇺'>Australia 🇦🇺</option>
                        <option value='Aruba 🇦🇼'>Aruba 🇦🇼</option>
                        <option value='Åland Islands 🇦🇽'>Åland Islands 🇦🇽</option>
                        <option value='Azerbaijan 🇦🇿'>Azerbaijan 🇦🇿</option>
                        <option value='Bosnia & Herzegovina 🇧🇦'>Bosnia & Herzegovina 🇧🇦</option>
                        <option value='Barbados 🇧🇧'>Barbados 🇧🇧</option>
                        <option value='Bangladesh 🇧🇩'>Bangladesh 🇧🇩</option>
                        <option value='Belgium 🇧🇪'>Belgium 🇧🇪</option>
                        <option value='Burkina Faso 🇧🇫'>Burkina Faso 🇧🇫</option>
                        <option value='Bulgaria 🇧🇬'>Bulgaria 🇧🇬</option>
                        <option value='Bahrain 🇧🇭'>Bahrain 🇧🇭</option>
                        <option value='Burundi 🇧🇮'>Burundi 🇧🇮</option>
                        <option value='Benin 🇧🇯'>Benin 🇧🇯</option>
                        <option value='St. Barthélemy 🇧🇱'>St. Barthélemy 🇧🇱</option>
                        <option value='Bermuda 🇧🇲'>Bermuda 🇧🇲</option>
                        <option value='Brunei 🇧🇳'>Brunei 🇧🇳</option>
                        <option value='Bolivia 🇧🇴'>Bolivia 🇧🇴</option>
                        <option value='Caribbean Netherlands 🇧🇶'>Caribbean Netherlands 🇧🇶</option>
                        <option value='Brazil 🇧🇷'>Brazil 🇧🇷</option>
                        <option value='Bahamas 🇧🇸'>Bahamas 🇧🇸</option>
                        <option value='Bhutan 🇧🇹'>Bhutan 🇧🇹</option>
                        <option value='Bouvet Island 🇧🇻'>Bouvet Island 🇧🇻</option>
                        <option value='Botswana 🇧🇼'>Botswana 🇧🇼</option>
                        <option value='Belarus 🇧🇾'>Belarus 🇧🇾</option>
                        <option value='Belize 🇧🇿'>Belize 🇧🇿</option>
                        <option value='Canada 🇨🇦'>Canada 🇨🇦</option>
                        <option value='Cocos (Keeling) Islands 🇨🇨'>Cocos (Keeling) Islands 🇨🇨</option>
                        <option value='Congo - Kinshasa 🇨🇩'>Congo - Kinshasa 🇨🇩</option>
                        <option value='Central African Republic 🇨🇫'>Central African Republic 🇨🇫</option>
                        <option value='Congo - Brazzaville 🇨🇬'>Congo - Brazzaville 🇨🇬</option>
                        <option value='Switzerland 🇨🇭'>Switzerland 🇨🇭</option>
                        <option value='Côte d’Ivoire 🇨🇮'>Côte d’Ivoire 🇨🇮</option>
                        <option value='Cook Islands 🇨🇰'>Cook Islands 🇨🇰</option>
                        <option value='Chile 🇨🇱'>Chile 🇨🇱</option>
                        <option value='Cameroon 🇨🇲'>Cameroon 🇨🇲</option>
                        <option value='China 🇨🇳'>China 🇨🇳</option>
                        <option value='Colombia 🇨🇴'>Colombia 🇨🇴</option>
                        <option value='Clipperton Island 🇨🇵'>Clipperton Island 🇨🇵</option>
                        <option value='Costa Rica 🇨🇷'>Costa Rica 🇨🇷</option>
                        <option value='Cuba 🇨🇺'>Cuba 🇨🇺</option>
                        <option value='Cape Verde 🇨🇻'>Cape Verde 🇨🇻</option>
                        <option value='Curaçao 🇨🇼'>Curaçao 🇨🇼</option>
                        <option value='Christmas Island 🇨🇽'>Christmas Island 🇨🇽</option>
                        <option value='Cyprus 🇨🇾'>Cyprus 🇨🇾</option>
                        <option value='Czechia 🇨🇿'>Czechia 🇨🇿</option>
                        <option value='Germany 🇩🇪'>Germany 🇩🇪</option>
                        <option value='Diego Garcia 🇩🇬'>Diego Garcia 🇩🇬</option>
                        <option value='Djibouti 🇩🇯'>Djibouti 🇩🇯</option>
                        <option value='Denmark 🇩🇰'>Denmark 🇩🇰</option>
                        <option value='Dominica 🇩🇲'>Dominica 🇩🇲</option>
                        <option value='Dominican Republic 🇩🇴'>Dominican Republic 🇩🇴</option>
                        <option value='Algeria 🇩🇿'>Algeria 🇩🇿</option>
                        <option value='Ceuta & Melilla 🇪🇦'>Ceuta & Melilla 🇪🇦</option>
                        <option value='Ecuador 🇪🇨'>Ecuador 🇪🇨</option>
                        <option value='Estonia 🇪🇪'>Estonia 🇪🇪</option>
                        <option value='Egypt 🇪🇬'>Egypt 🇪🇬</option>
                        <option value='Eritrea 🇪🇷'>Eritrea 🇪🇷</option>
                        <option value='England 🏴󠁧󠁢󠁥󠁮󠁧󠁿'>England 🏴󠁧󠁢󠁥󠁮󠁧󠁿</option>
                        <option value='Spain 🇪🇸'>Spain 🇪🇸</option>
                        <option value='Ethiopia 🇪🇹'>Ethiopia 🇪🇹</option>
                        <option value='European Union 🇪🇺'>European Union 🇪🇺</option>
                        <option value='Finland 🇫🇮'>Finland 🇫🇮</option>
                        <option value='Fiji 🇫🇯'>Fiji 🇫🇯</option>
                        <option value='Falkland Islands 🇫🇰'>Falkland Islands 🇫🇰</option>
                        <option value='Micronesia 🇫🇲'>Micronesia 🇫🇲</option>
                        <option value='Faroe Islands 🇫🇴'>Faroe Islands 🇫🇴</option>
                        <option value='France 🇫🇷'>France 🇫🇷</option>
                        <option value='Gabon 🇬🇦'>Gabon 🇬🇦</option>
                        <option value='Grenada 🇬🇩'>Grenada 🇬🇩</option>
                        <option value='Georgia 🇬🇪'>Georgia 🇬🇪</option>
                        <option value='French Guiana 🇬🇫'>French Guiana 🇬🇫</option>
                        <option value='Guernsey 🇬🇬'>Guernsey 🇬🇬</option>
                        <option value='Ghana 🇬🇭'>Ghana 🇬🇭</option>
                        <option value='Gibraltar 🇬🇮'>Gibraltar 🇬🇮</option>
                        <option value='Greenland 🇬🇱'>Greenland 🇬🇱</option>
                        <option value='Gambia 🇬🇲'>Gambia 🇬🇲</option>
                        <option value='Guinea 🇬🇳'>Guinea 🇬🇳</option>
                        <option value='Guadeloupe 🇬🇵'>Guadeloupe 🇬🇵</option>
                        <option value='Equatorial Guinea 🇬🇶'>Equatorial Guinea 🇬🇶</option>
                        <option value='Greece 🇬🇷'>Greece 🇬🇷</option>
                        <option value='South Georgia & South Sandwich Islands 🇬🇸'>South Georgia & South Sandwich Islands 🇬🇸</option>
                        <option value='Guatemala 🇬🇹'>Guatemala 🇬🇹</option>
                        <option value='Guam 🇬🇺'>Guam 🇬🇺</option>
                        <option value='Guinea-Bissau 🇬🇼'>Guinea-Bissau 🇬🇼</option>
                        <option value='Guyana 🇬🇾'>Guyana 🇬🇾</option>
                        <option value='Hong Kong SAR China 🇭🇰'>Hong Kong SAR China 🇭🇰</option>
                        <option value='Heard & McDonald Islands 🇭🇲'>Heard & McDonald Islands 🇭🇲</option>
                        <option value='Honduras 🇭🇳'>Honduras 🇭🇳</option>
                        <option value='Croatia 🇭🇷'>Croatia 🇭🇷</option>
                        <option value='Haiti 🇭🇹'>Haiti 🇭🇹</option>
                        <option value='Hungary 🇭🇺'>Hungary 🇭🇺</option>
                        <option value='Canary Islands 🇮🇨'>Canary Islands 🇮🇨</option>
                        <option value='Indonesia 🇮🇩'>Indonesia 🇮🇩</option>
                        <option value='Ireland 🇮🇪'>Ireland 🇮🇪</option>
                        <option value='Israel 🇮🇱'>Israel 🇮🇱</option>
                        <option value='Isle of Man 🇮🇲'>Isle of Man 🇮🇲</option>
                        <option value='India 🇮🇳'>India 🇮🇳</option>
                        <option value='British Indian Ocean Territory 🇮🇴'>British Indian Ocean Territory 🇮🇴</option>
                        <option value='Iraq 🇮🇶'>Iraq 🇮🇶</option>
                        <option value='Iran 🇮🇷'>Iran 🇮🇷</option>
                        <option value='Iceland 🇮🇸'>Iceland 🇮🇸</option>
                        <option value='Italy 🇮🇹'>Italy 🇮🇹</option>
                        <option value='Jersey 🇯🇪'>Jersey 🇯🇪</option>
                        <option value='Jamaica 🇯🇲'>Jamaica 🇯🇲</option>
                        <option value='Jordan 🇯🇴'>Jordan 🇯🇴</option>
                        <option value='Japan 🇯🇵'>Japan 🇯🇵</option>
                        <option value='Kenya 🇰🇪'>Kenya 🇰🇪</option>
                        <option value='Kyrgyzstan 🇰🇬'>Kyrgyzstan 🇰🇬</option>
                        <option value='Cambodia 🇰🇭'>Cambodia 🇰🇭</option>
                        <option value='Kiribati 🇰🇮'>Kiribati 🇰🇮</option>
                        <option value='Comoros 🇰🇲'>Comoros 🇰🇲</option>
                        <option value='St. Kitts & Nevis 🇰🇳'>St. Kitts & Nevis 🇰🇳</option>
                        <option value='North Korea 🇰🇵'>North Korea 🇰🇵</option>
                        <option value='South Korea 🇰🇷'>South Korea 🇰🇷</option>
                        <option value='Kuwait 🇰🇼'>Kuwait 🇰🇼</option>
                        <option value='Cayman Islands 🇰🇾'>Cayman Islands 🇰🇾</option>
                        <option value='Kazakhstan 🇰🇿'>Kazakhstan 🇰🇿</option>
                        <option value='Laos 🇱🇦'>Laos 🇱🇦</option>
                        <option value='Lebanon 🇱🇧'>Lebanon 🇱🇧</option>
                        <option value='St. Lucia 🇱🇨'>St. Lucia 🇱🇨</option>
                        <option value='Liechtenstein 🇱🇮'>Liechtenstein 🇱🇮</option>
                        <option value='Sri Lanka 🇱🇰'>Sri Lanka 🇱🇰</option>
                        <option value='Liberia 🇱🇷'>Liberia 🇱🇷</option>
                        <option value='Lesotho 🇱🇸'>Lesotho 🇱🇸</option>
                        <option value='Lithuania 🇱🇹'>Lithuania 🇱🇹</option>
                        <option value='Luxembourg 🇱🇺'>Luxembourg 🇱🇺</option>
                        <option value='Latvia 🇱🇻'>Latvia 🇱🇻</option>
                        <option value='Libya 🇱🇾'>Libya 🇱🇾</option>
                        <option value='Morocco 🇲🇦'>Morocco 🇲🇦</option>
                        <option value='Monaco 🇲🇨'>Monaco 🇲🇨</option>
                        <option value='Moldova 🇲🇩'>Moldova 🇲🇩</option>
                        <option value='Montenegro 🇲🇪'>Montenegro 🇲🇪</option>
                        <option value='St. Martin 🇲🇫'>St. Martin 🇲🇫</option>
                        <option value='Madagascar 🇲🇬'>Madagascar 🇲🇬</option>
                        <option value='Marshall Islands 🇲🇭'>Marshall Islands 🇲🇭</option>
                        <option value='North Macedonia 🇲🇰'>North Macedonia 🇲🇰</option>
                        <option value='Mali 🇲🇱'>Mali 🇲🇱</option>
                        <option value='Myanmar (Burma) 🇲🇲'>Myanmar (Burma) 🇲🇲</option>
                        <option value='Mongolia 🇲🇳'>Mongolia 🇲🇳</option>
                        <option value='Macao Sar China 🇲🇴'>Macao Sar China 🇲🇴</option>
                        <option value='Northern Mariana Islands 🇲🇵'>Northern Mariana Islands 🇲🇵</option>
                        <option value='Martinique 🇲🇶'>Martinique 🇲🇶</option>
                        <option value='Mauritania 🇲🇷'>Mauritania 🇲🇷</option>
                        <option value='Montserrat 🇲🇸'>Montserrat 🇲🇸</option>
                        <option value='Malta 🇲🇹'>Malta 🇲🇹</option>
                        <option value='Mauritius 🇲🇺'>Mauritius 🇲🇺</option>
                        <option value='Maldives 🇲🇻'>Maldives 🇲🇻</option>
                        <option value='Malawi 🇲🇼'>Malawi 🇲🇼</option>
                        <option value='Mexico 🇲🇽'>Mexico 🇲🇽</option>
                        <option value='Malaysia 🇲🇾'>Malaysia 🇲🇾</option>
                        <option value='Mozambique 🇲🇿'>Mozambique 🇲🇿</option>
                        <option value='Namibia 🇳🇦'>Namibia 🇳🇦</option>
                        <option value='New Caledonia 🇳🇨'>New Caledonia 🇳🇨</option>
                        <option value='Niger 🇳🇪'>Niger 🇳🇪</option>
                        <option value='Norfolk Island 🇳🇫'>Norfolk Island 🇳🇫</option>
                        <option value='Nigeria 🇳🇬'>Nigeria 🇳🇬</option>
                        <option value='Nicaragua 🇳🇮'>Nicaragua 🇳🇮</option>
                        <option value='Netherlands 🇳🇱'>Netherlands 🇳🇱</option>
                        <option value='Norway 🇳🇴'>Norway 🇳🇴</option>
                        <option value='Nepal 🇳🇵'>Nepal 🇳🇵</option>
                        <option value='Nauru 🇳🇷'>Nauru 🇳🇷</option>
                        <option value='Niue 🇳🇺'>Niue 🇳🇺</option>
                        <option value='New Zealand 🇳🇿'>New Zealand 🇳🇿</option>
                        <option value='Oman 🇴🇲'>Oman 🇴🇲</option>
                        <option value='Panama 🇵🇦'>Panama 🇵🇦</option>
                        <option value='Peru 🇵🇪'>Peru 🇵🇪</option>
                        <option value='French Polynesia 🇵🇫'>French Polynesia 🇵🇫</option>
                        <option value='Papua New Guinea 🇵🇬'>Papua New Guinea 🇵🇬</option>
                        <option value='Philippines 🇵🇭'>Philippines 🇵🇭</option>
                        <option value='Pakistan 🇵🇰'>Pakistan 🇵🇰</option>
                        <option value='Poland 🇵🇱'>Poland 🇵🇱</option>
                        <option value='St. Pierre & Miquelon 🇵🇲'>St. Pierre & Miquelon 🇵🇲</option>
                        <option value='Pitcairn Islands 🇵🇳'>Pitcairn Islands 🇵🇳</option>
                        <option value='Puerto Rico 🇵🇷'>Puerto Rico 🇵🇷</option>
                        <option value='Palestinian Territories 🇵🇸'>Palestinian Territories 🇵🇸</option>
                        <option value='Portugal 🇵🇹'>Portugal 🇵🇹</option>
                        <option value='Palau 🇵🇼'>Palau 🇵🇼</option>
                        <option value='Paraguay 🇵🇾'>Paraguay 🇵🇾</option>
                        <option value='Qatar 🇶🇦'>Qatar 🇶🇦</option>
                        <option value='Réunion 🇷🇪'>Réunion 🇷🇪</option>
                        <option value='Romania 🇷🇴'>Romania 🇷🇴</option>
                        <option value='Serbia 🇷🇸'>Serbia 🇷🇸</option>
                        <option value='Russia 🇷🇺'>Russia 🇷🇺</option>
                        <option value='Rwanda 🇷🇼'>Rwanda 🇷🇼</option>
                        <option value='Saudi Arabia 🇸🇦'>Saudi Arabia 🇸🇦</option>
                        <option value='Scotland 🏴󠁧󠁢󠁳󠁣󠁴󠁿'>Scotland 🏴󠁧󠁢󠁳󠁣󠁴󠁿</option>
                        <option value='Solomon Islands 🇸🇧'>Solomon Islands 🇸🇧</option>
                        <option value='Seychelles 🇸🇨'>Seychelles 🇸🇨</option>
                        <option value='Sudan 🇸🇩'>Sudan 🇸🇩</option>
                        <option value='Sweden 🇸🇪'>Sweden 🇸🇪</option>
                        <option value='Singapore 🇸🇬'>Singapore 🇸🇬</option>
                        <option value='St. Helena 🇸🇭'>St. Helena 🇸🇭</option>
                        <option value='Slovenia 🇸🇮'>Slovenia 🇸🇮</option>
                        <option value='Svalbard & Jan Mayen 🇸🇯'>Svalbard & Jan Mayen 🇸🇯</option>
                        <option value='Slovakia 🇸🇰'>Slovakia 🇸🇰</option>
                        <option value='Sierra Leone 🇸🇱'>Sierra Leone 🇸🇱</option>
                        <option value='San Marino 🇸🇲'>San Marino 🇸🇲</option>
                        <option value='Senegal 🇸🇳'>Senegal 🇸🇳</option>
                        <option value='Somalia 🇸🇴'>Somalia 🇸🇴</option>
                        <option value='Suriname 🇸🇷'>Suriname 🇸🇷</option>
                        <option value='South Sudan 🇸🇸'>South Sudan 🇸🇸</option>
                        <option value='São Tomé & Príncipe 🇸🇹'>São Tomé & Príncipe 🇸🇹</option>
                        <option value='El Salvador 🇸🇻'>El Salvador 🇸🇻</option>
                        <option value='Sint Maarten 🇸🇽'>Sint Maarten 🇸🇽</option>
                        <option value='Syria 🇸🇾'>Syria 🇸🇾</option>
                        <option value='Eswatini 🇸🇿'>Eswatini 🇸🇿</option>
                        <option value='Tristan Da Cunha 🇹🇦'>Tristan Da Cunha 🇹🇦</option>
                        <option value='Turks & Caicos Islands 🇹🇨'>Turks & Caicos Islands 🇹🇨</option>
                        <option value='Chad 🇹🇩'>Chad 🇹🇩</option>
                        <option value='French Southern Territories 🇹🇫'>French Southern Territories 🇹🇫</option>
                        <option value='Togo 🇹🇬'>Togo 🇹🇬</option>
                        <option value='Thailand 🇹🇭'>Thailand 🇹🇭</option>
                        <option value='Tajikistan 🇹🇯'>Tajikistan 🇹🇯</option>
                        <option value='Tokelau 🇹🇰'>Tokelau 🇹🇰</option>
                        <option value='Timor-Leste 🇹🇱'>Timor-Leste 🇹🇱</option>
                        <option value='Turkmenistan 🇹🇲'>Turkmenistan 🇹🇲</option>
                        <option value='Tunisia 🇹🇳'>Tunisia 🇹🇳</option>
                        <option value='Tonga 🇹🇴'>Tonga 🇹🇴</option>
                        <option value='Turkey 🇹🇷'>Turkey 🇹🇷</option>
                        <option value='Trinidad & Tobago 🇹🇹'>Trinidad & Tobago 🇹🇹</option>
                        <option value='Tuvalu 🇹🇻'>Tuvalu 🇹🇻</option>
                        <option value='Taiwan 🇹🇼'>Taiwan 🇹🇼</option>
                        <option value='Tanzania 🇹🇿'>Tanzania 🇹🇿</option>
                        <option value='Ukraine 🇺🇦'>Ukraine 🇺🇦</option>
                        <option value='Uganda 🇺🇬'>Uganda 🇺🇬</option>
                        <option value='United Arab Emirates 🇦🇪'>United Arab Emirates 🇦🇪</option>
                        <option value='U.S. Outlying Islands 🇺🇲'>U.S. Outlying Islands 🇺🇲</option>
                        <option value='United Nations 🇺🇳'>United Nations 🇺🇳</option>
                        <option value='United States 🇺🇸'>United States 🇺🇸</option>
                        <option value='United Kingdom 🇬🇧'>United Kingdom 🇬🇧</option>
                        <option value='Uruguay 🇺🇾'>Uruguay 🇺🇾</option>
                        <option value='Uzbekistan 🇺🇿'>Uzbekistan 🇺🇿</option>
                        <option value='Vatican City 🇻🇦'>Vatican City 🇻🇦</option>
                        <option value='St. Vincent & Grenadines 🇻🇨'>St. Vincent & Grenadines 🇻🇨</option>
                        <option value='Venezuela 🇻🇪'>Venezuela 🇻🇪</option>
                        <option value='British Virgin Islands 🇻🇬'>British Virgin Islands 🇻🇬</option>
                        <option value='U.S. Virgin Islands 🇻🇮'>U.S. Virgin Islands 🇻🇮</option>
                        <option value='Vietnam 🇻🇳'>Vietnam 🇻🇳</option>
                        <option value='Vanuatu 🇻🇺'>Vanuatu 🇻🇺</option>
                        <option value='Wales 🏴󠁧󠁢󠁷󠁬󠁳󠁿'>Wales 🏴󠁧󠁢󠁷󠁬󠁳󠁿</option>
                        <option value='Wallis & Futuna 🇼🇫'>Wallis & Futuna 🇼🇫</option>
                        <option value='Western Sahara 🇪🇭'>Western Sahara 🇪🇭</option>
                        <option value='Samoa 🇼🇸'>Samoa 🇼🇸</option>
                        <option value='Kosovo 🇽🇰'>Kosovo 🇽🇰</option>
                        <option value='Yemen 🇾🇪'>Yemen 🇾🇪</option>
                        <option value='Mayotte 🇾🇹'>Mayotte 🇾🇹</option>
                        <option value='South Africa 🇿🇦'>South Africa 🇿🇦</option>
                        <option value='Zambia 🇿🇲'>Zambia 🇿🇲</option>
                        <option value='Zimbabwe 🇿🇼'>Zimbabwe 🇿🇼</option>
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
<div class="container mt-5">
<?php include 'templates/footer.php'?>
</div>
</body>
</html>

