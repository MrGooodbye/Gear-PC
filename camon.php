<?php include 'inc/header.php'; ?>
<?php 
    if(!isset($_SESSION['code_cart'])) 
    {
        echo '<script>window.location = "404.php"</script>';
        // echo $_SESSION['code_cart'];
    }
    else
    {
        $customer_id = Session::get('customer_id');
        // echo $customer_id;
    }
?>

<?php 
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit']))
    {
        if(isset($_POST['codecart']))
        {
            $hoten = $_POST['hoten'];
            $sdt = $_POST['sdt'];
            $diachi = $_POST['diachi'];

            $amount = $_POST['amount']; 
            $bankcode = $_POST['bankcode']; 
            $banktranno = $_POST['banktranno']; 
            $cardtype = $_POST['cardtype']; 
            $orderinfo = $_POST['orderinfo']; 
            $paydate = $_POST['paydate']; 
            //thiếu responecode 
            $tmncode = $_POST['tmncode']; 
            $transacno = $_POST['transacno']; 
            $transactionstatus = $_POST['transactionstatus']; 
            $txnref = $_POST['codecart']; 

            $insert_cart_online = $ctonline -> insert_cart_online_details($hoten, $sdt, $diachi, $customer_id);
        }
    }
?>

<body>
<?php 
    if(isset($_GET['vnp_BankTranNo']))
    {
        $amount = $_GET['vnp_Amount']; 
        $bankcode = $_GET['vnp_BankCode']; 
        $banktranno = $_GET['vnp_BankTranNo']; 
        $cardtype = $_GET['vnp_CardType']; 
        $orderinfo = $_GET['vnp_OrderInfo']; 
        $paydate = $_GET['vnp_PayDate']; 
        //thiếu responecode 
        $tmncode = $_GET['vnp_TmnCode']; 
        $transacno = $_GET['vnp_TransactionNo']; 
        $transactionstatus = $_GET['vnp_TransactionStatus']; 
        $txnref = $_GET['vnp_TxnRef']; 

        if($banktranno != 0)
        {
?>
            <br>
            <center><h2>Thanh Toán Thành Công! Vui lòng để lại thông tin liên hệ</h2></center>
            <hr>
            <div class="small-container">
            <form action="" method="post">
                <label>Họ và Tên</label>
                <input type="text" name="hoten" autofocus></input>
                <label>Số Điện Thoại</label>
                <input type="text" name="sdt"></input>
                <label>Địa Chỉ Giao</label>
                <input type="text" name="diachi"></input>

                <input type="hidden" name="amount" value="<?php echo $amount?>"></input> 
                <input type="hidden" name="bankcode" value="<?php echo $bankcode?>"></input> 
                <input type="hidden" name="banktranno" value="<?php echo $banktranno?>"></input> 
                <input type="hidden" name="cardtype" value="<?php echo $cardtype?>"></input> 
                <input type="hidden" name="orderinfo" value="<?php echo $orderinfo?>"></input> 
                <input type="hidden" name="paydate" value="<?php echo $paydate?>"></input> 
                <input type="hidden" name="tmncode" value="<?php echo $tmncode?>"></input> 
                <input type="hidden" name="transacno" value="<?php echo $transacno?>"></input> 
                <input type="hidden" name="transactionstatus" value="<?php echo $transactionstatus?>"></input> 
                <input type="hidden" name="codecart" value="<?php echo $txnref?>"></input> 
        

                <input type="submit" name="submit" class="btn" value="Đặt Hàng"></input>
            </form>
            <br>
            </div>
<?php   
        }
        elseif($banktranno == 0)
        {
            echo '1';
        }

    }
    else
    {
        $del_all_data_cart = $ct->del_all_data_cart();
?>
        <div class="small-container" >
        <br>
        <center><h2>Bạn đã huỷ thanh toán</h2></center>
        <br>
        </div>
<?php 
    }
?>

</body>
    
<?php include 'inc/footer.php'; ?>

<style>
    body{
        width: 100%;
    }

    .small-container{
        /*căn giữa*/
        width: 430px;
    }

    .small-container form{
        /* flex-wrap: wrap; */
        /* justify-self: center; */
    }


    .small-container label{
        padding-right: 7px;
    }

    .small-container input[type=text]{
        width: 240px;
        margin-bottom: 15px;
        border: 2px;
        border-radius: 5px;
        background: bisque;
        padding: 5px;
    }

    .small-container input[type=submit]{
        border: 3px;
        border-radius: 15px;
        padding: 5px;
        background-color: #f44336;
        margin-left: 115px;
    }

    .btn:hover {  
    opacity: 0.8;  
  }  

</style>