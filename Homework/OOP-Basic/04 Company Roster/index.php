<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 20-Feb-17
 * Time: 11:52 AM
 */
include_once "CompanyRoster.php";
$linesCount = trim(fgets(STDIN));
$employees = [];
for ($i = 0; $i < $linesCount; $i++) {
    $employeeInfo = explode(" ", trim(fgets(STDIN)));
    list($name, $salary, $position, $department) = [$employeeInfo[0], $employeeInfo[1],
        $employeeInfo[2], $employeeInfo[3]];
    if (count($employeeInfo) > 5) {
        $email = $employeeInfo[4];
        $age = $employeeInfo[5];
        $employee = new Employee($name, $salary, $position, $department, $email, $age);
    } else if (count($employeeInfo) > 4) {
        if (is_numeric($employeeInfo[4])) {
            $age = $employeeInfo[4];
            $employee = new Employee($name, $salary, $position, $department, 'n/a', $age);
        } else {
            $email = $employeeInfo[4];
            $employee = new Employee($name, $salary, $position, $department, $email, -1);
        }
    } else {
        $employee = new Employee($name, $salary, $position, $department);
    }
    $employees[] = $employee;
}
$departments = [];
foreach ($employees as $employee) {
    if (array_key_exists($employee->getDepartment(), $departments)) {
        $departments[$employee->getDepartment()]++;
    } else {
        $departments[$employee->getDepartment()] = 1;
    }
}
$averageSalaries = [];
foreach ($departments as $department => $count) {
    $averageSalary = 0;
    foreach ($employees as $employee) {
        if ($employee->getDepartment() == $department) {
            $averageSalary += $employee->getSalary();
        }
    }
    $averageSalary /= $count;
    $averageSalaries[$department] = round($averageSalary, 2);
}
$highestSalary = max($averageSalaries);
$highestSalaryDepartment = array_search($highestSalary, $averageSalaries);
echo "Highest Average Salary: {$highestSalaryDepartment}\n";
function orderBySalary($a, $b)
{
    return $a->getSalary() < $b->getSalary();
}

usort($employees, 'orderBySalary');
foreach ($employees as $employee) {
    if ($employee->getDepartment() == $highestSalaryDepartment) {
        echo $employee->getName() . ' ' .
            number_format($employee->getSalary(), 2) . ' ' .
            $employee->getEmail() . ' ' .
            $employee->getAge() . "\n";
    }
}
