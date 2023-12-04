<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <title>ČASOPIS VŠPJ</title>
  <style>
    body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            background: linear-gradient(to left, #4d4d4d 0%, #333333 35%, #333333 65%, #4d4d4d 100%);
        }
    .container {
            width: 70%;
            margin: 0 auto; 
            text-align: left; 
        }
        
        header {
            background: transparent;
            color: #fff;
            text-align: center;
            padding: 0px;
            overflow: hidden; 
        }

        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: transparent;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        button:hover{
            background-color: cyan;}
            
        .main {
            background-color: rgba(255, 255, 255, 0.1);
            text-align: center;
            margin: 0px;
            width: 100%;
        }

        .left-panel, .right-panel {
            position: fixed;
            top: 0;
            height: 100%;
            width: 15%;
        }

        .left-panel {
            left: 0;
            background: transparent;
        }

        .right-panel {
            right: 0;
            background: transparent;
        }
        
        .uvod{
            width: auto;
            height: 400px;
            background-image: url('mc.jpg');
            padding: 0px;
            margin: 0px;
            text-align: center;
            margin-top: 3px;
            }
        
        button{
            width: 200px;
            height: 55px;
            background: white;
            position: absolute;
            left: 870px;
            top: 430px;
            border-radius: 50px;
            text-align: center;
            border: 0px;
            }

        table{
            border-spacing: 0px;
        }

        td:hover{
            background-color: #ebebeb;
            color: #ffffff;
        }

        td{
            border-left: 0.5px solid rgb(224, 224, 224);
            border-right: 0.5px solid rgb(224, 224, 224);
            margin: 0 0px;
            width: 16.9%;
            background-color: #fff;
            text-align: center;
            font-family: Verdana(sans-serif);
            color: #c7c7c7;
            font-size: 18px;
        }
        .logo{
            border: 0px;
            background-image: url('bee.png');
            width: 100px;
            height: 100px;
        }

        .login{
            width: 8%;
            background-image: url('user1.png');
            background-repeat: no-repeat;
            background-position: center;
        }

        .volno:hover{
            background-color: #fff;
        }
        .content{
            background-color: white;
            width: auto;
            height: 33%;
            padding: 15px;
        }
        .dropdown-content {
  display: none;
  top: 100px;
  right: 0px;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.show {display: block;}

img
        {
            top: 20px;
            right: 20px;
            position: absolute;
            
        }
  </style>

</head>
  <body>
    <div class="container">
    <header>
        <table>
            <tr>
                <td class="logo"></td>  <td class="volno"></td>   <td>UMĚLÁ INTELIGENCE</td>   <td>HARDWARE</td>   <td>SOFTWARE</td>   <td>PERIFERIE</td>  <td class="login"></td>  
            </tr>
        </table>
    </header>
    <div class="left-panel">
        
    </div>
    <a href=""><button type="button">Zajímá mě!</button></a>
    <div class="main">[Mapa]
        <div class="uvod"><br><br><br><br><br><br><br><h1>[Žhavý Článek]</h1></div>
        
    </div>
    <div class="right-panel">
        
    </div>
    <div class="content"></div>
    <div class="content"></div>
    <div class="dropdown">
        <img src="menu.png" alt="" onclick="myFunction()" class="dropbtn">
        <div id="myDropdown" class="dropdown-content">
          <a href="login.php">Přihlášení</a>
          <a href="register.php">Registrace</a>
          <a href="profile_editor.php">Editace profilu</a>
          <a href="article_editor.php">Tvorba článků</a>
        </div>
    </div>
    <footer>
        <p>[Footer]</p>
    </footer>
    </div>
    <script>
        function myFunction() {
          document.getElementById("myDropdown").classList.toggle("show");
        }
    
        window.onclick = function(event) {
          if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
              var openDropdown = dropdowns[i];
              if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
              }
            }
          }
        }
    </script>
</body>
</html>
