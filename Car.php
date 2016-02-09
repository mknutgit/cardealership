<?php

class Car
{
    private $make_model;
    private $price;
    private $miles;
    private $status;
    public $image;

    function __construct($make_model, $price, $miles, $status="new", $image)
    {
        $this->make_model = $make_model;
        $this->price = $price;
        $this->miles = $miles;
        $this->status = $status;
        $this->image = $image;
    }

    // Getter - for private - make_model
    function getMake_model()
    {
      return $this->make_model;
    }

    //Setter - for private - make_model
    function setMake_model($new_make_model)
    {
      $this->price = $new_make_model;
    }

    // Getter - for private - price
    function getPrice()
    {
      return $this->price;
    }

    //Setter - for private - price
    function setPrice($new_price)
    {
      $this->price = $new_price;
    }

    // Getter - for private - miles
    function getMiles()
    {
      return $this->miles;
    }

    //Setter - for private - miles
    function setMiles($new_miles)
    {
      $this->miles = $new_miles;
    }

    // Getter - for private - status
    function getStatus()
    {
      return $this->status;
    }

    //Setter - for private - status
    function setStatus($new_status)
    {
      $this->status = $new_status;
    }

}

$car1 = new Car("2014 Porsche 911", 114991, 0, NULL, "images/porsche.jpg");
$car2 = new Car("2011 Ford F450", 55995, 0, NULL,"images/ford.jpg");
$car3 = new Car("2013 Lexus RX 350", 44700, 0, NULL, "images/lexus.jpg");
$car4 = new Car("Mercedes Benz CLS550", 39900, 37979, NULL, "images/mercedes.jpg");
$car5 = new Car("Ford F150", 24900, 45979, NULL, "images/f150.jpg");
// error testing: var_dump("Car 4 status " . $car4->getStatus());
$car4->setStatus("used");
// error testing: var_dump("Car 4 status " . $car4->getStatus());

$cars = array($car1, $car2, $car3, $car4, $car5);

$cars_matching_search = array();
foreach ($cars as $car) {
    if ($car->getPrice() < $_GET["price"]) {
        array_push($cars_matching_search, $car);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
    <title>Your Car Dealership's Homepage</title>
</head>
<body>
    <h1>Your Car Dealership</h1>
    <ul>
        <?php
            foreach ($cars_matching_search as $car) {
                echo "<li> <img src='$car->image'></li>";
                echo "<li>" . $car->getMake_model() . "</li>";
                echo "<ul>";
                    echo "<li>$" . $car->getPrice() . " </li>";
                    echo "<li> Miles:" . $car->getMiles() . "</li>";
                    echo "<li>" . $car->getStatus() . "</li>";
                echo "</ul>";
            }
        ?>
    </ul>
</body>
</html>
