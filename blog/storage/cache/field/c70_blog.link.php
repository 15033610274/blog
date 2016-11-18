<?php if(!defined('HDPHP_PATH'))exit;
return array (
  'lid' => 
  array (
    'field' => 'lid',
    'type' => 'int(10) unsigned',
    'null' => 'NO',
    'key' => true,
    'default' => NULL,
    'extra' => 'auto_increment',
  ),
  'lname' => 
  array (
    'field' => 'lname',
    'type' => 'char(40)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'addtime' => 
  array (
    'field' => 'addtime',
    'type' => 'int(10) unsigned',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
  'logo' => 
  array (
    'field' => 'logo',
    'type' => 'varchar(120)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'url' => 
  array (
    'field' => 'url',
    'type' => 'char(150)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'sort' => 
  array (
    'field' => 'sort',
    'type' => 'smallint(5) unsigned',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
);
?>