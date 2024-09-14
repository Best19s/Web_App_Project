<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Crete Event</title>
   <style>

   </style>
</head>
<body>

   <form action="" method="get">
      @csrf

      <label for="name">ใส่ชื่อกิจกรรม: </label>
      <input type="text" name="name-evt" id="name">
      <br>

      <label>ใส่รายละเอียดกิจกรรม:</label><br>
      <textarea name="" id="" cols="30" rows="10">ใส่รายละเอียดตรงนี้.</textarea>
      <br>

      <label>ใส่วันที่เริ่มกิจกรรม: </label>
      <input type="datetime-local" name="start-datetime">
      <br>

      <label>ใส่วันที่สิ้นสุดกิจกรรม: </label>
      <input type="datetime-local" name="end-datetime">
      <br>

      <input type="checkbox" name="std-only">
      <label>เฉพาะนักศึกษาเท่านั้น</label>
      <br>

      <label>ใส่วันที่เริ่มการลงทะเบียน: </label>
      <input type="datetime-local" name="reg-start-datetime">
      <br>

      <label>ใส่วันที่สิ้นสุดการลงทะเบียน: </label>
      <input type="datetime-local" name="teg-end-datetime">
      <br>

      <select name="evt-type">
         <option label="เลือกประเภทกิจกรรม" selected></option>
         <option value="คอนเสิร์ต">คอนเสิร์ต</option>
         <option value="วิทยาศาสตร์">วิทยาศาสตร์</option>
         <option value="คอร์สเรียน">คอร์สเรียน</option>
         <option value="ประชุม">ประชุม</option>
      </select>
      <br>

      <label for="evt-img">ใส่รูปภาพกิจกรรม:</label>
      <input type="file" name="evt-img">
      <br>

      <input type="submit" value="สร้างกิจกรรม">

   </form>

</body>
</html>
