<?php

$tasks = $query->selectAll('todos','task');

require './views/index.view.php';

echo "I am from index";