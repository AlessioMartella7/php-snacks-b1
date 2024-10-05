<?php

$searchVote = isset($_GET['voteSearch']) ? strtolower($_GET['voteSearch']) : null;
$languageSearch = isset($_GET['language']) ? strtoupper($_GET['language']) : null;