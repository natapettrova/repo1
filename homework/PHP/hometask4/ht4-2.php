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
$get = $_GET;
$id = $get['id'];
$username = $get['log'];

function get_data_by_id($data,$id){
	
	if(empty($id)){
		return false;
	};
	
	foreach($data as $val){
		
		if ($id == $val['id']){
			return $val;
		};
	};
	
};
$res = get_data_by_id($data,$id);
?>

<html>
<head></head>
<body>
	<h2>Товар</h2>
		<?php if (!empty($username)):?>
		<p>Для  <?php echo $username?> специальное предложение! </p>
		<?php else:?>
			
		<?php endif;?>	
	
		<h3><?php  echo $res['title'] ?></h3>
		<img src="<?php  echo $res['image'] ?>" alt="<?php  echo $res['image'] ?>" width="100px" height="100px">
		<p>Характеристики: </p>
		<ul>
			<li><?php  echo $res['disc'][0] ?></li>
			<li><?php  echo $res['disc'][1] ?></li>
		</ul>
		
	</div>
	
</body>
<footer></footer>
</html>