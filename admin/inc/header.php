<?php
    include "../helper/format.php";
    include '../lib/session.php';
    Session::checkSession();
?>

<?php
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache"); 
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
  header("Cache-Control: max-age=2592000");
  $fm = new Format();
?>


<style>
    .text-white B{
        color: red;
    }

    .text-blue{
        color: white;
    }

    .text-blue B{
        color: deeppink;
    }
</style>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
    <!-- Css -->
    <link rel="stylesheet" href="../dist/styles.css">
    <link rel="stylesheet" href="../dist/all.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d5e3c07cf1.js" crossorigin="anonymous"></script>
	<title>Trang Chủ Admim</title>
	
</head>

<body>
<!--Container -->
<?php               
                    if(Session::get('adminLevel') == 1)
                    {

?>                      
<div class="mx-auto bg-grey-400">
    <!--Screen-->
    <div class="min-h-screen flex flex-col">
        <!--Header Section Starts Here-->
        <header class="bg-nav">
            <div class="flex justify-between">
                <div class="p-1 mx-3 inline-flex items-center">
                    <i class="fas fa-bars pr-2 text-white" onclick="sidebarToggle()"></i>
                    <a href="index.php"><h1 class="text-white p-2">Logo</h1></a>
                </div>
                <div class="p-1 flex flex-row items-center">  
                        <a href="#" class="text-blue p-2 mr-2 no-underline hidden md:block lg:block">Xin Chào<B> Thủ Kho <?php echo Session::get('adminName') ?></B> </a>
                        <img onclick="profileToggle()" class="inline-block h-8 w-8 rounded-full" src="../images/329888823_742872533876703_5136813956517482901_n.jpg" alt="">
                        <a href="?action=dangxuat" class="text-white p-2 mr-2 no-underline hidden md:block lg:block">Đăng Xuất </a>
                    <a href="#" onclick="profileToggle()" class="text-white p-2 no-underline hidden md:block lg:block"></a>
                    <div id="ProfileDropDown" class="rounded hidden shadow-md bg-white absolute pin-t mt-12 mr-1 pin-r">
                        <ul class="list-reset">
                          <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">My account</a></li>
                          <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Notifications</a></li>
                          <li><hr class="border-t mx-2 border-grey-ligght"></li>
                           <?php

							if(isset($_GET['action']) && $_GET['action']=='dangxuat')
							{
								Session::unset();
							}

							?>
                          <li><a href="?action=dangxuat" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Logout</a></li>
                         
                        </ul>
                    </div>
                </div>
            </div>
        </header>
                        <div class="flex flex-1">
                        <!--Sidebar-->
                        <aside id="sidebar" class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">
                            <ul class="list-reset flex flex-col">
                                
                                <li class="w-full h-full py-3 px-2">
                                    <a href="index.php"
                                    class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                        <i class="far fa-file float-left mx-2"></i>
                                        Quản Lý
                                        <span><i class="fa fa-angle-down float-right"></i></span>
                                    </a>
                                    <ul class="list-reset -mx-2 bg-white-medium-dark">
                                        <li class="border-t mt-2 border-light-border w-full h-full px-2 py-3">
                                            <a href="addsp.php" class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                                Thêm Loại Sản Phẩm      
                                            <span><i class="fa fa-angle-right float-right"></i></span>
                                            </a>
                                        </li>
                                        <li class="border-t mt-2 border-light-border w-full h-full px-2 py-3">
                                            <a href="storage.php" class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline" name = "themsp">
                                                Nhập Sản Phẩm Vào Kho      
                                            <span><i class="fa fa-angle-right float-right"></i></span>
                                            </a>
                                        </li>
                                        <li class="border-t border-light-border w-full h-full px-2 py-3">
                                            <a href="productstoragelist.php" class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                                Danh Sách Sản Phẩm Trong Kho
                                            <span><i class="fa fa-angle-right float-right"></i></span>
                                            </a>
                                        </li>
                                        <li class="border-t border-light-border w-full h-full px-2 py-3">
                                            <a href="thongke.php" class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                                Thống Kê<span><i class="fa fa-angle-right float-right"></i></span></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </aside>
<?php                        
                    }
                    else
                    {
?>                   
<div class="mx-auto bg-grey-400">
    <!--Screen-->
    <div class="min-h-screen flex flex-col">
        <!--Header Section Starts Here-->
        <header class="bg-nav">
            <div class="flex justify-between">
                <div class="p-1 mx-3 inline-flex items-center">
                    <i class="fas fa-bars pr-2 text-white" onclick="sidebarToggle()"></i>
                    <a href="index.php"><h1 class="text-white p-2">Logo</h1></a>
                </div>
                <div class="p-1 flex flex-row items-center">       
                    <a href="#" class="text-white p-2 mr-2 no-underline hidden md:block lg:block">Xin Chào<B> Admin <?php echo Session::get('adminName') ?></B> </a>
                    <img onclick="profileToggle()" class="inline-block h-8 w-8 rounded-full" src="https://avatars0.githubusercontent.com/u/4323180?s=460&v=4" alt="">
                    
                    <a href="?action=dangxuat" class="text-white p-2 mr-2 no-underline hidden md:block lg:block">Đăng Xuất </a>
                    <a href="#" onclick="profileToggle()" class="text-white p-2 no-underline hidden md:block lg:block"></a>
                    <div id="ProfileDropDown" class="rounded hidden shadow-md bg-white absolute pin-t mt-12 mr-1 pin-r">
                        <ul class="list-reset">
                          <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">My account</a></li>
                          <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Notifications</a></li>
                          <li><hr class="border-t mx-2 border-grey-ligght"></li>
                           <?php

							if(isset($_GET['action']) && $_GET['action']=='dangxuat')
							{
								Session::unset();
							}

							?>
                          <li><a href="?action=dangxuat" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!--/Header-->

        <div class="flex flex-1">
            <!--Sidebar-->
            <aside id="sidebar" class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">

                <ul class="list-reset flex flex-col">
                    
                    <li class="w-full h-full py-3 px-2">
                        <a href="index.php"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="far fa-file float-left mx-2"></i>
                            Quản Lý
                            <span><i class="fa fa-angle-down float-right"></i></span>
                        </a>
                        
                        <ul class="list-reset -mx-2 bg-white-medium-dark">
                            <li class="border-t mt-2 border-light-border w-full h-full px-2 py-3">
                                <a href="addsp.php"
                                   class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                    Thêm Loại Sản Phẩm      
                                    <span><i class="fa fa-angle-right float-right"></i></span>
                                </a>
                            </li>
                            <li class="border-t mt-2 border-light-border w-full h-full px-2 py-3">
                                <a href="storage.php" class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline" name = "themsp">
                                    Nhập Sản Phẩm Vào Kho      
                                    <span><i class="fa fa-angle-right float-right"></i></span>
                                </a>
                            </li>
                            <li class="border-t border-light-border w-full h-full px-2 py-3">
                                <a href="listloaisp.php"
                                   class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                    Danh Sách Loại Sản Phẩm
                                    <span><i class="fa fa-angle-right float-right"></i></span>
                                </a>
                            </li>
                            <li class="border-t border-light-border w-full h-full px-2 py-3">
                                <a href="produclist.php"
                                   class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                    Danh Sách Sản Phẩm Đang Bán
                                    <span><i class="fa fa-angle-right float-right"></i></span>
                                </a>
                            </li>
                            <li class="border-t border-light-border w-full h-full px-2 py-3">
                                <a href="productstoragelist.php"
                                   class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                    Danh Sách Sản Phẩm Trong Kho
                                    <span><i class="fa fa-angle-right float-right"></i></span>
                                </a>
                            </li>
                            <li class="border-t border-light-border w-full h-full px-2 py-3">
                                <a href="dathang.php"
                                   class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                    Danh Sách Đặt Hàng
                                    <span><i class="fa fa-angle-right float-right"></i></span>
                                </a>
                            </li>
                            <li class="border-t border-light-border w-full h-full px-2 py-3">
                                <a href="dathangonline.php"
                                   class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                    Danh Sách Đặt Hàng Online
                                    <span><i class="fa fa-angle-right float-right"></i></span>
                                </a>
                            </li><li class="border-t border-light-border w-full h-full px-2 py-3">
                                <a href="danggiao.php"
                                   class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                    Danh Sách Đơn Đang Giao
                                    <span><i class="fa fa-angle-right float-right"></i></span>
                                </a>
                            </li>
                            </li><li class="border-t border-light-border w-full h-full px-2 py-3">
                                <a href="userlist.php"
                                   class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                    Danh Sách Người Dùng
                                    <span><i class="fa fa-angle-right float-right"></i></span>
                                </a>
                            </li>
                            </li><li class="border-t border-light-border w-full h-full px-2 py-3">
                                <div class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline" id="sub_menu">
                                    Thống Kê
                                    <span><i class="fa fa-angle-right float-right"></i></span></div>
                                    <ul style="position:relative;right:-85px;top:10px;font-weight:100;font-size:14px;display:none;" id="sub">
                                        <li style="margin-bottom:10px"><a href="thongke_doanhthu.php" title="Arts">Doanh Thu</a></li>
                                        <li><a href="thongke_sanpham.php" title="Arts">Sản Phẩm</a></li>
                                    </ul>
                            </li>
                        </ul>
                    </li>
                </ul>

            </aside>
            <!--/Sidebar-->

<?php                         
                    }
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<script>
    setInterval(autoDelete, 25000);

    function autoDelete()
    {
        $.ajax({
            url: '../classes/action.php',
            type: 'POST',
            data: { auto_delete: "" },
            success: function(data)
            {
                // //console.log(data);
                if(data >= 1)
                {
                    // location.href = "http://localhost/gearmaytinh/admin/produclist.php";
                    //$("#example").load("http://localhost/gearmaytinh/admin/produclist.php" + " #example");
                    //console.log("đã có cái để xóa");
                    // var a = document.getElementById("test").innerText;
                }
                else
                {
                    // alert("không có gì để xóa");
                    //console.log("khong co gi để xóa");
                }
            },
            error: function(xhr, statusText, error)
            {
                alert(xhr.status);
            }
        });
    }

    $("#sub_menu").on('click', function(e){
        //console.log('a');
        document.getElementById("sub").style.display = "block";
    })
</script>
</body>

</html>

