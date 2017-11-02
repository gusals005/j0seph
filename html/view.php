<?php
$bNo = $_GET['bno'];

$host = 'localhost';
$user = 'root';
$dbname = 'boarddb';
$db = new mysqli($host,$user,$pw,$dbname);
$sql = 'select b_title, b_content, b_date, b_hit, b_id from board_table where b_no = ' . $bNo;
$result = $db->query($sql);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
 <head>
	<meta charset="utf-8" />
	<title>자유게시판</title>
 	<style>
     a:link {
     color: black;
     background-color: transparent;
     text-decoration: none;
     }
     a:visited {
     color: gray;
     background-color: transparent;
     text-decoration: none;
     }
     a:hover {
     color: gray;
     background-color: transparent;
     text-decoration: underline;
     }
     a:active {
     color: black;
     background-color: transparent;
     text-decoration: underline;
     }
      #jb-container {
        width: 940px;
        height: 450px;
        margin: 0px ;
        padding: 20px;
        border: 1px solid #bcbcbc;
      }
      #jb-header {
        padding: 20px;
        margin-bottom: 20px;
        border: 1px solid #bcbcbc;
      }
      #jb-sidebar-left {
        width: 650px;
        height: 170px;
        padding: 20px;
        margin-right: 20px;
        margin-bottom: 20px;
        float: left;
        border: 1px solid #bcbcbc;
      }
      #jb-content {
        width: 450px;
        padding: 20px;
        margin-bottom: 20px;
        float: left;
        border: 1px solid #bcbcbc;
      }
      #jb-sidebar-right {
        width: 160px;
        padding: 20px;
        margin-bottom: 20px;
        float: right;
        border: 1px solid #bcbcbc;
      }
      #jb-footer {
        clear: both;
        padding: 20px;
        border: 1px solid #bcbcbc;
      }
    </style>
 </head>

 <body>
	<div id="jb-container">
	<h3>자유게시판 글쓰기</h3>
		<h3 id="boardTitle">제목: <?php echo $row['b_title']?></h3>
			<span id="boardID">작성자: <?php echo $row['b_id']?></span>
			<span id="boardDate">작성일: <?php echo $row['b_date']?></span>
			<span id="boardHit">조회: <?php echo $row['b_hit']?></span><br/>
			<span id="boardContent">내용: <?php echo $row['b_content']?></span></br>
			<a href="/board.php">목록</a>
			<a href="/boardwrite.php?bno=<?php echo $bno?>">수정</a>
			<a href="/delete.php">삭제</a>
	</div>
 </body>
</html>
