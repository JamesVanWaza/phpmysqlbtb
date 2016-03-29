<?php
require_once 'initialize.php';

class Photograph extends DatabaseObject {
	protected static $table_name = "photographs";
	protected static $db_fields = array('id', 'filename', 'type', 'size', 'caption');

	public $id;
	public $filename;
	public $type;
	public $size;
	public $caption;

	private $temp_path;
	protected $upload_dir = "images";
	public $errors = array();

	/** See http://www.php.net/manual/en/features.file-upload.errors.php */
	protected $upload_errors = array(
		UPLOAD_ERR_OK => "No Errors",
		UPLOAD_ERR_INI_SIZE => "Larger than upload_max_filesize",
		UPLOAD_ERR_FORM_SIZE => "Larger than form MAX_FILE_SIZE",
		UPLOAD_ERR_PARTIAL => "Partial Upload",
		UPLOAD_ERR_NO_FILE => "No File",
		UPLOAD_ERR_NO_TMP_DIR => "No temporary directory",
		UPLOAD_ERR_CANT_WRITE => "Can't write to disk",
		UPLOAD_ERR_EXTENSION => "File upload stopped by extension",
	);

	/** Pass in $_FILE['uploaded_file'] as an argument */
	public function attach_file($file) {
		/** Perform error checking on the form parameters */
		if (!$file || empty($file) || !is_array($file)) {
			/** Error: Nothing uploaded or wrong argument usage */
			$this->errors[] = "No file was uploaded";
			return false;
		} elseif ($file['error'] != 0) {
			/** Error: Report what PHP says went wrong */
			$this->errors[] = $this->upload_errors[$file['error']];
			return false;
		} else {
			/** Set object attributes to the form parameters */
			$this->temp_path = $file['tmp_name'];
			$this->filename = basename($file['name']);
			$this->type = $file['type'];
			$this->size = $file['size'];

			/** Don't worry about saving anything to the database yet */
			return true;
		}
	}

	public function save() {
		/** A new record won't have an id yet */
		if (isset($this->id)) {
			/** Really just to update the caption  */
			$this->update();
		} else {
			/**
			 * Make sure there are no errors
			 *
			 * Can't save if there are pre-existing errors
			 */
			if (!empty($this->errors)) {
				return false;
			}

			/** Make sure caption is not too long for the DB */
			if (strlen($this->caption) > 255) {
				$this->errors[] = "The caption can only be 255 characters long. ";
				return false;
			}

			/** Determine the target_path */
			$target_path = SITE_ROOT . DS . 'public' . DS . $this->upload_dir . DS . $this->filename;

			/** Make sure a file doesn't already exist in the target location */
			if (file_exists($target_path)) {
				$this->errors[] = "The file {$this->filename} already exists.";
				return false;
			}

			/** Attempt to move the file */
			if (move_uploaded_file($this->temp_path, $target_path)) {
				/** Success */
				/** Save a corresponding entry to the database */
				if ($this->create()) {
					unset($this->temp_path);
					return true;
				}

			} else {
				/** Failure */
				$this->errors[] = "The file upload failed, possibly due to incorrect permissions on the upload folder.";
				return false;
			}

		}
	}
}
?>