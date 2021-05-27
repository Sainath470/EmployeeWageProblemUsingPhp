<?php

/**
 * require is used to take the text/code that exists in the specified file
 * produces fata error when file is not found and stops the script to
 * execute
 */
require "CompanyEmployeeWage.php";
require "EmployeeWageBuilderInterface.php";
require "CompanyAWage.php";
require "CompanyBWage.php";


class EmployeeWageBuilderMain{
}
/**
 * creating multiple objects
 */
$employeeWageBuilderACompany = new CompanyAWage("A-Company", 20, 15, 100);
$employeeWageBuilderBCompany = new CompanyBWage("B-Company", 19, 16, 80);

/**
 * calling the function employeeWageCalculation 
 */
$employeeWageBuilderACompany-> employeeWageCalculation();
$employeeWageBuilderBCompany-> employeeWageCalculation();

?>