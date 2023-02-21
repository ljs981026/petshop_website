<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>해씨별</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">  
</head>
<body>
        <header>
            <?php include "header.php"?>
        </header>
        <form name="category2-2" method="post" action="buy.php" enctype="multipart/form-data">
       <div id="center">
   <div class="product_view">
        <h2>[나이트엔젤] 앞문 열림 케이지 </h2>
        <table>
            <colgroup>
            <col style="width:250px;">
            <col>
            </colgroup>
            <tbody>
            <tr>
                <th>판매가</th>
                <td class="price">  133,000원</td>
            </tr>
            <tr>
                <th>원산지 </th>
                <td>    중국</td>
            </tr>
            <tr>
                <th>구매수량</th>
                <td>
                    <div class="length">
                    <input name="counter" type="number" min="1" value="1">
                        <a href="#a">증가</a>
                        <a href="#a">감소</a>
                    </div>
                </td>
            </tr>
            <tr>
                <th>사이즈</th>
                <td>
                    <select name="option">
                    <option value="" selected>[필수]옵션선택</option>
                    <option value="S" >S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    </select>
                </td>
            </tr>
            
            <tr>
                <th>배송비</th>
                <td>무료배송</td>
            </tr>
            <tr>
                <th>결제금액</th>
                <td class="total"><b>   133,000</b>원</td>
            </tr>
            </tbody>
        </table>
        <div class="img">
            <img src="https://hamtopia.com/web/product/big/202105/6087b9e3d1962782e713af53dcdb71d9.jpg" alt="">
        </div>
        <div class="btns">
        <input type="submit" class="btn2" value="구매하기">
        </div>
    </div>
</div>
    </form>
<footer>
    <?php include "in.php"?>
        </footer>
</body>
</html>