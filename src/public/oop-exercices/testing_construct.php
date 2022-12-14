

<?php

//declare(strict_types=1);

    // EXO 1
    function testing_constuct(){
        class getinfo{

            // PROPERTIES
            public $myName;
            public $myLastName;

            // CONSTRUCT

            function __contruct($myName, $myLastName){
                $this->myName = $myName;
                $this->myName = $myLastName;
            }

            // METHODS

            public function showInfo(){
                echo "My name is: $this->myname, $this->myLastName.";
            }


        }
    $me = new getinfo("David","Abranka");
        $me ->showInfo();

    }
    echo testing_constuct();
    ?>
</main>
</body>
</html>


