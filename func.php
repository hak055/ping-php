<?php

/**
 * 
 */
class Vladis
{
	protected $pdo;

	 public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
	//get group whith ip
	public function showAll()
	{
		
		$sql = "SELECT * FROM groupIp 
				JOIN server 
				WHERE server.group_id = groupIp.id ORDER BY server.id DESC";

		$results = $this->pdo->query($sql)->fetchAll();

		return $results;
	}

    // create new group and validate / required
	public function createGroup($title)
	{       //проверка на существование группы
			$stmt = $this->pdo->prepare("SELECT COUNT(*) FROM groupip WHERE title=?");
			$stmt->bindValue(1, $title, PDO::PARAM_STR);

			$stmt->execute();

			if($stmt->fetchColumn() > 0){
				echo '<div class="btn btn-warning">'.'Такая группа уже существует'.'</div>';
			}else{
			            $group = $this->pdo->prepare("INSERT INTO groupip (title) VALUES (:title)");
						$group->bindParam(':title', $title);
						$group->execute();
			     }
			
	}
    //проверка истености IP
	public function validateIp($ip, $group_id)
	{
			if (filter_var($ip, FILTER_VALIDATE_IP)) 
				{
					//проверка на существование ip
					$stmt = $this->pdo->prepare("SELECT COUNT(*) FROM server WHERE ip=?");
					$stmt->bindValue(1, $ip, PDO::PARAM_STR);

					$stmt->execute();

					if($stmt->fetchColumn() > 0)
						{
							echo '<div class="btn btn-warning">'.'Есть такой  ip'.'</div>';
						}else{	

						//Вставка IP при удачной проверке		      
							    $sql_ip = "INSERT INTO server (group_id, ip) VALUES (:group_id, :ip)";
								$insertIP = $this->pdo->prepare($sql_ip);
								$insertIP->bindParam(':group_id', $group_id);
								$insertIP->bindParam(':ip', $ip);
								$insertIP->execute();
					        }
			    }
			    else{
			    	    echo '<div class="btn btn-warning">'.'Введите коректный ip'.'</div>';
			        }
	}

	

	
}