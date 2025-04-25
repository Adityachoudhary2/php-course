 <?php
    // Defining the class

    class Company{
        function getName(){
            echo "Company Name: ABC Corp\n";
            return $this; // Returning the current object instance
        }
        function getEmp(){
            echo "Company has: 30000  Employees\n";
        }

    }
 $company = new Company();

 $company->getName()->getEmp(); // Calling the method to get the company name
 ?>