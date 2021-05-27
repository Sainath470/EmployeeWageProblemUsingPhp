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
     * @var companyEmployeeWageArray to store the employee wage details into an array
     * @return nothing 
     */
    function employeeWageCalculation(){
        $workingDays = 1;
        $employeeHours =0;
        $totalEmployeeWagePerDay = 0;
        $totalEmployeeWage = 0;
        $companyEmployeeWageArray = array();

        While($workingDays < $this->totalWorkingDays && $employeeHours < $this->totalWorkingHours){
            $check = mt_rand(1,3);
            switch($check){
                case 1:
                    $employeeHours += self::FULL_TIME_HOURS;
                    $totalEmployeeWagePerDay = $employeeHours * $this-> wagePerHour;
                    //printing the employee wage per day
                    echo "Employee wage on " .$workingDays." Day is : " .$totalEmployeeWagePerDay. "\n";
                    break;
                case 2:
                    $employeeHours += self::PART_TIME_HOURS;
                    $totalEmployeeWagePerDay = $employeeHours * $this-> wagePerHour;
                    echo "Employee wage on " .$workingDays." Day is : " .$totalEmployeeWagePerDay. "\n";
                    break;
                default:
                    break;
            }
            $workingDays++;
        }
        $totalEmployeeWage += $employeeHours * $this->wagePerHour;

        array_push($companyEmployeeWageArray,
                   $this->companyName,
                   $this->wagePerHour, 
                   $employeeHours, 
                   $this->totalWorkingDays, 
                   $totalEmployeeWage);

        /**
        * creating foreach loop to store elements of array into list 
        */ 
        foreach($companyEmployeeWageArray as $values){
        list($values) = $companyEmployeeWageArray;
        }

        /**
        * creating foreach loop to iterate all the elements of list
        */
        echo "Elements in the list are: \n";
        foreach($companyEmployeeWageArray as $values){
            echo $values. "\n";
        }

        //printing the elements of array using array index
        echo "Company name: " .$companyEmployeeWageArray[0]. "\n";
        echo "Total Employee Working Hours:" .$companyEmployeeWageArray[2]."\n";
        echo "Employee Wage Per Hour is: " .$companyEmployeeWageArray[1]. "\n";
        echo "Total Employee Wage for $companyEmployeeWageArray[3] days is: $companyEmployeeWageArray[4]\n";
        echo "\n";
    }

}


?>