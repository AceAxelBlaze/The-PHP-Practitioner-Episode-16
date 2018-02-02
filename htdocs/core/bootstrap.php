<?php

$config = require 'config.php';

require 'core/task.php';
require 'core/router.php';
require 'core/database/connection.php';
require 'core/database/queryBuilder.php';

return new queryBuilder(
	connection::make($config['database'])
);