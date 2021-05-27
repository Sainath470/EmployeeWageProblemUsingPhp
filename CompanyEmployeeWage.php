<?php
class CompanyEmployeeWage{

    /**
    * declaring and initializing constant properties
    */
    const FULL_TIME_HOURS = 8;
    const PART_TIME_HOURS = 4;

    /**
    * Declaring properties
    */
    public $companyName;
    public $wagePerHour;
    public $totalWorkingDays;
    public $totalWorkingHours;


    /**
    * constructor to initialising the object
    */
    function __construct($companyName, $wagePerHour, $totalWorkingDays, $totalWorkingHours){
        //Initialising the object
        $this->companyName = $companyName;
        $this->wagePerHour = $wagePerHour;
        $this->totalWorkingDays = $totalWorkingDays;
        $this->totalWorkingHours = $totalWorkingHours;
    }
}
?>
