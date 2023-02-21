<link rel="stylesheet" type="text/css" href="./css/style1.css">
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
    <div class="content">
        <div class="inner">
            <div class="visual">
                    <img src="./img/ham1.jpg" class="banner" />
                <div class="event">
                    <div class="box1">
                        <a href="review_list.php">
                            <img src="./img/rating.png" class="gift" >
                            <h1>구매후기</h1>
                        </a>
                    </div>
                    <div class="box2">
                        <a href="qna_list.php">
                            <img src="./img/testing.png" class="gift">
                            <h1>Q&A</h1>
                        </a>
                    </div>
                </div>
            </div>
                <div id="c">
                    <form>
                        <fieldset class="f2">
                            <legend>공지사항</legend>
                            <table class="free">
                                <ul>
                                    <?php
                                        $con = mysqli_connect("localhost", "root", "", "hamster");
                                        $sql = "select * from notice order by num desc limit 5";
                                        $result = mysqli_query($con, $sql);

                                        if (!$result)
                                            echo "게시판 DB 테이블(board)이 생성 전이거나 아직 게시글이 없습니다!";
                                        else
                                        {
                                            while( $row = mysqli_fetch_array($result) )
                                            {
                                                $regist_day = substr($row["regist_day"], 0, 10);
                                    ?>
                                    <li>
                                        &nbsp;<span><?=$row["subject"]?></span>&nbsp;
                                        &nbsp;<span><?=$regist_day?></span>&nbsp;
                                    </li>
                                    <?php
                                            }
                                        }
                                    ?>
                                </ul>
                                <a href="notice_list.php"><img src="./img/more.png" class="more"></a>
                            </table>
                        </fieldset>
                    </form>
                </div>
                <div id="d">
                    <form>
                        <fieldset class="f2">
                            <legend class="new"><h class="light">NEW </h><h class="grayc">ARRIVALS</h></legend>
                            <table class="product">
                                <div class="boxx">
                                    <a href="category1-1.php"><img src="https://hamtopia.com/web/product/big/202011/4708be487912e53100f27f351cdce279.jpg" width="200px" height="200px" >189L 리빙하우스 <br><h class="price">76,000원</h></a><input type="text" value="new" class="red">
                                </div>
                                <div class="boxx">
                                    <a href="category1-2.php"><img src="https://hamtopia.com/web/product/big/201808/7b3cb5edab855ec64576dd33e4fcf17f.jpg" width="200px" height="200px" >120L 디깅용 앞문 열림창 리빙 하우스 <br><h class="price">66,000원</h></a><input type="text" value="new" class="red">
                                </div>
                                <div class="boxx">
                                    <a href="category1-3.php"><img src="https://hamtopia.com/web/product/big/201910/a3a3db76c26db3653095bd80781607da.jpg" width="200px" height="200px" >60L 언더베드 리빙 하우스<br><h class="price">30,000원</h></a> <input type="text" value="new" class="red">
                                </div> 
                                <div class="boxx">
                                    <a href="category1-6.php"><img src="https://hamtopia.com/web/product/big/201908/9e643312bf49cf017555c85ee0a82b51.jpg" width="200px" height="200px" >코르크 튜브<h class="price"><br>6,000원</h></a><input type="text" value="new" class="red">
                                </div>
                                <div class="boxx">
                                    <a href="category1-7.php"><img src="https://hamtopia.com/web/product/big/202105/6087b9e3d1962782e713af53dcdb71d9.jpg" width="200px" height="200px" >[나이트엔젤] 앞문 열림 케이지 </h></a><input type="text" value="new" class="red">
                                </div>
                                <div class="boxx">
                                    <a href="category1-11.php"><img src="https://hamtopia.com/web/product/big/20191231/35d2a948b2793c5c78d1f9863bab9b0d.jpg" width="200px" height="200px" >[아마존] 골든용 터널 (지름 약 8cm) <h class="price"><br>1,800원</h></a><input type="text" value="new" class="red">
                                </div> 
                                <div class="boxx">
                                    <a href="category2-2.php"><img src="https://hamtopia.com/web/product/big/20191213/9d8a1932c56c28953c63d0d7373815c8.jpg" width="200px" height="200px" >[펫존] 바람개비 쳇바퀴 두가지 사이즈 22Cm/26Cm<br><h class="price">23,000원</h> </a><input type="text" value="new" class="red">
                                </div>
                                <div class="boxx">
                                    <a href="category3-4.php"><img src="https://hamtopia.com/web/product/big/202102/39ed31c8e7d26c6ff695bd4b0daee75b.jpg" width="200px" height="200px" >[미니애니맨] 컴팩트 식탁 트윈 /햄스터 급식기<br> <h class="price">6,900원</h></a><input type="text" value="new" class="red">
                                </div>
                                <div class="boxx">
                                    <a href="category3-6.php"><img src="https://hamtopia.com/web/product/big/202009/28da39fe5c4506ae666b8a53389f56fc.jpg" width="200px" height="200px" >물탱크 도자기 급수기 <h class="price"><br> 8,500원</h></a><input type="text" value="new" class="red">
                                </div> 
                                <div class="boxx">
                                    <a href="category3-7.php"><img src="https://hamtopia.com/web/product/big/202110/c441e95a6ef20d60c9ae5b9eae68f829.jpg" width="200px" height="200px" >[나이트엔젤] 후지산 물그릇 50ml <h class="price"><br>    11,500원</h> </a><input type="text" value="new" class="red">
                                </div>
                                <div class="boxx">
                                    <a href="category4-6.php"><img src="https://hamtopia.com/web/product/big/202105/4f6b96ad7ca9b4e3d017fdf28e62d14f.jpg" width="200px" height="200px" >[나이트엔젤] 아크릴 샌드 박스 <h class="price"><br>   17,900원</h> </a><input type="text" value="new" class="red">
                                </div>
                                <div class="boxx">
                                    <a href="category5-4.php"><img src="https://hamtopia.com/web/product/big/20200515/c0eb58181bd888f35b12bd9b142564d6.jpg" width="200px" height="200px" >[모모팜] 슬림 해동지<br> <h class="price">      3,000원</h></a><input type="text" value="new" class="red">
                                </div> 
                            </table>
                        </fieldset>
                    </form>
            </div>
            <div id="d">
                <form>
                    <fieldset class="f2">
                        <legend class="new"><h class="pur">BEST </h><h class="grayc">PRODUCT</h></legend>
                        <table class="product">
                            <div class="boxx">
                                <a href="category5-1.php"><img src="https://hamtopia.com/web/product/big/201703/338_shop1_841321.jpg" width="200px" height="200px" >[하겐] 사막모래/데져트 샌드 -옐로우/레드 <br><h class="price">  4,400원</h></a><input type="text" value="추천" class="pink">
                            </div>
                            <div class="boxx">
                                <a href="category5-2.php"><img src="https://hamtopia.com/web/product/big/20200403/462aafe0ca2bcc9fb6c17d2a362559e4.jpg" width="200px" height="200px" >[모모팜] 슬림와일드 아스펜 베딩 1.2Kg(중포장) <br><h class="price"> 13,000원</h></a><input type="text" value="추천" class="pink">
                            </div>
                            <div class="boxx">
                                <a href="category4-1.php"><img src="https://hamtopia.com/web/product/big/201811/3c8d011596cf50574698a90d6422bc95.jpg" width="200px" height="200px" >코코넛 야자 은신처/두가지 사이즈<br><h class="price"> 3,000원</h></a><input type="text" value="추천" class="pink">
                            </div>
                            <div class="boxx">
                                <a href="category3-1.php"><img src="https://hamtopia.com/web/product/big/201808/6256ef9adb8de79c47ae892ca5e179e4.jpg" width="200px" height="200px" >아크릴 자석 급수기 거치대(급수기 별도)<br><h class="price">7,000원</h></a><input type="text" value="추천" class="pink">   
                            </div>
                            <div class="boxx">
                                <a href="category3-2.php"><img src="https://hamtopia.com/web/product/big/201608/87_shop1_959238.jpg" width="200px" height="200px" >디럭스 급수기 <br><h class="price">2,000원</h></a><input type="text" value="추천" class="pink">
                            </div>
                            <div class="boxx">
                                <a href="category2-1.php"><img src="https://hamtopia.com/web/product/big/201808/2a3c40c87664e11ab767c1ed727a597e.jpg" width="200px" height="200px" >[윔지스] 덴탈츄 -신개념 비건 이갈이<br><h class="price">1,000원</h></a><input type="text" value="추천" class="pink">
                            </div> 
                        </table>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</body>
</html>