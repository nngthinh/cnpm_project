<?php include('../signup_21/server_Dao.php') ?>
<?php $username = $_SESSION['username']; ?>

<!DOCTYPE html>
<html>
<head>
	<title> Trang chủ - IT </title>
	<meta charset="utf-8">
		<link rel="stylesheet">
    <style type="text/css">
        nav{
            background-color:#333;

        }
        nav a{
            display:inline-block;
            padding:0.5%;
            font-size:130%;
            color:white;
            text-decoration:none;
            text-align: center;
            margin:0 auto;
            }        
        nav a:hover
        {
        	background-color:teal;

        }
        body {
        	background-image: url(../hinh/back3.jpg);
        	background-size:cover;
        }
       </style>
</head>
<body>
	<nav style="text-align: right; margin: -0.6%">
    	<span style="color: white; font-size: 130%">Xin chào, <?php echo $username ?></span> &emsp;<span style="color: white;font-size: 120%">|</span>&emsp;
        <a href="../signup_21/index.html">Đăng xuất</a>
    </nav>
	<p style="font-size:400%;color:white;background-color: #333;text-align: center;font-family:fantasy;margin: -0.5%;padding:0%">SMART FOOD COURT SYSTEM</p>
    <nav style="text-align: center; margin: -0.5%">
    	<a href="../signup_21/index.html">TRANG CHỦ </a> &emsp;&emsp;&emsp;
        <a href="../signin_21/maintain.html">CHẾ ĐỘ HỆ THỐNG</a>&emsp;&emsp;&emsp;
        <a href="">LỊCH SỬ BẢO TRÌ</a>&emsp;&emsp;&emsp;
        <a href="">THÔNG TIN</a>&emsp;&emsp;&emsp;
    </nav>
    <br>
    <img style="margin: 0.5%" width="46%" height="75%" src="../hinh/giphy.gif" align="left"> 
    <p style="font-size: 200%;padding:0%;margin-top: 1%">
    	&emsp;&emsp;&emsp;&emsp;<b>Giới thiệu</b>
    </p>
<p style="font-size: 130%; margin-right: 21.5%;margin-top: -0.5%" >
	<b>Địa chỉ: 268 Lý Thường Kiệt, phường 14, quận 10, thành phố Hồ Chí Minh
		<br> <br>
		Thời gian hoạt động:
		<br>
		- Thứ hai - thứ sáu : 7:00 - 22:00
		<br>
		- Thứ bảy, Chủ nhật : 7:00 - 23:00 
		<br> <br>
		Mô tả:Với nguồn nguyên liệu chọn lọc được lựa chọn kĩ lưỡng từ các chuyên gia thực phẩm hàng đầu thế giới. ĐĐNHT đảm bảo sẽ mang đến cho quý khách sự hài lòng về cả không gian, chất lượng thực phẩm, thái độ phục vụ, ... để quý khách có trải nghiệm tốt nhất.
	</b>
</p>
</body>
</html>