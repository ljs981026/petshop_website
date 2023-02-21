<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>해씨별</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="./css/style1.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<body>
    <header>
        <?php include "header.php"?>
    </header>
    <form name="category2-1" method="post" action="buy.php" enctype="multipart/form-data">
    <div id="center">
    <div class="product_view">
        <h2> [윔지스] 덴탈츄 -신개념 비건 이갈이</h2>
        <table>
            <colgroup>
            <col style="width:250px;">
            <col>
            </colgroup>
            <tbody>
            <tr>
                <th>판매가</th>
                <td class="price">1,000원</td>
            </tr>
            <tr>
                <th>원산지 </th>
                <td>네덜란드</td>
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
                        <option value="xxs-3개입">XXS-3개입</option>
                        <option value="xs-2개입">XS-2개입</option>
                    </select>
                </td>
            </tr>

            
            <tr>
                <th>배송비</th>
                <td>3,000원 (30,000원 이상 구매 시 무료)</td>
            </tr>
            <tr>
                <th>결제금액</th>
                <td class="total"><b>1,000</b>원</td>
            </tr>
            </tbody>
        </table>
        <div class="img">
            <img src="https://hamtopia.com/web/product/big/201808/2a3c40c87664e11ab767c1ed727a597e.jpg" alt="">
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