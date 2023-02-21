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
            <form name="category2-2" method="post" action="buy.php" enctype="multipart/form-data">
    <div id="center">
   <div class="product_view">
        <h2>189L 리빙 하우스 </h2>
        <table>
            <colgroup>
            <col style="width:250px;">
            <col>
            </colgroup>
            <tbody>
            <tr>
                <th>판매가</th>
                <td class="price">  76,000원</td>
            </tr>
            <tr>
                <th>원산지 </th>
                <td>국내</td>
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
                <th>하우스 선택</th>
                <td>
                    <select name="option">
                    <option value="" selected>[필수]옵션선택</option>
                    <option value="베이직 리빙하우스">베이직 리빙하우스</option>
                    <option value="열림창 리빙하우스">열림창 리빙하우스</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>철망선택</th>
                <td>
                    <select>
                    <option>[필수]옵션선택</option>
                    <option>철(아연도금)</option>
                    <option>스텐레스</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>배송비</th>
                <td>무료배송</td>
            </tr>
            <tr>
                <th>결제금액</th>
                <td class="total"><b>76,000</b>원</td>
            </tr>
            </tbody>
        </table>
        <div class="img">
            <img src="https://hamtopia.com/web/product/big/202011/4708be487912e53100f27f351cdce279.jpg" alt="">
        </div>
        <div class="btns">
        <input type="submit" class="btn2" value="구매하기">
        </div>
    </div>
</div>
    </form>
<footer>
    <?php include "in.php"?>
</body>
</html>