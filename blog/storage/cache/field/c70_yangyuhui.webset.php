<?php if(!defined('HDPHP_PATH'))exit;
return array (
  'wid' => 
  array (
    'field' => 'wid',
    'type' => 'smallint(5) unsigned',
    'null' => 'NO',
    'key' => true,
    'default' => NULL,
    'extra' => 'auto_increment',
  ),
  'name' => 
  array (
    'field' => 'name',
    'type' => 'varchar(15)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'value' => 
  array (
    'field' => 'value',
    'type' => 'varchar(70)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'title' => 
  array (
    'field' => 'title',
    'type' => 'varchar(45)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'desc' => 
  array (
    'field' => 'desc',
    'type' => 'varchar(255)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
);
?>