<?php
exit;
$data = "\n=================\n".var_export($_GET,true).'\n'.var_export($_POST,true);

file_put_contents('auto_data.pvar', $data, FILE_APPEND);
