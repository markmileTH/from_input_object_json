<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.6.0.js"
          integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
     <title>Document</title>
</head>

<body style="background-color: gray;" >
     <div class="container" style="margin-top: 50px; width: 400px;margin-bottom: 50px;border: solid black 1px; background-color: #5f4dee;color: white; border-radius: 25px;">
          <form action="" >
               <div class="form-group">
                    <label for="">เลขบัตรประชาชน*</label>
                    <input type="text" required class="form-control" id="IDcardnumber" value="">
               </div>
               <div class="form-group">
                    <label for="sel1">เพศ</label>
                    <select class="form-control" id="sex">
                         <option value="man">ชาย</option>
                         <option value="female">หญิง</option>
                         <option value="null">ไม่ระบุ</option>
                    </select>
               </div>
               <div class="form-group">
                    <label for="text">ชื่อ*</label>
                    <input type="text" required class="form-control" id="fname" value="">
               </div>
               <div class="form-group">
                    <label for="text">นามสกุล*</label>
                    <input type="text" required class="form-control" id="lname" value="">
               </div>
               <div class="form-group">
                    <label for="sel1">ศาสนา</label>
                    <select class="form-control" id="religion">
                         <option value="Buddhist">พุทธ</option>
                         <option value="Christianity">คริสตร์</option>
                         <option value="islam">อิสลาม</option>
                         <option value="null">ไม่ระบุ</option>
                    </select>
               </div>
               <div class="form-group">
                    <label for="text">บ้านเลขที่*</label>
                    <input type="text" required class="form-control" id="HomeAddress" value="">
               </div>
               <div class="form-group">
                    <label for="text">หมู่ที่*</label>
                    <input type="text" required class="form-control" id="village" value="">
               </div>
               <div class="form-group">
                    <label for="text">ถนน*</label>
                    <input type="text" required class="form-control" id="road" value="">
               </div>

               <div class="form-group">
                    <label for="text">ตำบล/แขวง*</label>
                    <input type="text" required class="form-control" id="district" value="">
               </div>
               <div class="form-group">
                    <label for="text">อำเภอ/เขต*</label>
                    <input type="text" required class="form-control" id="city" value="">
               </div>
               <div class="form-group">
                    <label for="sel1">จังหวัด*</label>
                    <select class="form-control" required id="province">
                         <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                         <option value="กระบี่">กระบี่ </option>
                         <option value="กาญจนบุรี">กาญจนบุรี </option>
                         <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                         <option value="กำแพงเพชร">กำแพงเพชร </option>
                         <option value="ขอนแก่น">ขอนแก่น</option>
                         <option value="จันทบุรี">จันทบุรี</option>
                         <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                         <option value="ชัยนาท">ชัยนาท </option>
                         <option value="ชัยภูมิ">ชัยภูมิ </option>
                         <option value="ชุมพร">ชุมพร </option>
                         <option value="ชลบุรี">ชลบุรี </option>
                         <option value="เชียงใหม่">เชียงใหม่ </option>
                         <option value="เชียงราย">เชียงราย </option>
                         <option value="ตรัง">ตรัง </option>
                         <option value="ตราด">ตราด </option>
                         <option value="ตาก">ตาก </option>
                         <option value="นครนายก">นครนายก </option>
                         <option value="นครปฐม">นครปฐม </option>
                         <option value="นครพนม">นครพนม </option>
                         <option value="นครราชสีมา">นครราชสีมา </option>
                         <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                         <option value="นครสวรรค์">นครสวรรค์ </option>
                         <option value="นราธิวาส">นราธิวาส </option>
                         <option value="น่าน">น่าน </option>
                         <option value="นนทบุรี">นนทบุรี </option>
                         <option value="บึงกาฬ">บึงกาฬ</option>
                         <option value="บุรีรัมย์">บุรีรัมย์</option>
                         <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                         <option value="ปทุมธานี">ปทุมธานี </option>
                         <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                         <option value="ปัตตานี">ปัตตานี </option>
                         <option value="พะเยา">พะเยา </option>
                         <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                         <option value="พังงา">พังงา </option>
                         <option value="พิจิตร">พิจิตร </option>
                         <option value="พิษณุโลก">พิษณุโลก </option>
                         <option value="เพชรบุรี">เพชรบุรี </option>
                         <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                         <option value="แพร่">แพร่ </option>
                         <option value="พัทลุง">พัทลุง </option>
                         <option value="ภูเก็ต">ภูเก็ต </option>
                         <option value="มหาสารคาม">มหาสารคาม </option>
                         <option value="มุกดาหาร">มุกดาหาร </option>
                         <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                         <option value="ยโสธร">ยโสธร </option>
                         <option value="ยะลา">ยะลา </option>
                         <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                         <option value="ระนอง">ระนอง </option>
                         <option value="ระยอง">ระยอง </option>
                         <option value="ราชบุรี">ราชบุรี</option>
                         <option value="ลพบุรี">ลพบุรี </option>
                         <option value="ลำปาง">ลำปาง </option>
                         <option value="ลำพูน">ลำพูน </option>
                         <option value="เลย">เลย </option>
                         <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                         <option value="สกลนคร">สกลนคร</option>
                         <option value="สงขลา">สงขลา </option>
                         <option value="สมุทรสาคร">สมุทรสาคร </option>
                         <option value="สมุทรปราการ">สมุทรปราการ </option>
                         <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                         <option value="สระแก้ว">สระแก้ว </option>
                         <option value="สระบุรี">สระบุรี </option>
                         <option value="สิงห์บุรี">สิงห์บุรี </option>
                         <option value="สุโขทัย">สุโขทัย </option>
                         <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                         <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                         <option value="สุรินทร์">สุรินทร์ </option>
                         <option value="สตูล">สตูล </option>
                         <option value="หนองคาย">หนองคาย </option>
                         <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                         <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                         <option value="อุดรธานี">อุดรธานี </option>
                         <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                         <option value="อุทัยธานี">อุทัยธานี </option>
                         <option value="อุบลราชธานี">อุบลราชธานี</option>
                         <option value="อ่างทอง">อ่างทอง </option>
                    </select>
               </div>

               <div class="form-group">
                    <label for="text">รหัสไปรษณีย์*</label>
                    <input type="text" required class="form-control" id="postNumber">
               </div>

               <div class="form-group">
                    <label for="text">เบอร์โทรสัพบ้าน</label>
                    <input type="text" class="form-control" id="homePhone">
               </div>

               <div class="form-group">
                    <label for="text">โทรสัพมือถือ*</label>
                    <input type="text" required class="form-control" id="phoneNumber">
               </div>

               <div class="form-group">
                    <label for="majer">สาขาที่ชื่นชอบ</label>
                    <select class="form-control" id="majer">
                         <option value="MTA">เทคโนโลยีมัลติมีเดีย แอนิเมชั่น และเกม</option>
                         <option value="ITD">เทคโนโลยีสารสนเทศและนวัตกรรมดิจิทัล</option>
                         <option value="DCM">ดิจิทัลคอนเทนต์และสื่อ</option>
                         <option value="IMI">นวัตกรรมสารสนเทศทางการแพทย์</option>
                         <option value="DCA">นิเทศศาสตร์ดิจิทัล</option>
                    </select>
               </div>

               <div class="d-grid gap-2">
                    <button id="btnsand" class="btn btn-primary" type="button" style="margin-top: 20px; margin-bottom: 20px; background-color: #FFA500;" >Submit</button>
               </div>

          </form>

     </div>
</body>
<script>
     $(() => {
          
          $("#btnsand").click(() => {
               var CID = $("#IDcardnumber").val();
               var SEX = $("#sex").val();
               var Fname = $("#fname").val();
               var Lname = $("#lname").val();
               var Religion = $("#religion").val();
               var HAddress = $("#HomeAddress").val();
               var Village = $("#village").val();
               var Road = $("#road").val();
               var District = $("#district").val();
               var City = $("#city").val();
               var Province = $("#province").val();
               var PostNumber = $("#postNumber").val();
               var HomePhone = $("#homePhone").val();
               var PhoneNumber = $("#phoneNumber").val();
               var Majer = $("#majer").val();

               showdetail(CID, SEX, Fname, Lname, Religion, HAddress, Village, Road, District, City, Province, PostNumber, HomePhone, PhoneNumber, Majer);
          })
     })

     function showdetail(CID, SEX, Fname, Lname, Religion, HAddress, Village, Road, District, City, Province, PostNumber, HomePhone, PhoneNumber, Majer) {
          
          var data = "{";
          data += '"Idcardnumber":"' + $("#IDcardnumber").val() + '",';
          data += '"sex":"' + $("#sex").val() + '",';
          data += '"FristName":"' + $("#fname").val() + '",';
          data += '"LastName":"' + $("#lname").val() + '",';
          data += '"Religion":"' + $("#religion").val() + '",';
          data += '"HomeNumber":"' + $("#HomeAddress").val() + '",';
          data += '"Village":"' + $("#village").val() + '",';
          data += '"Road":"' + $("#road").val() + '",';
          data += '"District":"' + $("#district").val() + '",';
          data += '"City":"' + $("#city").val() + '",';
          data += '"Province":"' + $("#province").val() + '",';
          data += '"PostNumber":"' + $("#postNumber").val() + '",';
          data += '"HomePhone":"' + $("#homePhone").val() + '",';
          data += '"PhoneNumber":"' + $("#phoneNumber").val() + '",';
          data += '"MyfavoriteMejer":"' + $("#majer").val() + '"';
          data += "}";
          console.log(JSON.parse(data));
     }
</script>

</html>
