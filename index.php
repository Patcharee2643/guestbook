<!DOCTYPE html>
<html>

<body>
    <form action="show.php">
        ชื่อ:<input type="text" name="name"><br>
        อายุ:<input type="text" name="age"><br>
        เพศ:<br>
        <input type="radio" id="male" name="your_gender" value="ชาย">
        <label for="male">ชาย</label>
        <input type="radio" id="female" name="your_gender" value="หญิง">
        <label for="female">หญิง</label><br>
  
        
        สถานะการแต่งงาน:<br>
        <input type="radio" id="married" name="married" value="แต่งงานแล้ว">
        <label for="married">แต่งงานแล้ว</label>
        <input type="radio" id="unmarried" name="married" value="ยังไม่แต่งงาน">
        <label for="unmarried">ยังไม่แต่งงาน</label><br>
       
        
        <input type="Submit" value="Submit">
    </form>

   
</body>

</html>