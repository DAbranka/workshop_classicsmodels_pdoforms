<html>
<head><title>PHP OOP</title></head>
<body>
<header>
    <h1> OOP Exercice 2 - Extending</h1>
</header>
<main>
    <?php

    /* EXERCISE 2

    TODO: Make class beer that extends from Beverage.
    TODO: Create the properties name (string) and alcoholPercentage (float).
    TODO: Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.

    Remember for now we will use properties and methods that can be accessed from everywhere.
    TODO: Make a getAlcoholPercentage function which returns the alocoholPercentage.
    TODO: Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
    TODO: Also the name equal to Duvel and the alcohol percentage to 8,5%
    TODO: Print the getAlcoholPercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.

    Make sure that each print is on a different line.
    Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholPercentage() in /var/www/becode/workshop/exercise2.php on line 64
    USE TYPEHINTING EVERYWHERE!
    */
    ?>

    <?php

    // EXO 2 EXTENDING
function exo_2_extending(){
    class beverage{

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

    }

    class beer extends beverage{
        public $name;
        public $price;
        public $color;
        public $temperature;
    }

    $Jupiler = new beer();

    $Jupiler ->set_name('Jupiler');
    $Jupiler ->set_price('€2,50');
    $Jupiler ->set_temperature('Cold');
    $Jupiler ->set_color('Yellow');

    echo "Name: " . $Jupiler->get_name();
    echo "<br>";
    echo "Price: " . $Jupiler ->get_price();
    echo "<br>";
    echo "Temperature: " . $Jupiler -> get_temperature();
    echo "<br>";
    echo "Color: " . $Jupiler -> get_color();
    echo "<br>";
}
echo exo_2_extending();
?>

</main>
</body>
</html>
