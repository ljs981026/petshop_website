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
        <div id="center">
   <div class="product_view">
        <h2>[마루칸] 도자기 급식기
        </h2>
        <table>
            <colgroup>
            <col style="width:250px;">
            <col>
            </colgroup>
            <tbody>
            <tr>
                <th>판매가</th>
                <td class="price">      6,900원</td>
            </tr>
            <tr>
                <th>원산지 </th>
                <td>                일본</td>
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
                <td class="total"><b>   6,900</b>원</td>
            </tr>
            </tbody>
        </table>
        <div class="img">
            <img src="https://hamtopia.com/web/product/big/201711/513_shop1_887541.jpg" alt="">
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