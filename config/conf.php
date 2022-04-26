<?php 
class Conf {
	static private $debug = True;
	static private $databases = array(
	'hostname' => 'localhost',
	'database' => 'pet',
	'login' => 'root',
	'password' => '' );

	/* des fonctions staitc on ne peut pas changer  */
	static public function getLogin() {
	return self::$databases['login']; } /* self :comme this ... n7otouha ki ykounou les attribut static*/

	static public function getHostname(){/* n3aytilha b cof:: getlogin*/
	return self::$databases['hostname']; }

	static public function getDatabase(){
	return self::$databases['database']; }

	static public function getPassword(){
	return self::$databases['password']; }

	static public function getDebug() {
	return self::$debug; }
}


?>