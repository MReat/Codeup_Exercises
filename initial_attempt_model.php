<?php

require_once 'user_config.php';

class Model
{
	protected $attributes = array();
	protected static $table;
	protected static $dbc;

	public function __construct ()
	{
		self::dbConnect():
	}

	private static function dbConnect ()
	{
		if (!self::$dbc)
		{
			define('DB_HOST', '127.0.0.1')
			define('DB_', '127.0.0.1')
			define('DB_', '127.0.0.1')
			define('DB_', '127.0.0.1')
			// Get new instance of PDO Object
			// self::$dbc = new PDO (DB_HOST . ';' . DB_NAME, DB_USER, DB_PASS);

			// Tell PDO to throw exceptions on error
			self::$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

		}
	}

    public function __get($name)
	{
		// Check for the existence of array key $name
	    if (array_key_exists($name, $this->attributes)) {
	            return $this->attributes[$name];
	    }

        return null;
	}

	public function __set($name, $value)
    {
        // Set the $name key to hold $value in $attributes ($data in exercise example)
        $this->attributes[$name] = $value;
    }

    public function save ()
    {
    	// @TODO: Ensure there are attributes before attempting to save
    	if(isset($this->attributes]))

        // @TODO: Perform the proper action - if the `id` is set, this is an update, if not it is a insert

        // @TODO: Ensure that update is properly handled with the id key

        // @TODO: After insert, add the id back to the attributes array so the object can properly reflect the id

        // @TODO: You will need to iterate through all the attributes to build the prepared query

        // @TODO: Use prepared statements to ensure data security


    }

    public static function find($id)
    {
        // Get connection to the database
        self::dbConnect();

        // @TODO: Create select statement using prepared statements

        // @TODO: Store the resultset in a variable named $result

        // The following code will set the attributes on the calling object based on the result variable's contents

        $instance = null;
        if ($result)
        {
            $instance = new static;
            $instance->attributes = $result;
        }
        return $instance;
    }

    /*
     * Find all records in a table
     */
    public static function all()
    {
        self::dbConnect();

        // @TODO: Learning from the previous method, return all the matching records
    }

	public static function getTableName ()
	{
		return static::$table;
	}


}