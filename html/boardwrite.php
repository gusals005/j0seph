<?
	$host = 'localhost';
	$user = 'root';
	$dbname = 'boarddb';
	db = mysqli($host, $user , $pw , $dbname);
//$_GET['bno']이 있을 때만 $bno 선언
	if(isset($_GET['bno'])) {
		$bNo = $_GET['bno'];
	}
		 
	if(isset($bNo)) {
		$sql = 'select b_title, b_content, b_id from board_table where b_no = ' . $bNo;
		$result = $db->query($sql);
		$row = $result->fetch_assoc();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>글쓰기</title>
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
	<h3>자유게시판 글쓰기</h3>
		<div id="jb-container">
			<form action="./write_update.php" method="post">
				<?php
					if(isset($bNo)) {
						echo '<input type="hidden" name="bno" value="' . $bNo . '">';
					}
				?>
			
				<table width="100%" border="1">
					<thead>
						<th>입력하기</th>
					</thead>
					<tbody>
						<tr>
							<th scope="row"><label for="bID">아이디</label></th>
							<td class="id">
							<?php
								if(isset($bNo)) {
									echo $row['b_id'];
								} else { 
							?>
							<input type="text" name="bID" id="bID">
							<?php } ?>
							</td>
							
						</tr>
						<tr>
							<th scope="row"><label for="bPassword">비밀번호</label></th>
							<td class="password"><input type="text" name="bPassword" id="bPassword"></td>
						</tr>
						<tr>
							<th scope="row"><label for="bTitle">제목</label></th>
							<td class="title"><input type="text" name="bTitle" id="bTitle" value="<?php echo isset($row['b_title'])?$row['b_title']:null?>"></td>
						</tr>
						<tr>
							<th scope="row"><label for="bContent">내용</label></th>
							<td class="content"><textarea name="bContent" id="bContent"><?php echo isset($row['b_content'])?$row['b_content']:null?></textarea></td>
						</tr>
					</tbody>
				</table>
			</br><button type="submit"><?php echo isset($bNo)?'수정':'작성'?></button>
			<p><a href="./board.php">목록</a></p>
		</form>
	</div>
</body>
</html>
