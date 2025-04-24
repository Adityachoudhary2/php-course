 <?php
 trait ParantCompany1{
    function getEmp(){
        echo 200;

    }
 }
 trait ParantCompany2{
    function getEmp(){
        echo 300;

    }
 }
 class Company{
    use ParantCompany1;
    use ParantCompany2{
        ParantCompany1::getEmp insteadof ParantCompany2; // 100
       
    }

 }

 $c1= new Company();
    $c1->getEmp(); // 100
    echo "<br>";
    $c1->getEmp(); // 200

 ?>