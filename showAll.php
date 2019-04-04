<?php

  //Создаем  экземпляр класса и вызываем метод showAll()
  $res = new Vladis($pdo);
  $results = $res->showAll();
?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</head>
<body>
    <div class="container">
	
		<div class="list-group">
			<a class="btn btn-primary" href="/">Обновить</a>
			<a class="btn btn-primary" href="/createGroup.php">Добавить Группу</a>
			<a class="btn btn-success" href="/createIp.php">Добавить Ip</a>
		</div>
		
		        <table class="table">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Группа</th>
				      <th scope="col">Ip</th>
				      <th scope="col">ping</th>
				      <th scope="col">История пингов</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
					<?php foreach($results as $result) {?>
				      <th><?=++$i?></th>
				      <td><?=$result['title'];?></td>
				      <td><?=$result['ip'];?></td>
				      <!-- Для каждой стоки создаем ссылку с id и ip, для далнейшего использования  -->
				      <td><a href="pingPage.php?ping=<?=$result['id'];?>&ip=<?=$result['ip'];?>">пинговать</a></td>
				      <td><a href="historyPage.php?id=<?=$result['id'];?>">history</a></td>
				    </tr>
				    <?php }?>
				  </tbody>
                </table>
    </div>
</body>
</html>