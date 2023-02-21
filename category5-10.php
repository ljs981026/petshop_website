<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>해씨별</title>
     <link rel="stylesheet" type="text/css" href="./css/style1.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
    <header>
        <?php include "header.php"?>
    </header>
    <form name="category2-2" method="post" action="buy.php" enctype="multipart/form-data">
        <div id="center">
   <div class="product_view">
        <h2>햄스터 화장실 모래 1.2Kg(무향)</h2>
        <table>
            <colgroup>
            <col style="width:250px;">
            <col>
            </colgroup>
            <tbody>
            <tr>
                <th>판매가</th>
                <td class="price">          2,700원</td>
            </tr>
            <tr>
                <th>원산지 </th>
                <td>                               중국</td>
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
                <th>배송비</th>
                <td>    3,000원 (30,000원 이상 구매 시 무료)</td>
            </tr>
            <tr>
                <th>결제금액</th>
                <td class="total"><b>                       2,700</b>원</td>
            </tr>
            </tbody>
        </table>
        <div class="img">
            <img src="https://hamtopia.com/web/product/big/202101/483db29fc49cd34d10f1e6119647e722.jpg" alt="">
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
</html>