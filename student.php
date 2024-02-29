<?php
// inheritance
require_once 'person.php';

// Class Student yang merupakan turunan dari class Person
class Student extends Person {
    private $nim;
    private $university;
    private $krs = [];

    public function __construct($name, $nim, $university) {
        parent::__construct($name);
        $this->nim = $nim;
        $this->university = $university;
    }

    public function getNIM() {
        return $this->nim;
    }

    public function getUniversity() {
        return $this->university;
    }

    public function addCourse($course) {
        $this->krs[] = $course;
    }

    public function consultAdvisor($advisor) {
        $advisorName = $advisor->getName();
        $advisorTitle = $advisor instanceof Lecturer ? $advisor->getTitle() : '';
        $advisorInfo = $advisorTitle;

        echo "
            <table border='1'>
                <tr>
                    <th>Nama Mahasiswa</th>
                    <td>{$this->getName()}</td>
                </tr>
                <tr>
                    <th>NIM</th>
                    <td>{$this->getNIM()}</td>
                </tr>
                <tr>
                    <th>Nama Kampus</th>
                    <td>{$this->getUniversity()}</td>
                </tr>
                <tr>
                    <th>Dosen Wali</th>
                    <td>{$advisorInfo}</td>
                </tr>
                <tr>
                    <th>KRS</th>
                    <td>
                        <table border='1'>
                            <tr>
                                <th>Kode Mata Kuliah</th>
                                <th>Nama Mata Kuliah</th>
                                <th>Jumlah SKS</th>
                            </tr>";
        foreach ($this->krs as $course) {
            echo "
                            <tr>
                                <td style='text-align:center'>{$course['code']}</td>
                                <td style='text-align:center'>{$course['name']}</td>
                                <td style='text-align:center'>{$course['credit']}</td>
                            </tr>";
        }
        echo "
                        </table>
                    </td>
                </tr>
            </table>
        ";
    }
}

?>
