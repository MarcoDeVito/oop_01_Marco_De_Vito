<?php

class Company
{
    public $name;
    public $location;
    public $tot_employees;
    public $avg_salary;
    public static $counter = 0;

    public function __construct($_name, $_location, $_tot_employees = 0, $_avg_salary = 0)
    {
        $this->name = $_name;
        $this->location = $_location;
        $this->avg_salary = $_avg_salary;
        $this->tot_employees = $_tot_employees;
        self::totalCompanies();
    }

    public function printNumEmployees()
    {
        if ($this->tot_employees > 0) {
            echo "L'ufficio $this->name con sede in $this->location ha ben $this->tot_employees dipendenti\n";
        } else {
            echo "L'ufficio $this->name con sede in $this->location non ha dipendenti\n";
        }
    }

    public function calculateExpense($mounth)
    {
        $averegeExpense = $mounth * $this->avg_salary;
        return $averegeExpense;
    }

    public function printAveregeExpense($avg)
    {
        echo "il costo medio di $this->name è di $avg$\n";
    }

    public static function totalCompanies()
    {
        self::$counter++;
        echo "Sono state create " . self::$counter . " aziende\n";
    }
}

$company1 = new Company("Aulab", "Italia", 50, 1500);
$company2 = new Company("Coca-cola", "America", 15000, 2000);
$company3 = new Company("Siemens AG", "Berlino, Germania", 293000, 4833);
$company4 = new Company("Apple Inc.", "California, USA", 137000, 10167);
$company5 = new Company("Toyota Motor Corporation", "Aichi, Giappone", 366000, 5417);
$company2->printNumEmployees();
$company3->printNumEmployees();
$company2->printAveregeExpense($company2->calculateExpense(6));
$company3->printAveregeExpense($company3->calculateExpense(6));