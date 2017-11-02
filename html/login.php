<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Loginpage</title>
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
		height: 200px;
        padding: 20px;
        margin-bottom: 20px;
        border: 1px solid #bcbcbc;
      }
      #jb-sidebar-left {
        width: 650px;
        height: 150px;
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
		height: 150px;
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
 <h1>login page</h1>
    <div id="jb-container">
      <div id="jb-header">
		 <form  method="post" action="memberinformation.php">
              ID : <input type="text" name="id"/><br/>
              PASSWORD : <input type="password" name="password"/><br/>
              <input type="submit" value="login"/>
              <input type="button" name ="버튼" value="회원가입" onclick="location.href='/signup.php'">
			  <input type="button" value="뒤로가기" onclick ="location.href='/begin.php'";>
         </form>
      </div>
      <div id="jb-sidebar-left">
        <ul>
            login please...
        </ul>
      </div>


      <div id="jb-sidebar-right">
      </div>
    </div>
  </body>
</html>
