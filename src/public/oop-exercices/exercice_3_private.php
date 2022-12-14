<html>
<head><title>PHP OOP</title></head>
<body>
<header>
    <h1> OOP Exercice 3 - Private</h1>
</header>
<main>
    <?php

    /* EXERCISE 3

TODO: Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties private.
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."

Make sure that you use the variables and not just this text line.

TODO: Print this method on the screen on a new line.

USE TYPEHINTING EVERYWHERE!
*/
    ?>

    <?php

    // EXO 2 PRIVATE
    function exo_3_private(){
        class beverage{

            // PROPERTIES

            private $name;
            private $color;
            private $price;
            private $temperature;

            // METHODS

            // NAME
            function __construct($name){
                $this ->name =$name;
            }
            function get_name(){
                return $this->name;
            }

            // COLOR
            private function set_color($color){
                $this->color = $color;
            }
            function get_color(){
                return $this->color;
            }

            //PRICE
            private function set_price($price){
                $this->price = $price;
            }
            function get_price(){
                return $this->price;
            }

            // TEMPERATURE
            private function set_temperature($temperature){
                $this->temperature=$temperature;
            }
            function get_temperature(){
                return $this->temperature;
            }

        }
        class beer extends beverage{
        }

        $Duvel = new beer("");

        $Duvel ->set_name('Duvel');
        $Duvel ->set_color('Blond');
        $Duvel ->set_temperature('Cold');
        $Duvel ->set_price("€3;50");

        echo "Name: " . $Duvel ->get_name();

    }
    echo exo_3_private();
    ?>

</main>
</body>
</html>
