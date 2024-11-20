<?php
// Define the Student class
class Student {
    public $RollNo;
    public $Name;
    public $Branch;
    public $Year;

    // Constructor to initialize the values
    public function __construct($rollNo, $name, $branch, $year) {
        $this->RollNo = $rollNo;
        $this->Name = $name;
        $this->Branch = $branch;
        $this->Year = $year;
    }

    // Function to display student details
    public function displayDetails() {
        echo "Roll No: " . $this->RollNo . "\n";
        echo "Name: " . $this->Name . "\n";
        echo "Branch: " . $this->Branch . "\n";
        echo "Year: " . $this->Year . "\n\n";
    }
}

// Function to get input from the user
function getStudentDetails($studentNumber) {
    echo "Enter details for Student $studentNumber:\n";

    $rollNo = readline("Roll No: ");
    $name = readline("Name: ");
    $branch = readline("Branch: ");
    $year = readline("Year: ");

    return new Student($rollNo, $name, $branch, $year);
}

// Get details for 3 students
$student1 = getStudentDetails(1);
$student2 = getStudentDetails(2);
$student3 = getStudentDetails(3);

// Display the details of each student
echo "\nStudent 1 Details:\n";
$student1->displayDetails();

echo "Student 2 Details:\n";
$student2->displayDetails();

echo "Student 3 Details:\n";
$student3->displayDetails();
?>
