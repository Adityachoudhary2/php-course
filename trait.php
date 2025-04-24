 <?php
 
trait parentCompany1{
    function  getTotaEmp(){
        echo 500;
    }
}

trait parentCompany2{
    function  getTotaOffice(){
        echo 10;
    }
}

 class Company{
    use parentCompany1;
    use parentCompany2;
   
 }
 $cmp= new Company();
    $cmp->getTotaEmp(); // 500
    echo "<br>";
    $cmp->getTotaOffice(); // 10
    
 ?>