<?php  

class Log
{
	private $filename;
	private $handle;
	
	public function __construct($prefix = "log")
	{
		// $this->filename = $prefix . "-" . date('Y-m-d') . '.log';
		if ($this->setFilename($prefix)) {

			$this->handle = fopen($this->filename, 'a');	
		}
	}

	protected function setFilename($prefix)
	{
		// Set the date
        $date = date('Y-m-d');
        // Set the filename with user defined prefix.
        if (is_string($prefix)) {
        	$this->prefix = trim($prefix);
            return $this->filename = "$prefix-" . $date . ".log"; 

            if (touch($this->filename) && is_writable($this->filename)) {
            	return TRUE;
            } else {
	            die("Not Writable." . PHP_EOL);
	        }

        } else {
        	die("No string entered.  Please enter proper format." . PHP_EOL);
        }
	}

	public function getFilename () {
		return $this->filename;
	}

	public function getHandle () {
		return $this->handle;
	}

	public function logMessage($logLevel, $message)
	{
		fwrite($this->handle, PHP_EOL . "[{$logLevel}] {$message}");
	}

	public function info($message)
	{
		return $this->logMessage("INFO", $message);
	}

	public function error($message)
	{
		return $this->logMessage("ERROR", $message);
	}
	
	public function __destruct ()
	{
		if (isset($this->handle)) {
			fclose($this->handle);
		}
	}
	
}

?>