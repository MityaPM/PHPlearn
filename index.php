<style>
    #test{
        transition: 1.5s;
    }

</style>
<ul>
    <li><a href="http://localhost/site/files.php">Файлы</a></li>
    <li><a href="http://localhost/site/footer.php">Футер</a></li>
    <li><a href="http://localhost/site/fresh.php">Работа с массивами</a></li>
    <li><a href="http://localhost/site/header.php">Хедер</a></li>
    <li><a href="http://localhost/site/new.php">Рекваер</a></li>
    <li><a href="http://localhost/site/page.php">Форма</a></li>
</ul>

<button id="button" onclick="change()">Форма и код</button>
<div id="test" style="display: none; opacity:70%;" >
<form action="action.php" method="post">
 <p>Ваше имя: <input type="text" name="name" /></p>
 <p>Ваш возраст: <input type="text" name="age" /></p>
 <p><input type="submit" /></p>
</form>

<?php
echo md5(substr(md5('OpenHub' .  date('d/m/Y')), 8, 16));
echo "<br>";
$a = 6;
$b = 6;

$sum = $a+$b;

echo $sum;

if ($a==$b){
    echo "What";
}else{echo "Get";}
echo "<br>";
$x=71;
switch ($x){
    case "Hello" : echo "First case"; break;
    case 5 : echo "First case"; break;
    case 71 : echo "seven"; break;
    case 12 : echo "First case"; break;
    default : echo "Ничему не равна";
}

for ($i=100; $i>=80; $i-=2) {
    if($i % 5 == 0) continue;
    if($i<87) break;
    echo "Цикл". $i . "<br>";
}
echo "<br><br>";


$y = 0;
while ($y<10){
    $y++;
    echo "Цикл 2 работает $y <br>";
}

function summa ($word, $x1, $y2){
    $word = math($x1, $y2);
    echo $word;
}

function math($first, $second){
    $allinone = $first + $second;
    return $allinone;
}
$q = 10;
$w = 10;

summa($sum,$q,$w);

$array = array(12, 3.25, "string", true);
$array[1] = 2.34;
echo "<br>" . $array[3] . "<br>";
$array[] = "new";
echo "<br>" . $array[4];
    
for($i = 0; $i<count($array);$i++){
    echo "Элемент массива с индесом $i =" .$array[$i] . "<br>";
}


?>
</div>
<script>

function change() {
  if(document.getElementById('test').style.display=='none') {
    document.getElementById('test').style.display = '';
  } else {
    document.getElementById('test').style.display = 'none';
  }
  return false;
}
</script>