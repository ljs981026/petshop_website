<?php
    //구매기록 들어갈때 세션 스타트 에러 무시
    error_reporting(E_ALL);
    ini_set("display_errors", 0);


    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";
?>


<div class="content">
    <div class="inner">
        <div class="header">
            <div class="topbox">
                <?php
                    if(!$userid) {
                ?>
                <div class="top_menu">
                &nbsp;<a href="login_form.php">LOGIN</a>
                &nbsp;<a href="member_form.php">JOIN</a> &nbsp; 
                &nbsp;<a href="notice_list.php">NOTICE</a> &nbsp; 
                &nbsp;<a href="qna_list.php">Q&A</a> &nbsp;
                &nbsp;<a href="review_list.php">REVIEW</a> &nbsp;
                <?php
                } else {
                    $logged = $username."(".$userid.")님";
                ?>
                <div class="top_menu">
                &nbsp;<?=$logged?> &nbsp;
                &nbsp;<a href="logout.php">LOGOUT</a> &nbsp;
                &nbsp;<a href="member_modify_form.php">MYPAGE</a> &nbsp;
                &nbsp;<a href="shopping.php">ORDER</a> &nbsp;
                &nbsp;<a href="notice_list.php">NOTICE</a> &nbsp; 
                &nbsp;<a href="qna_list.php">Q&A</a> &nbsp;
                &nbsp;<a href="review_list.php">REVIEW</a> &nbsp;            
                <?php
                    }
                ?>
                </div>        
            </div>
        </div>
        <div class="nav">
            <div class="middle_box">
                <div class="logo">
                    <a href="main.php">
                    <img src="./img/hamster.png" />
                    <h1 class="font-align">해씨별</h1>
                    </a>
                </div>
                <img src="./img/nature.PNG" class="nat">
            </div>
        </div>
        <div class="menu">
            <ul class="menustyle">
                <li class="category"><a href="category5.php">베딩/모래</a></li>
                <li class="category"><a href="category4.php">은신처/화장실</a></li>
                <li class="category"><a href="category3.php">급수/급식기</a></li>
                <li class="category"><a href="category2.php">쳇바퀴/장난감</a></li>
                <li class="category"><a href="category1.php">하우스/이동장</a></li>
            </ul>
        </div>
    </div>
</div>
