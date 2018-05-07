<?php
$data = [
	['id' =>1,
	'title'=> 'Шерсть',
	'image' => '1.jpg',
	'disc' => ['100 г','300 м']
	],
	['id' =>2,
	'title'=> 'Трикотаж',
	'image' => '3.jpg',
	'disc' => ['400 г','100 м']
	],
	['id' =>3,
	'title'=> 'Полушерсть',
	'image' => '2.jpg',
	'disc' => ['100 г','150 м']
	]
];

$post = $_POST;

?>

<html>
<head></head>
<script src="form.js"></script>
<body>
	<form id="form" action="" method="post">
            <div>
                <label id="lab" for="f1">ФИО:</label>
                <input type="text" 
                name="username" 
                id="f1" 
                placeholder="Введите ФИО" 
                required> 
           </div>
		   
	</form>	
	
	<h2>Товары</h2>
	<?php foreach($data as $item): ?>
	<div>
		<h3><?php  echo $item["title"] ?></h3>
		<img src="<?php echo $item['image'] ?>" alt="<?php echo $item['image'] ?>" width="100px" height="100px">
		<a id="ref" href="ht4-2.php?id=<?php  echo $item['id'] ?><?php if (isset($post['username'])):?>&log=<?php  echo $post['username'] ?><?php endif;?>	" >Подробнее</a>
	</div>
	<?php endforeach; ?>
	
	
</body>
<footer></footer>
</html>