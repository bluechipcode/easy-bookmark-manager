<?php

$lang = 'fr';

$dir = dirname(__FILE__);
$langContents = file_get_contents($dir . '/../' . $lang . '.json');
$data = json_decode($langContents, true);

return $data['auth'];
