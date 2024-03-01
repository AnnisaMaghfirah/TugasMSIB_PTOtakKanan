<?php
// Memuat definisi kelas dari tiga file terpisah
require_once 'person.php';
require_once 'student.php';
require_once 'lecturer.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Ambil data yang dikirimkan melalui metode POST
    $name = $_POST["name"];
    $nim = $_POST["nim"];
    $university = $_POST["university"];
    $courses = $_POST["courses"];
    $lecturerName = $_POST["lecturer"];

    // Buat objek Student dengan data yang diambil dari formulir
    $student = new Student($name, $nim, $university);

    foreach ($courses as $course) {
        $student->addCourse([
            "code" => $course["code"],
            "name" => $course["name"],
            "credit" => $course["credit"]
        ]);
    }

    $lecturer = new Lecturer($lecturerName);

    // Tampilkan data dari objek Student
    $student->consultAdvisor($lecturer);
}
?>
