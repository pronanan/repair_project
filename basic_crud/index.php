<?php
require_once "service/connect.php";

$date = new DateTime();
$date->setTimezone(new DateTimeZone('Asia/Bangkok'));
$de = $date->format(DateTime::RFC1123);

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Repair Project</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>

    <body>
        <div class="main">  
            	
            <input type="checkbox" id="chk" aria-hidden="true">
    
                <div class="signup">
                    <form action="service/signup.php" method="post">
                        <label for="chk" aria-hidden="true">สมัครสมาชิก</label>
                        <input type="text" name="name" placeholder="ชื่อ" required="">
                        <input type="text" name="lname" placeholder="นามสกุล" required="">                        
                        <input type="email" name="email" placeholder="อีเมล" required="">
                        <input type="text" name="user" placeholder="ชื่อผู้ใช้" required="">
                        <input type="password" name="pswd" placeholder="รหัสผ่าน" required="">
                        <input type="text" name="tel" placeholder="เบอร์โทร" required="">
                        <input type="hidden" name="status" value="user" required="">
                        <input type="hidden" name="created_at" value= <?php $de ?>    required="">
                        <input type="hidden" name="updated_at" value=<?php $de ?>  required="">
                        <button>สมัคร</button>
                    </form>
                </div>
    
                <div class="login">
                    <form action="service/check_login.php" method="post">
                        <label for="chk" aria-hidden="true">เข้าสู่ระบบ</label>
                        <input type="email" name="email" placeholder="ชื่อผู้ใช้" required="">
                        <input type="password" name="pswd" placeholder="รหัสผ่าน" required="">
                        <button>เข้าสู่ระบบ</button>
                    </form>
                </div>
        </div>
    </body>
    </html>

</body>

</html>