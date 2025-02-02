<html>
    <body>
        <?php
        //Polymorphism
        class Shape{
            public function calculateArea(){
                return "Area not defined !";
            }
        }
        class circle extends Shape {
            public $radius;
            public function calculateArea(){
                return 3.14 * ($this->radius * $this->radius);

            }
        }

        class Rectangle extends shape{
            public $length;
            public $width;

            public function calculateArea(){
                return $this->length * $this->width;

            }

        }

        $circle = new Circle();
        $circle->radius =5;
        echo "Circle Area : ". $circle->calculateArea()."<br>";


        $rect = new Rectangle();
        $rect->length =5;
        $rect->width =6;

        echo "rectangle Area : ". $rect->calculateArea()."<br>";
