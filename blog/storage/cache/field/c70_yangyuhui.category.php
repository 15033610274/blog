<?php if(!defined('HDPHP_PATH'))exit;
return array (
  'cid' => 
  array (
    'field' => 'cid',
    'type' => 'smallint(5) unsigned',
    'null' => 'NO',
    'key' => true,
    'default' => NULL,
    'extra' => 'auto_increment',
  ),
  'cname' => 
  array (
    'field' => 'cname',
    'type' => 'char(20)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'ctitle' => 
  array (
    'field' => 'ctitle',
    'type' => 'varchar(120)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'cdes' => 
  array (
    'field' => 'cdes',
    'type' => 'varchar(200)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'pid' => 
  array (
    'field' => 'pid',
    'type' => 'smallint(6)',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
  'ckeywords' => 
  array (
    'field' => 'ckeywords',
    'type' => 'varchar(120)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'csort' => 
  array (
    'field' => 'csort',
    'type' => 'smallint(5) unsigned',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
);
?>