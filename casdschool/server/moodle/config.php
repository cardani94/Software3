<?php  // Moodle configuration file



unset($CFG);

global $CFG;

$CFG = new stdClass();



$CFG->dbtype    = 'mariadb';

$CFG->dblibrary = 'native';

$CFG->dbhost    = 'localhost';

$CFG->dbname    = 'b18_19944723_771';

$CFG->dbuser    = 'root';

$CFG->dbpass    = '12345678';

$CFG->prefix    = 'mdl5t_';

$CFG->dboptions = array (

  'dbpersist' => 0,

  'dbport' => '',

  'dbsocket' => '',

  'dbcollation' => 'utf8_general_ci',

);



$CFG->wwwroot   = 'http://localhost';

$CFG->dataroot  = 'D:\\casdschool\\server\\moodledata';

$CFG->admin     = 'admin';



$CFG->directorypermissions = 0777;



require_once(__DIR__ . '/lib/setup.php');



// There is no php closing tag in this file,

// it is intentional because it prevents trailing whitespace problems!

