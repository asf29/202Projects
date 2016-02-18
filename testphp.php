#!/usr/bin/php
<?php
## the $argv[0] will concatenate begin script with the first
## value of the array $argv which is the name of the file
## PHP_EOL determines the format for starting the next line
echo "Begin Script " . $argv[0].PHP_EOL;

class Student
{
    ## variables can be either public or private
    ## public can be accessed by anyone with access to the class
    ## private can only be accessed within the class
    private $name;
    private $address;
    private $gpa;
    private $year;
    public $major;

    public function __construct($name, $address="", $gpa=0.0, $year=1)
    {
        $this->name = $name;
        $this->address = $address;
        $this->gpa = $gpa;
        $this->year = $year;
    }

    public function printName()
    {
        echo "Name: " . $this->name.PHP_EOL;
    }

    public function printStudent()
    {
        echo "    Name: " . $this->name.PHP_EOL;
        echo "    Address: " . $this->address.PHP_EOL;
        echo "    GPA: " . $this->gpa.PHP_EOL;
        echo "    Year: " . $this->year.PHP_EOL;
    }
/*
    public function setGPA($gpa)
    {
        $this->gpa = $gpa;
    }
*/
}

$myStudent = new Student("Steve", "Belleville", 4.0, 4);
## $myStudent->setGPA(2.3);
$myStudent->major = "IT";
$myStudent->printStudent();

/*
$var = "some value";
$number = 412342134;
$realNumber = 12341234.1241241;
$arr = array();
$arr[] = 5;
$arr[] = "words";
$arr[] = 5345.2342;
$arr [] = array("food", "water", "shelter", "heart");

## used to print the contents of the array
print_r($arr);

## also used to output...gives data type but not always in order
var_dump($arr);
*/
echo "End Script " . $argv[0].PHP_EOL;

?>
