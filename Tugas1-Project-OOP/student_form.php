<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
</head>
<body>
    <h2>Student Form</h2>
    <form action="index.php" method="post">
        <label for="name">Nama Mahasiswa:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        <label for="nim">NIM:</label><br>
        <input type="text" id="nim" name="nim" required><br><br>
        <label for="university">Nama Kampus:</label><br>
        <input type="text" id="university" name="university" required><br><br>
        <label for="course1">Mata Kuliah 1:</label><br>
        <select id="course1" name="courses[0][code]" required>
            <option value="CSC101">CSC101</option>
            <option value="MAT101">MAT101</option>
        </select><br>
        <select id="course1_name" name="courses[0][name]" required>
            <option value="Pemrograman Web">Pemrograman Web</option>
            <option value="Matematika Diskrit">Matematika Diskrit</option>
        </select><br>
        <select id="course1_credit" name="courses[0][credit]" required>
            <option value="3">3 SKS</option>
        </select><br><br>
        <label for="course2">Mata Kuliah 2:</label><br>
        <select id="course2" name="courses[1][code]" required>
            <option value="CSC101">CSC101</option>
            <option value="MAT101">MAT101</option>
        </select><br>
        <select id="course2_name" name="courses[1][name]" required>
            <option value="Pemrograman Web">Pemrograman Web</option>
            <option value="Matematika Diskrit">Matematika Diskrit</option>
        </select><br>
        <select id="course2_credit" name="courses[1][credit]" required>
            <option value="3">3 SKS</option>
        </select><br><br>
        <label for="lecturer">Dosen Wali:</label><br>
        <input type="text" id="lecturer" name="lecturer" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
