<!DOCTYPE html>
<html>
 <head>
	<meta charset="utf-8"/>
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
        height: 550px;
        margin: 0px ;
        padding: 20px;
        border: 1px solid #bcbcbc;
      }
      #jb-header {
		height: 500px;
        padding: 20px;
        margin-bottom: 20px;
        border: 1px solid #bcbcbc;
      }
      #jb-content {
        width: 450px;
        padding: 20px;
        margin-bottom: 20px;
        float: left;
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
   <div id="jb-header">
	<h3>자유게시판</h3>
	<table width="100%" border="1">
		<thead>
			<tr>
				<th class="no">-번호-</th>
				<th class="title">---제목---</th>
				<th class="author">-작성자-</th>
				<th class="date">--작성일--</th>
				<th class="hit">조회</th>
			</tr>
		</thead>
		<tbody>
				<?php
					$host = 'localhost';
					$user = 'root';
					$dbname = 'boarddb';
					$mysqli = new mysqli($host , $user, $pw, $dbname);
					$sql = 'select * from board_table order by b_no desc';
					$result = $mysqli->query($sql);
					while($row = $result->fetch_assoc())
					{
						$datetime = explode(' ', $row['b_date']);
						$date = $datetime[0];
						$time = $datetime[1];
						if($date == Date('Y-m-d'))
							$row['b_date'] = $time;
						else
							$row['b_date'] = $date;
				?>
			<tr>
				<td class="no"><?php echo $row['b_no']?></td>
				<td class="title"><?php echo $row['b_title']?></td>
				<td class="author"><?php echo $row['b_id']?></td>
				<td class="date"><?php echo $row['b_date']?></td>
				<td class="hit"><?php echo $row['b_hit']?></td>
			</tr>
				<?php
					}
				?>
		</tbody>
	</table>
	<input type="button" value="게시글 작성하기" onclick = "location.href='/boardwrite.php'">
   </div>
  </div>
 </body>
</html>
