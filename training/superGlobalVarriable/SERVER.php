<?php
// PHPが稼働しているWebサーバーが生成するヘッダ情報、パス情報、スクリプトの位置のような情報を提供する

echo $_SERVER['PHP_SELF']; // return path + file name
// echo $_SERVER['SERVER_ADDR'];
echo $_SERVER['SERVER_NAME'];

// khi cần thì tra.
