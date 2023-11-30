<?php
require_once(__ROOT__ . "model/Model.php");
require_once(__ROOT__ . "model/User.php");
require_once(__ROOT__ ."db/config.php");
require_once(__ROOT__ ."db/Dbh.php");

class Users extends Model {
	private $users;
	function __construct() {
		$this->fillArray();
	}

	function fillArray() {
		$this->users = array();
		$this->db = $this->connect();
		$result = $this->readUsers();
		while ($row = $result->fetch_assoc()) {
			array_push($this->users, new User($row["id"],$row["name"],$row["email"],$row["phone"],$row["password"],$row["birth"],$row["gender"]));
		}
	}

	function getUsers() {
		return $this->users;
	}

	function readUsers(){
		$sql = "SELECT * FROM reg";

		$result = $this->db->query($sql);
		if ($result->num_rows > 0){
			return $result;
		}
		else {
			return false;
		}
	}

    function insertUser($name, $email, $phone, $password, $birth, $gender) {
        $stmt = $this->db->prepare("INSERT INTO reg (name, email, phone, password, birth, gender) VALUES (?, ?, ?, ?, ?, ?)");
    
        $stmt->bind_param("ssssss", $name, $email, $phone, $password, $birth, $gender);
    
        if ($stmt->execute() === true) {
            echo "Records inserted successfully.";
            $this->fillArray();
        } else {
            echo "ERROR: Could not able to execute $stmt->error";
        }
    
        $stmt->close();
    }
    

    
}