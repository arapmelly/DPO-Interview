 - #### Describe the principles of Object-Oriented Programming (OOP) in PHP. How do you define a class and create objects in PHP? Provide an example of a class and its instantiation.
**Principles of OOP**
 
 - **Encapsulation**:  internal workings of an object are hidden from the outside world, and only the necessary interfaces are exposed.
 - **Inheritance**: It allows a new class (child class) to inherit properties and methods from an existing class (parent class)
 - **Polymorphism**:  It enables a single interface to represent different underlying data types or forms
 - **Abstraction**: simplifying complex systems by modeling classes based on their essential characteristics while hiding unnecessary details.

**Example:**

    <?php
    // Define a class named 'Car'
    class Car {
        // Properties (attributes)
        public $brand;
        public $model;
        public $year;
    
        // Methods (functions)
        public function start() {
            
        }
    
        public function stop() {
          
        }
    
        public function drive($distance) {
            
        }
    }
    
    // Instantiate objects of the 'Car' class
    $car1 = new Car();
    $car1->brand = "Toyota";
    $car1->model = "Camry";
    $car1->year = 2022;
    
    ?>
