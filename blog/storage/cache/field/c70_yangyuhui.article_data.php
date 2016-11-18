<?php if(!defined('HDPHP_PATH'))exit;
return array (
  'keywords' => 
  array (
    'field' => 'keywords',
    'type' => 'varchar(255)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'des' => 
  array (
    'field' => 'des',
    'type' => 'varchar(255)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'content' => 
  array (
    'field' => 'content',
    'type' => 'text',
    'null' => 'YES',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'article_aid' => 
  array (
    'field' => 'article_aid',
    'type' => 'int(10) unsigned',
    'null' => 'NO',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
);
?>