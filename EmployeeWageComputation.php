<?php 
class EmployeeWageComputation{

    const FULL_TIME_HOURS = 8;
    const PART_TIME_HOURS = 4;
    /**
     * Declaring properties
     */
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
    function employeeAttendance(){
            return mt_rand(1,3);
    }

    /**
     * Method to calculate employee Wage using switch statement
     * returning total wage of employee , working days and working hours;
     */
    function employeeWageCalculation(){
        $workingDays = 0;
        $employeeHours =0;

        //creating an empty array
        $companyEmployeeWage = array();

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

        //pushing the elements into array
        array_push($companyEmployeeWage, "$this->company", "$employeeHours", "$this->wagePerHour", "$totalWage" );

        //printing them using array index
        echo "Company name: " .$companyEmployeeWage[0]. "\n";
        echo "Total Employee Working Hours:" .$companyEmployeeWage[1]."\n";
        echo "Employee Wage Per Hour is: " .$companyEmployeeWage[2]. "\n";
        echo "Total Employee Wage for $this->totalWorkingDays days is: $companyEmployeeWage[3]\n";
        echo "\n";
    }
}
/**
 * creating an object for each company
 */
<<<<<<< HEAD

$employeeWageComputationForACompany = new EmployeeWageComputation("A-company", 20, 20, 100);
$employeeWageComputationForBCompany = new EmployeeWageComputation("B-company", 15, 30, 120);
$employeeWageComputationForCCompany = new EmployeeWageComputation("C-company", 25, 15, 80);
=======
$employeeWageComputation = new EmployeeWageComputation();
>>>>>>> UC8-calculate-wage-for-multiple-companies

/**
 * calling the function using the object  
 */
<<<<<<< HEAD
$employeeWageComputationForACompany -> employeeWageCalculation();
$employeeWageComputationForBCompany -> employeeWageCalculation();
$employeeWageComputationForCCompany -> employeeWageCalculation();
=======
$employeeWageComputation -> employeeWageCalculation("A-company", 20, 20, 100);
$employeeWageComputation -> employeeWageCalculation("B-company", 15, 30, 120);
$employeeWageComputation -> employeeWageCalculation("C-company", 25, 15, 80);
>>>>>>> UC8-calculate-wage-for-multiple-companies
?>