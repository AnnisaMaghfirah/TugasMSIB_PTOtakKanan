<?php
// Memuat definisi kelas dari tiga file terpisah
require_once 'person.php';
require_once 'student.php';
require_once 'lecturer.php';

// Contoh penggunaan kelas-kelas yang dimuat
$student = new Student("Annisa Maghfirah", "2110817220002", "Universitas Lambung Mangkurat");
$student->addCourse(["code" => "CSC101", "name" => "Pemrograman Web", "credit" => 3]);
$student->addCourse(["code" => "MAT101", "name" => "Matematika Diskrit", "credit" => 3]);

$lecturer = new Lecturer("Ir. Eka Setya Wijaya, S.T., M.Kom");

$student->consultAdvisor($lecturer);
?>
