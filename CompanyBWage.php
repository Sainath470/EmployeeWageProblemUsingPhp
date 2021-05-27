<?php

/**
 * Inherited class is defined by using extends keyword
 * The child class will inherit all the public and protected properties 
 * and methods from the parent class. In addition, it can have its own properties and methods.
 * CompanyBWage class is inheriting the properties of CompanyEmployeeWage class and 
 * implementing the methods of EmployeeWageBuilderInterface
 */
class CompanyBWage extends CompanyEmployeeWage implements EmployeeWageBuilderInterface{

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
        $companyEmployeeWageArray = array();

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

        array_push($companyEmployeeWageArray,
                   $this->companyName,
                   $this->wagePerHour, 
                   $employeeHours, 
                   $this->totalWorkingDays, 
                   $totalEmployeeWage);

                foreach($companyEmployeeWageArray as $values){
                list($values) = $companyEmployeeWageArray;
                }
                
                echo "Elements in the array list are: \n";
                foreach($companyEmployeeWageArray as $values){
                    echo $values. "\n";
                }

        //printing them using array index
        echo "Company name: " .$companyEmployeeWageArray[0]. "\n";
        echo "Total Employee Working Hours:" .$companyEmployeeWageArray[2]."\n";
        echo "Employee Wage Per Hour is: " .$companyEmployeeWageArray[1]. "\n";
        echo "Total Employee Wage for $companyEmployeeWageArray[3] days is: $companyEmployeeWageArray[4]\n";
        echo "\n";
    }
}


?>