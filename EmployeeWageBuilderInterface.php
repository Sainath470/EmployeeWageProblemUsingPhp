<?php
/**
 * Interfaces allow you to specify what methods a class should implement.
 * Interfaces are declared with the interface keyword
 */
interface EmployeeWageBuilderInterface{

    /**
     * All methods in an interface are abstract, 
     * so they cannot be implemented in code and the abstract keyword is not necessary
     */
    function employeeWageCalculation();
}
?>