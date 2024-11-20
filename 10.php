<?php
class Student
{
public $name;
public $rollNo;
public $branch;
public $year;
public function getData()
{
echo "Enter Name: ";
$this->name = trim(fgets(STDIN));
echo "Enter Roll No: ";
$this->rollNo = trim(fgets(STDIN));
echo "Enter Branch: ";
$this->branch = trim(fgets(STDIN));
echo "Enter Year: ";
$this->year = trim(fgets(STDIN));
}
public function putData()
{
echo "Student Name: " . $this->name . "\n";
echo "Student Roll No: " . $this->rollNo . "\n";
echo "Student Branch: " . $this->branch . "\n";
echo "Student Year: " . $this->year . "\n\n";
}
}
echo "Enter the number of students: ";
$numberOfStudents = (int) trim(fgets(STDIN));
$students = [];
for ($i = 0; $i < $numberOfStudents; $i++) {
echo "\nEnter details for Student " . ($i + 1) . ":\n";
$student = new Student();
$student->getData();
$students[] = $student;
}
echo "\n+ +\n";
echo "Student Details:\n";
foreach ($students as $student) {
$student->putData();
}
?>