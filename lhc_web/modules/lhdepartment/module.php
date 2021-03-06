<?php

$Module = array( "name" => "Departments configuration");

$ViewList = array();

$ViewList['departments'] = array(
    'params' => array(),
    'functions' => array( 'list' )
    );

$ViewList['new'] = array(
    'params' => array(),
    'functions' => array( 'create' )
);

$ViewList['edit'] = array(
    'params' => array('departament_id'),
    'functions' => array( 'edit' )
);

$FunctionList['list'] = array('explain' => 'Access to list departments');
$FunctionList['create'] = array('explain' => 'Permission to create a new department');
$FunctionList['edit'] = array('explain' => 'Permission to edit department');
$FunctionList['delete'] = array('explain' => 'Permission to delete department');
$FunctionList['selfedit'] = array('explain' => 'Allow user to choose his departments');
$FunctionList['actworkflow'] = array('explain' => 'Allow user to change transfer workflow');
$FunctionList['actautoassignment'] = array('explain' => 'Allow user to change auto assignment');
$FunctionList['manageall'] = array('explain' => 'Allow user to manage all departments, not only assigned to him');

?>