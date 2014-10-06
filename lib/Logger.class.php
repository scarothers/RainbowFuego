<?php namespace RainbowFuego\lib;

class Logger {
	
	public static $verbose = \RainbowFuego\VERBOSE;
	public static $tmp;
	
	public static function debug($message) {
		
		$messageFormatted = self::getTimestamp() . $message . "\n";

		if (self::$verbose) {
			echo $messageFormatted;
		}
	}
	
	public static function info($message) {

		$messageFormatted = self::getTimestamp() . $message . "\n";

		if (self::$verbose) {
			echo $messageFormatted;
		}
		
		// write to log
	}

	public static function error($message) {

		$messageFormatted = self::getTimestamp() . $message . "\n";

		if (self::$verbose) {
			echo $messageFormatted;
		}
		
		// write to log
	}
	
	public static function fatal($message) {
		
		$messageFormatted = self::getTimestamp() . $message . "\n";
		
		if (self::$verbose) {
			echo $messageFormatted;
		}

		else {
			$subject = "RainbowFuego encountered a fatal error";
			self::notify($subject, $messageFormatted);	
		}

		// write to log
	}
	
	private static function notify($subject, $message) {
		mail(\RainbowFuego\WEBMASTER, $subject, $message, 'From: ' . \RainbowFuego\POSTMASTER);
	}
	
	private static function getTimestamp() {
		return '[' . date('Y-m-d H:i:s') . ']: ';
	}
}