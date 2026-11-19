<?php 
    // $name = 'ateeq';
    // $age = '20';
    // $occpation = 'student';
    // $learning = 'php';
    // echo 'Hi php i am ',$name,'my age is ',$age, 'as a ', $occpation,' of ' ,$learning,' language you have to teach me!';
    // $item = 'mobile';
    // $price = 10000;
    // $quantity = 2;
    // $subtotal = $price * $quantity;
    // $tax = 0.20 * $subtotal;
    // $total = $subtotal + $tax;
    // echo 'Item: '. $item . "\n";
    // var_dump($item);
    // echo 'Price: '. $price . "\n";
    // var_dump($price);
    // echo 'Quantity: '. $quantity . "\n";
    // var_dump($quantity);
    // echo 'Subtotal: '. $subtotal . "\n";
    // var_dump($subtotal);
    // echo 'Tax: '. $tax . "\n";
    // var_dump($tax);
    // echo 'Total: '. $total . "\n";
    // $isStudent = true;
    // var_dump($isStudent);
    // $colors =[
    //     'red',
    //     'green',
    //     'blue'
    // ];
    // var_dump($colors);
    // $price = 10;
    // $quantity = 20;
    // function calculateTotal(float $price, int $quantity) {
    //     $total = $price * $quantity;
    //     return (float) 0.20 * $total;
    // }
    // echo calculateTotal($price, $quantity);

// class Student
// {
//     public $name;
//     public $age;

//     public function __construct($name, $age)
//     {
//         $this->name = $name;
//         $this->age = $age;
//     }

//     public function getStudetDetails()
//     {
//         echo "Name:" . $this->name . "\n";
//         echo "Age:" . $this->age . "\n";
//     }
// }

// $student1 = new Student('ateeq', 20);
// $student1->getStudetDetails();


//////////Private and Protected////////

//     class Ateeq {
//         protected $myPhone ='Ateeq you can use your phone';
//         protected $sayYesOrNo = 'YES';
//     }
//     class iCanUse extends Ateeq {
//         public function permissionPhoneUsage () {
//             echo $this->sayYesOrNo . "MR" . $this->myPhone;
//         }

//     }
// $user = new iCanUse();
// $user->permissionPhoneUsage();


////Constructor///////
// class Student
// {
//     public $name;
//     public $age;

//     public function __construct($name, $age)
//     {
//         $this->name = $name;
//         $this->age = $age;
//         echo "Name: " . $this->name . " Age: " . $this->age;
//     }
// }

// $s = new Student('ateeq', 20);

///////Interface////////

// abstract class University
// {
//     abstract public function bioDep(): string;
//     abstract public function engDep(): string;
//     abstract public function chemDep(): string;
// }

// class Nust extends University
// {
//     public function bioDep(): string
//     {
//         return "Welcome in Bio Department";
//     }
//         public function engDep(): string
//     {
//         return "Welcome in Engineering Department";
//     }
//         public function chemDep(): string
//     {
//         return "Welcome in Chemistry Department";
//     }
// }

// $newDep = new Nust();
// echo $newDep->bioDep() . "\n";
// echo $newDep->engDep() . "\n";
// echo $newDep->chemDep() . "\n";

// namespace Shop {
//     class Cart
//     {
//         public function hello(): string
//         {
//             return "I am the Shop cart";
//         }
//     }
// }

// namespace Blog {
//     class Cart
//     {
//         public function hello(): string
//         {
//             return "I am the Blog cart";
//         }
//     }
// }

// namespace {
//     use Shop\Cart;

//     $a = new Cart();
//     $b = new Blog\Cart();

//     echo $a->hello() . "\n";
//     echo $b->hello() . "\n";
// }