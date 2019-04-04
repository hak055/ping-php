<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
	<style type="text/css">
		form {
			padding: 50px;

		}
	</style>
</head>
<body>
           <!-- Добавление IP адреса и выбор группы -->
	<form method="get" action="index.php" class="form-horizontal col-md-6 col-md-offset-3">
			<h2>Добавление IP адреса</h2>
			<div class="form-group">
			    <label class="col-sm-2 control-label">IP</label>
			    <div class="col-sm-10">
			      <input type="text" name="ip" required class="form-control" placeholder="<?= $value ? : 'пример 117.52.9.44';?>" />
			    </div>
			</div>

			<div class="form-group">
			<label class="col-sm-2 control-label">Групы</label>
			<div class="col-sm-10">
				<?php 
				include 'connect.php';
				$sql = 'SELECT * FROM groupIp';

                $data = $pdo->query($sql)->fetchAll();
                      
                ?>
				<select required name="group_id" class="form-control">
					<option>выберите группу</option>
					<?php foreach($data as $group) {?>
						<?='<option value="'.$group['id'].'">'.$group['title'].'</option>';?>
					<?php }?>					
				</select>			
			</div>
			</div>
			<input type="submit" name="submitIp" class="btn btn-primary col-md-2 col-md-offset-10" value="добавить" />
		</form>

</body>
</html>