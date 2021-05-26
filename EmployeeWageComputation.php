<?php 

class EmployeeWageComputation{
    /**
     * Declaring constant properties and initializing
     */
    const FULL_TIME_HOURS = 8;
    const PART_TIME_HOURS = 4;

    private $company;
    private $wagePerHour;
    private $totalWorkingDays;
    private $totalWorkingHours;

    //constructor
    public function __construct($company, $wagePerHour, $totalWorkingDays, $totalWorkingHours){
        //Initialising the object
        $this->company = $company;
        $this->wagePerHour = $wagePerHour;
        $this->totalWorkingDays = $totalWorkingDays;
        $this->totalWorkingHours = $totalWorkingHours;
    }

    /**
     * function to provide random number as attendance
     * returns random number either 1 or 2.
    */
    public function employeeAttendance(){
            return mt_rand(1,3);
    }

    /**
     * Method to calculate employee Wage using switch statement
     * returning total wage of employee , working days and working hours;
     */
    public function employeeWageCalculation(){
        $workingDays = 0;
        $employeeHours =0;

        While($workingDays < $this->totalWorkingDays && $employeeHours < $this->totalWorkingHours){
            $check = $this->employeeAttendance();//calling method inside a method using this key word
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
        $totalWage = $employeeHours *  $this->wagePerHour;

        echo "Company name: " .$this->company. "\n";
        echo "Total Employee Wage for $this->totalWorkingDays days is: $totalWage\n";
        echo "Total Employee Working Hours:" .$employeeHours."\n";
    }
}

/**
 * creating an object and calling the Method using the object
 */
$employeeWageComputationForACompany = new EmployeeWageComputation("A-company", 20, 20, 100);
$employeeWageComputationForBCompany = new EmployeeWageComputation("B-company", 15, 30, 120);
$employeeWageComputationForCCompany = new EmployeeWageComputation("C-company", 25, 15, 80);

$employeeWageComputationForACompany -> employeeWageCalculation();
$employeeWageComputationForBCompany -> employeeWageCalculation();
$employeeWageComputationForCCompany -> employeeWageCalculation();
?>