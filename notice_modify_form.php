<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>해씨별</title>
<link rel="stylesheet" type="text/css" href="./css/style1.css">
<link rel="stylesheet" type="text/css" href="./css/board.css">
<script>
  function check_input() {
      if (!document.notice_form.subject.value)
      {
          alert("제목을 입력하세요!");
          document.notice_form.subject.focus();
          return;
      }
      if (!document.notice_form.content.value)
      {
          alert("내용을 입력하세요!");    
          document.notice_form.content.focus();
          return;
      }
      document.notice_form.submit();
   }
</script>
</head>
<body> 
<header>
    <?php include "header.php";?>
</header>  
<section>
   	<div id="board_box">
	    <h3 id="board_title">
	    		공지사항 > 수정하기
		</h3>
<?php
	$num  = $_GET["num"];
	$page = $_GET["page"];
	
	$con = mysqli_connect("localhost", "root", "", "hamster");
	$sql = "select * from notice where num=$num";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result);
	$name       = $row["name"];
	$subject    = $row["subject"];
	$content    = $row["content"];		
	$file_name  = $row["file_name"];
?>
	    <form  name="notice_form" method="post" action="notice_modify.php?num=<?=$num?>&page=<?=$page?>" enctype="multipart/form-data">
	    	 <ul id="board_form">
				<li>
					<span class="col1">이름 : </span>
					<span class="col2"><?=$name?></span>
				</li>		
	    		<li>
	    			<span class="col1">제목 : </span>
	    			<span class="col2"><input name="subject" type="text" value="<?=$subject?>"></span>
	    		</li>	    	
	    		<li id="text_area">	
	    			<span class="col1">내용 : </span>
	    			<span class="col2">
	    				<textarea name="content"><?=$content?></textarea>
	    			</span>
	    		</li>
	    		<li>
			        <span class="col1"> 첨부 파일 : </span>
			        <span class="col2"><?=$file_name?></span>
			    </li>
	    	    </ul>
	    	<ul class="buttons">
				<li><button type="button" onclick="check_input()">수정하기</button></li>
				<li><button type="button" onclick="location.href='notice_list.php'">목록</button></li>
			</ul>
	    </form>
	</div> 
</section> 
<footer>
    <?php include "in.php";?>
</footer>
</body>
</html>
