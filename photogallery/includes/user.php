<?php
/** Require Database */
require_once 'database.php';
require_once 'databaseobject.php';
class User extends DatabaseObject {
	protected static $table_name = "users";
	protected static $db_fields = array('id', 'username', 'password', 'first_name', 'last_name');

	public $id;
	public $username;
	public $password;
	public $first_name;
	public $last_name;

	public function full_name() {
		if (isset($this->first_name) && isset($this->last_name)) {
			return $this->first_name . " " . $this->last_name;
		} else {
			return "";
		}
	}

	public static function authenticate($username = "", $password = "") {
		global $database;
		$username = $database->escape_value($username);
		$password = $database->escape_value($password);

		$sql = "SELECT * FROM users ";
		$sql .= "WHERE username = '{$username}' ";
		$sql .= "AND password = '{$password}' ";
		$sql .= "LIMIT 1";
		$result_array = self::find_by_sql($sql);
		return !empty($result_array) ? array_shift($result_array) : false;
	}

	private function has_attribute($attrtibute) {
		/** get_object_vars returns an associative array with all attributes including private ones! as the keys and their current values as the value */
		$object_vars = get_object_vars($this);

		/**
		 * We don't care about the value, we just want to know if the key exists
		 * Will return true or false
		 */
		return array_key_exists($attribute, $object_vars);
	}

	protected function attributes() {
		/** return an array of attribute keys and their values */
		$attributes = array();

		foreach (self::$db_fields as $field) {
			if (property_exists($this, $field)) {
				$attributes[$field] = $this->$field;
			}
		}
	}

	protected function sanitized_attributes() {
		global $database;
		$clean_attributes = array();
		//sanitize the values before submitting
		//Note: does not the alter the actual value of each attribute
		foreach ($this->attributes() as $key => $value) {
			$clean_attributes[$key] = $database->escape_value($value);
		}
		return $clean_attributes;
	}

	/**
	 * If a new record doesn't have an id, the record will be created else if the ID is already there, the record will be updated.
	 */
	public function save() {
		/** A new record won't have an id yet */
		return isset($this->id) ? $this->update() : $this->create();
	}

	public function create() {
		global $database;
		$attributes = $this->sanitized_attributes();

		/**
		 * Don't forget your SQL syntax and good habits:
		 * INSERT INTO table (key, key) VALUES ('value', 'value')
		 *
		 * Single-quotes around all values
		 * Escape all values to prevent SQL injection
		 */

		$sql = "INSERT INTO " . self::$table_name . "(";
		$sql .= join(", ", array_keys($attributes));
		$sql .= ") VALUES ('";
		$sql .= join("', '", array_keys($attributes));
		$sql .= "')";

		if ($database->query($sql)) {
			$this->id = $database->insert_id();
			return true;
		} else {
			return false;
		}
	}

	public function update() {
		global $database;
		$attributes = $this->sanitized_attributes();
		$attribute_pairs = array();
		foreach ($attributes as $key => $value) {
			$attribute_pairs[] = "{$key}='{$value}'";
		}
		$sql = "UPDATE " . self::$table_name . " SET";
		$sql .= join(", ", $attribute_pairs);
		$sql .= " WHERE id=" . $database->escape_value($this->id);
		$database->query($sql);
		return ($database->affected_rows() == 1) ? true : false;
	}

	public function delete() {
		global $database;

		$sql = "DELETE FROM " . self::$table_name;
		$sql .= "WHERE id=" . $database->escape_value($this->id);
		$sql .= " LIMIT 1";
		$database->query($sql);
		return ($database->affected_rows() == 1) ? true : false;
	}
}
?>
