<!DOCTYPE html>
<html>

<body>
    <?php
    $name = $_GET["name"];
    $age = $_GET["age"];
    $your_gender= $_GET["your_gender"];
    $married =$_GET["married"];
    

    if ($age < 15 && $your_gender=="ชาย"&& $married=="ยังไม่แต่งงาน")
    {
        echo "เด็กชาย:".$name."<br>";

    }
    else if ($age >= 15 && $your_gender=="ชาย"&& $married=="ยังไม่แต่งงาน")
    {
        echo "นาย:".$name."<br>";

    }
    else if ($age >= 15 && $your_gender=="ชาย"&& $married=="แต่งงานแล้ว")
    {
        echo "นาย:".$name."<br>";

    }
    else if($age < 15 && $your_gender=="หญิง"&& $married=="ยังไม่แต่งงาน")
    {
        echo "เด็กหญิง:".$name."<br>";

    }
    else if($age >= 15 && $your_gender=="หญิง"&& $married=="ยังไม่แต่งงาน")
    {
        echo "  นางสาว:".$name."<br>";


    }
    else if($age >= 15 && $your_gender=="หญิง"&& $married=="แต่งงานแล้ว")
    {
        echo "  นาง:".$name."<br>";


    }

    
    echo "อายุ:".$age." ปี"."<br>";
    echo "เพศ:".$your_gender."<br>";
    echo  $married ."<br>";
    
    ?>
</body>

</html>