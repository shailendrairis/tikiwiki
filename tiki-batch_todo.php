<?php
/**
 * @package tikiwiki
 */
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: tiki-batch_todo.php 44444 2013-01-05 21:24:24Z changi67 $

include('tiki-setup.php');
include_once('lib/todolib.php');

$access->check_feature('feature_trackers');	// TODO add more features as the lib does more

$todos = $todolib->listTodoObject();
foreach ($todos as $todo) {
	$todolib->applyTodo($todo);
}

