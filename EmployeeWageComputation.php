<?php

/**
 * require is used to take the text/code that exists in the specified file
 * produces fata error when file is not found and stops the script to
 * execute
 */
require "CompanyEmployeeWage.php";

/**
 * Inherited class is defined by using extends keyword
 * The child class will inherit all the public and protected properties 
 * and methods from the parent class. In addition, it can have its own properties and methods.
 */
class EmployeeWageBuilder extends CompanyEmployeeWage{

    /**
     * function to calculate employee wage 
     * @return void
     */
    function employeeWageCalculation(){
        $workingDays = 0;
        $employeeHours =0;

        While($workingDays < $this->totalWorkingDays && $employeeHours < $this->totalWorkingHours){
            $check = mt_rand(1,3);
            switch($check){
                case 1:
                    $employeeHours += self::FULL_TIME_HOURS;
                    break;
                case 2:
                    $employeeHours += self::PART_TIME_HOURS;
                    break;
                default:
                    break;
            }
            $workingDays++;
        }
        $totalEmployeeWage = $employeeHours *  $this->wagePerHour;

        //printing them using array index
        echo "Company name: " .$this->companyName. "\n";
        echo "Total Employee Working Hours:" .$this->totalWorkingHours."\n";
        echo "Employee Wage Per Hour is: " .$this->totalWorkingDays. "\n";
        echo "Total Employee Wage for $this->totalWorkingDays days is: $totalEmployeeWage\n";
        echo "\n";
    }
}

/**
 * creating multiple objects of class EmployeeWageBuilder
 */
$employeeWageBuilderACompany = new EmployeeWageBuilder("A-Company", 20, 15, 100);
$employeeWageBuilderBCompany = new EmployeeWageBuilder("B-Company", 19, 16, 80);
$employeeWageBuilderCCompany = new EmployeeWageBuilder("C-Company", 17, 18, 90);

/**
 * calling the function employeeWageCalculation 
 */
$employeeWageBuilderACompany-> employeeWageCalculation();
$employeeWageBuilderBCompany-> employeeWageCalculation();
$employeeWageBuilderCCompany-> employeeWageCalculation();

?>