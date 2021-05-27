<?php

/**
 * Inherited class is defined by using extends keyword
 * The child class will inherit all the public and protected properties 
 * and methods from the parent class. In addition, it can have its own properties and methods.
 * CompanyAWage class is inheriting the properties of CompanyEmployeeWage class and 
 * implementing the methods of EmployeeWageBuilderInterface
 */
class CompanyAWage extends CompanyEmployeeWage implements EmployeeWageBuilderInterface{

    /**
     * function to calculate employee wage 
     * @var totalWorkingDays is the number of working days of employee
     * @var toatalWorkingHours is the number of working hours of employee
     * @var totalEmployeeWage is the total wage of employee after particular number of working days
     * @return nothing 
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


?>