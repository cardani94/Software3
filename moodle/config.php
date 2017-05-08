<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'sql305.byetcluster.com';
$CFG->dbname    = 'b18_19944723_771';
$CFG->dbuser    = '19944723_2';
$CFG->dbpass    = '52SKo-.97p';
$CFG->prefix    = 'mdl5t_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8_general_ci',
);

$CFG->wwwroot   = 'http://casdschool.ml';
$CFG->dataroot  = '/home/vol13_3/byethost18.com/b18_19944723/casdschool.ml/htdocs/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
