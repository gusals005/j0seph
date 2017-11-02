<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>signup page</title>
</head>
<body>
<form name="join" method="post" action="memberSave.php">
 <h1>입력하세요.</h1>
 <table border="1">
  <tr>
   <td>ID</td>
   <td><input type="text" size="30" name="id"></td>
  </tr>
  <tr>
   <td>Password</td>
   <td><input type="password" size="30" name="pwd"></td>
  </tr>
  <tr>
   <td>이름</td>
   <td><input type="text" size="12" maxlength="10" name="name"></td>
  </tr>
  <tr>
   <td>이메일</td>
   <td><input type="text" size="30" name="email"></td>
  </tr>
 </table>
 <input type=submit value="가입">
 <input type="button" value="뒤로가기"onclick="javascripｔ:history.go(-1)">
</form>
</body>
</html>
