<?php
require_once("Professor.php");
require_once("Student.php");
require_once("Subject.php");
require_once("Storage.php");

//subject
$subject1 = new Subject("Web Front End", "HTML 5 CSS3, Bootstrap, Sass", 90);
$subject2 = new Subject("Web Back End", "Linguaggi Web Back End, Javascript, Angular Typescript, React & Vue, NodeJs", 80);
$subject3 = new Subject("Web Architecture", "Introduzione Web, Architetture Client-Server e Cloud Computing, Paradigmi di programmazione Web, Panoramica linguaggi Web", 25);
$subject4 = new Subject("Programmazione", "Concetti Base, Programmazione Procedurale vs Object Oriented, Java", 100);
$subject5 = new Subject("PHP", "Linguggio PHP, CMS: Wordpress (sviluppo e mantenimento template)", 100);
//professor
$prof1 = new Professor("Mirko", "Greco", "11-05-1983");
$prof2 = new Professor("Carlo", "Leoanardi", "02-12-1987");
$prof3 = new Professor ("Giuseppe", "Grasso", "13-12-1983");
//student

$student1 = Student::standardCreate("Giusy", "Giangravè", "26-11-1994");
$student2 = Student::standardCreate("Daria", "Gilletti", "22-07-1994");
$student3 = Student::standardCreate("Simone", "Aiello", "19-12-1992");

//materie passate
$student1->addPassedSubject($subject1);
$student1->addPassedSubject($subject3);
$student1->addPassedSubject($subject4);

$student2->addPassedSubject($subject1);
$student2->addPassedSubject($subject3);
$student2->addPassedSubject($subject4);

$student3->addPassedSubject($subject1);
$student3->addPassedSubject($subject3);
$student3->addPassedSubject($subject4);

//materie ai prof
$prof1->addSubject($subject1);
$prof2->addSubject($subject2);
$prof2->addSubject($subject3);
$prof2->addSubject($subject4);
$prof3->addSubject($subject5);


echo "\n \n 🟤 Materie \n \n";
print_r($subject1);
print_r($subject2);
print_r($subject3);
print_r($subject4);
print_r($subject5);

echo "\n \n🔳🔲🔳🔲🔳🔲🔳🔲🔳🔲🔳🔲🔳🔲🔳🔲🔳🔲🔳🔲\n \n";

echo "\n \n 🔵 Docenti \n \n";
print_r($prof1);
echo "\n \n 🔹 Numero materie insegnate: ";
echo($prof1->countSubject());
echo "\n \n";
print_r($prof2);
echo "\n \n 🔹 Numero materie insegnate: ";
echo($prof2->countSubject());
echo "\n \n";
print_r($prof3);
echo "\n \n 🔹 Numero materie insegnate: ";
echo($prof3->countSubject());
echo "\n \n";

echo "\n \n🔳🔲🔳🔲🔳🔲🔳🔲🔳🔲🔳🔲🔳🔲🔳🔲🔳🔲🔳🔲\n \n"; 

echo "\n \n 🟣 Studenti \n \n";
print_r($student1);
echo "\n 🔸Numero materie superate: ";
echo($student1->numberPassedSubject());
echo "\n ️️🔸Materie superate:\n";
print_r($student1->getPassedSubject());

echo "\n \n---\n \n";
print_r($student2);
echo "\n 🔸Numero materie superate: ";
echo($student2->numberPassedSubject());
echo "\n 🔸Materie superate:\n";
print_r($student2->getPassedSubject());
echo "\n \n---\n \n";
print_r($student3);
echo "\n 🔸Numero materie superate: ";
echo($student3->numberPassedSubject());
echo "\n 🔸Materie superate:\n";
print_r($student3->getPassedSubject());


echo "\nREAD\n\n";

$student1->save();
$student1->read();
$student2->save();
$student2->read();
$student3->save();
$student3->read();


?>