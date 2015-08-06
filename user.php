<?php 
require_once 'Model_class_base.php';

class User extends Model
{
	protected static $table = 'users';

	public function save ()
	{
		if(isset($this->attributes)){
			if(isset($this->attributes['id'])) {
				$this->update();
			} else {
			$this->insert();
			}
		}
	}

	public function update ()
	{
		self::dbConnect();
		$query = 'UPDATE users 
					SET first_name = :first_name, 
					last_name = :last_name
					WHERE id = :id';
		$stmt = self::$dbc->prepare($query);
		$stmt->bindValue(':first_name', $this->attributes['first_name'], PDO::PARAM_STR);
		$stmt->bindValue(':last_name', $this->attributes['last_name'], PDO::PARAM_STR);
		$stmt->bindValue(':id', $this->attributes['id'], PDO::PARAM_INT);
		$stmt->execute();

	}

	public function insert ()
	{
		self::dbConnect();
		$query = 'INSERT INTO users (first_name, last_name) VALUES (:first_name, :last_name)';
		$stmt = self::$dbc->prepare($query);
		$stmt->bindValue(':first_name', $this->attributes['first_name'], PDO::PARAM_STR);
		$stmt->bindValue(':last_name', $this->attributes['last_name'], PDO::PARAM_STR);
		$stmt->execute();
	}

	public function delete ()
	{
		self::dbConnect();
		$query = 'DELETE * FROM users WHERE id = :id';
		$stmt = self::$dbc->prepare($query);
		$stmt->bindValue(':id', $id, PDO::PARAM_INT);
		$stmt->execute();
	}

	public static function find ($id)
	{
		self::dbConnect();
		$query = 'SELECT * FROM users WHERE id = :id';
		$stmt = self::$dbc->prepare($query);
		$stmt->bindValue(':id', $id, PDO::PARAM_INT);
		$stmt->execute();

		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $instance = null;
        if ($result) {
            $instance = new static;
            $instance->attributes = $result;
        }
        return $instance;
	}

	public static function all ()
	{
		// Start by connecting to the DB
		self::dbConnect();

		// Get all rows
		$stmt = self::$dbc->query('SELECT * FROM users');
		
		// Assign all results to a variable
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		$instance = null;
        if ($result) {
            $instance = new static;
            $instance->attributes = $result;
        }
        return $instance;
	}

}


 ?>