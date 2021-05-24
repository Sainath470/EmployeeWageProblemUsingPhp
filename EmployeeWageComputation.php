<?php 
/**
 * Declaring varaible
 */
$randomCheck = 0;

/**
 * creating a function to check whether Employee is Present or Absent
 * Using mt_rand() function. 
 * Can also use rand()
 */
function checkingEmployeeAttendance(){
    $randomCheck = mt_rand(1,2);
    if($randomCheck == 1){
        echo "Employee is Present";
    }
    else{
        echo "Employee is Absent";
    }
}

/**
 * Calling the checkingEmployeeAttendance() function.
 */
checkingEmployeeAttendance();
?>