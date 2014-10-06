<?php
/**
  * Hola.
  * This is the primary configuration file for OpenFuego.
  * You must edit the values below before getting started.
  * You should not need to edit any other files.
  *
  * OpenFuego requires PHP >= 5.3.0 and MySQL 5.
  * Only POSIX operating systems (not Windows) are supported.
  * This program must be run from a command line.
  *
  * @author Andrew Phelps <andrew@phel.ps>
  * @version 1.0
  */

namespace RainbowFuego;

/* Your time zone. Harvard time is 'America/New_York'.
 * http://php.net/manual/en/timezones.php
**/
date_default_timezone_set('America/New_York');
	
/** Time to curate.
  * Specify the authorities at the center of the universe.
  * Minimum 1, maximum 15. No @ symbol necessary.
 **/
define(__NAMESPACE__ . '\AUTHORITIES', serialize(
	array(
		'sLcarothers',
		'coryhaik',
		'tjortenzi',
		'terri_rupar',
		'KerryLauerman',
		'CaraReports',
		'juliabeizer',
		'ajrod',
		'AllisonGolds',
		'katarcement',
		'AmateurLeader',
	)
));

/** Your email address, for error reporting. Separate multiple addresses with commas. */
const WEBMASTER = 'saracarothers@gmail.com';

/** For how many days should links remain in the database? Default: 1. Must be an integer. */
const EXPIRATION_DAYS = 1;

/** Your database credentials.
  * Only MySQL is supported, hipsters. */
const
	DB_NAME = 'saracaro_rainbowfuego', 
	DB_USER = 'saracaro_rainbow',
	DB_PASS = 'rainbowuser',
	DB_HOST = 'localhost',  // default: localhost
	DB_PORT = 3306;  // default: 3306

/** Your Twitter credentials. If you don't have any yet, visit https://dev.twitter.com and sign in.
  * Click "Create an app" and follow the instructions. Create an app with READ and WRITE access.
  * Then generate new access tokens. Don't share the secrets with anyone.
**/
const
	TWITTER_SCREEN_NAME = 'sLcarothers',
	TWITTER_CONSUMER_KEY = 'o7wkVxiNJDfKszkC9b4hA',
	TWITTER_CONSUMER_SECRET = '6J1pU89Ipss8wmgf2uvlZkjUYcuGu1j84ox2c70TA',
	TWITTER_OAUTH_TOKEN = '15510953-YRWkQUKqZLiu16L1gzPy4gheJEIcylKr8tzcPWeQ5',
	TWITTER_OAUTH_SECRET = 'JefwXHp3EEOaIDoRuXI2WS7j2ccRNSKETamZkkJEmcq93';

/** Your Bitly credentials. Visit this page to grab them: http://bitly.com/a/your_api_key 
  * Optional, recommended. Leave blank to disable.
**/
const
	BITLY_USERNAME = 'scarothers',
	BITLY_API_KEY = 'R_50788a9b16f086418a4bf84f7139ca3b';

/** Your Goo.gl API credentials. Visit this page for instructions:
  * https://developers.google.com/url-shortener/v1/getting_started#APIKey 
  * Optional, recommended. Leave blank to disable.
**/
const GOOGL_API_KEY = '';

/** Your Embed.ly API credentials. Visit this page for a free account: http://embed.ly/embed/pricing 
  * Optional, but required to return metadata with URLs. Leave blank to disable.
**/
const EMBEDLY_API_KEY = '65f3ed59172546cfacdcb4601eaa8e88';

/**
  * All done, no more editing! Now run fetch.php at the command line.
**/
?>