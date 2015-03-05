<?php
include "mysql.inc";
include "myfunction.inc";
$aa=new mysql;
$bb=new mysql;

$aa->link("mysql");
//创建数据库
$query="CREATE DATABASE `bbs_data`";
if ($aa->excu($query)){
    echo "===数据库创建成功！===";
    }

$bb->link("bbs_data");
//////////创建数据表father_module_info/////////////
$query="CREATE TABLE `father_module_info` (
  `id` int(11) NOT NULL auto_increment,
  `module_name` varchar(66) default NULL,
  `show_order` int(11) default '0',
  UNIQUE KEY `id` (`id`)
) ";
$bb->excu($query);
echo "<br>&nbsp;&nbsp;数据表-father_module_info-创建成功！";
//////////创建数据表manage_user_info/////////////
$query="CREATE TABLE `manage_user_info` (
  `id` int(11) NOT NULL auto_increment,
  `user_name` varchar(16) NOT NULL,
  `user_pw` varchar(16) NOT NULL,
  UNIQUE KEY `id` (`id`)
)";
$bb->excu($query);
echo "<br>&nbsp;&nbsp;数据表-manage_user_info-创建成功！";
//////////创建数据表note_info/////////////
$query="CREATE TABLE `note_info` (
  `id` int(11) NOT NULL auto_increment,
  `module_id` int(11) default '0',
  `up_id` int(11) default '0',
  `title` varchar(88) NOT NULL,
  `cont` text NOT NULL,
  `time` datetime NOT NULL,
  `user_name` varchar(16) NOT NULL,
  `times` int(11) default '0',
  UNIQUE KEY `id` (`id`)
)";
$bb->excu($query);
echo "<br>&nbsp;&nbsp;数据表-note_info-创建成功！";
//////////创建数据表son_module_info/////////////
$query="CREATE TABLE `son_module_info` (
  `id` int(11) NOT NULL auto_increment,
  `father_module_id` int(11) NOT NULL,
  `module_name` varchar(66) NOT NULL,
  `module_cont` text NOT NULL,
  `user_name` varchar(16) default NULL,
  UNIQUE KEY `id` (`id`)
)";
$bb->excu($query);
echo "<br>&nbsp;&nbsp;数据表-son_module_info-创建成功！";
//////////创建数据表user_info/////////////
$query="CREATE TABLE `user_info` (
  `id` int(11) NOT NULL auto_increment,
  `user_name` varchar(16) NOT NULL,
  `user_pw` varchar(16) NOT NULL,
  `time1` datetime default '0000-00-00 00:00:00',
  `time2` datetime default '0000-00-00 00:00:00',
  UNIQUE KEY `id` (`id`)
)";
$bb->excu($query);
echo "<br>&nbsp;&nbsp;数据表-user_info-创建成功！";
//////////////////初始化数据//////////////////////////
echo "<br>===初始化基本数据===";
$query="INSERT INTO `manage_user_info` VALUES (1, 'admin', 'admin')";
$aa->excu($query);
echo "<br>&nbsp;&nbsp;管理员用户名、密码初始成功";
echo "<br>&nbsp;&nbsp;&nbsp;用户名：admin";
echo "<br>&nbsp;&nbsp;&nbsp;密 码：admin";

$query="INSERT INTO `father_module_info` VALUES (1, '测试父板块', 1)";
$aa->excu($query);
echo "<br>&nbsp;&nbsp;添加“测试父板块”成功！";

$query="INSERT INTO `son_module_info` VALUES (1, 1, '测试子板块', '这是为了测试子板块而添加的', '');";
$aa->excu($query);
echo "<br>&nbsp;&nbsp;添加“测试子板块”成功！";
?>
