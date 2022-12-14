

<html>
<head><title>PHP OOP</title></head>
<body>
<header>
    <h1> OOP Exercice 1 - Classes</h1>
</header>
<main>
    <?php
    //declare(strict_types=1);

    /* EXERCISE 1
    TODO: Create a class beverage.
    TODO: Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
    TODO: Have a default value "cold" in the construct for temperature.

    Remember for now we will use properties and methods that can be accessed from everywhere.
    TODO: Make a getInfo function which returns "This beverage is <temperature> and <color>."
    TODO: Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
     print the getInfo on the screen.
    TODO: Print the temperature on the screen.

    USE TYPEHINTING EVERYWHERE!
    */
    ?>

    <?php

    // W3SCHOOL TUTO
    function w3school_oop(){
        // We declared a class named Fruit with 2 properties and 2 methods.
// Ps: In a class, variables are called properties and functions are called methods.
        class Fruit{
            // Properties = Variables
            public $name;
            public $color;

            //Methods = Functions
            function set_name($name){
                $this -> name = $name; //the "$this" keyword refer to the current object, and only available inside methods.
            }
            function get_name(){
                return $this->name;
            }
            function set_color($color){
                $this -> color = $color;
            }
            function get_color(){
                return $this->color;
            }

        }
// Object of a class are created using the word "new".
// example: apple is an instance of the class Fruit
        $apple = new Fruit();
        $banana = new Fruit();

        // WE are setting up object properties
        $apple->set_name('Apple');
        $apple->set_color('Red');
        $banana->set_name('Banana');
        $banana->set_color('Yellow');

// Output : Apple & Banana and their colors
        echo "Name:" . " " . $apple->get_name();
        echo "<br>";
        echo "Color:" . " " . $apple->get_color();
        echo "<br>";
        echo "Name:" . " " . $banana->get_name();
        echo "<br>";
        echo "Color:" . " " . $banana->get_color();
        echo "<br>";
        var_dump($apple instanceof Fruit); // Boolean that return if $apple is an instanceof <class name>
    }
    //

    // EXO 1
    function exo_1_classes(){
        class Beverage{

            // PROPERTIES

            public $name;
            public $color;
            public $price;
            public $temperature;

            // METHODS

            // NAME
            function set_name($name){
                $this ->name =$name;
            }
            function get_name(){
                return $this->name;
            }

            // COLOR
            function set_color($color){
                $this->color = $color;
            }
            function get_color(){
                return $this->color;
            }

            //PRICE
            function set_price($price){
                $this->price = $price;
            }
            function get_price(){
                return $this->price;
            }

            // TEMPERATURE
            function set_temperature($temperature){
                $this->temperature=$temperature;
            }
            function get_temperature(){
                return $this->temperature;
            }

            // GET INFO
        }

        $CocaCola = new Beverage();

        $CocaCola ->set_name('CocaCola');
        $CocaCola ->set_temperature('Cold');
        $CocaCola ->set_color('Black');
        $CocaCola ->set_price('2 euros');

        echo "Name: " . $CocaCola -> get_name();
        echo "<br>";
        echo "Price: " . $CocaCola ->get_price();
        echo "<br>";
        echo "Temperature: " . $CocaCola ->get_temperature();
        echo "<br>";
        echo "Color: " . $CocaCola ->get_color();
    }
    echo exo_1_classes();
    ?>
</main>
</body>
</html>


