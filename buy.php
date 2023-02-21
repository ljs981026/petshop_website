<meta charset="utf-8">
<?php
session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
        else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
        else $username = "";

if ( !$userid )
    {
        echo("
                    <script>
                    alert('로그인 후 구매 해 주세요!');
                    history.go(-1)
                    </script>
        ");
                exit;
    }

    $counter = $_POST["counter"];
    $option = $_POST["option"];



    $title = date("Ymd") ."_". substr(md5(microtime().mt_rand(1000,2000)),0,6); // 날짜_랜덤 숫자, 알파벳 랜덤 생성
    $regist_day = date("Y-m-d (H:i)");
    
    $con = mysqli_connect("localhost", "root", "", "hamster");

    $sql = "insert into shopping (id, title, counter, option, regist_day) ";
    $sql .= "values('$userid', '$title', '$counter', '$option', '$regist_day')";
    mysqli_query($con, $sql);

    mysqli_close($con);

echo "
	   <script>
            location.href = 'shopping.php';
	   </script>
	";
?>