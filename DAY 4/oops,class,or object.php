<html>
    <body>
        <?php
        //Classes and objects
        //Create a class

        class car{
            public $brand; //Property of the car
            public $color; //Property of the car
           // private
           // protected
           public function StartEngine(){       //method
            return "The engine was start";
         }
        }
        //create an object
        $car = new car();
        $car->brand = "MERCEDES";
        $car->color = "black";
        echo "Car brand:" .$car->brand ."<br>";
        echo $car->StartEngine();
        
        
        
        
        ?>
        </body>
        </html>
