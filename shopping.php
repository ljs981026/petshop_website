<!DOCTYPE html>
<meta charset="utf-8">
<html>
<title>해씨별</title>
<link rel="stylesheet" type="text/css" href="./css/style1.css">
<link rel="stylesheet" type="text/css" href="./css/shopping.css">
    <head>
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
                    alert('주문목록은 로그인 후 이용해 주세요!');
                    history.go(-1)
                    </script>
        ");
                exit;
    }
    ?>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>해씨별</title>
    </head>
    <body>
        <header>
            <?php include "header.php";?>
        </header>
        <section>
            <div id="board_box">
            <h3 class="title">
                구매내역
            </h3>
            <ul id="board_list">
				<li>
                    <span class="col1">번호</span>
					<span class="col2">옵션</span>
                    <span class="col3">구매번호</span>
					<span class="col4">수량</span>
					<span class="col5">구매일</span>
				</li>
                <?php
                
                    $con = mysqli_connect("localhost", "root", "", "hamster");
                    $sql = "select * from shopping order by num desc";
                    $result = mysqli_query($con, $sql);
                    $total_record = mysqli_num_rows($result);
                    $scale=20;
                    
                    for ($i=0; $i <$total_record; $i++)
                    {
                       mysqli_data_seek($result, $i);
                       // 가져올 레코드로 위치(포인터) 이동
                       $row = mysqli_fetch_array($result);
                        $num  = $row["num"];
                        $id  = $row["id"];
                        $title  = $row["title"];
                        $counter=$row["counter"];
                        $option=$row["option"];
                        $regist_day  = $row["regist_day"];
                        
            
                    ?>
                        <li>
                            <span class="col1"><?=$num?></span>
                            <span class="col2"><?=$option?></span>
                            <span class="col4"><?=$title?></span>
                            <span class="col4"><?=$counter?></span>
                            <span class="col5"><?=$regist_day?></span>
                        </li>
                <?php
                }
   mysqli_close($con);

?>
                </ul>
            </div>
            
        </section>
        <footer>
            <?php include "in.php"?>
        </footer>
    </body>
</html>