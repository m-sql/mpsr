<?php
/**
 * 脚本版本(PSR)
 */
$m_psr = <<<EOL
    _   _ _             ____  ____  ____  
   | | | (_)  _ __ ___ |  _ \/ ___||  _ \ 
   | |_| | | | '_ ` _ \| |_) \___ \| |_) |
   |  _  | | | | | | | |  __/ ___) |  _ < 
   |_| |_|_| |_| |_| |_|_|   |____/|_| \_\
   @Author : Luck Li Di
   @Email  : lucklidi@126.com
   @version: v1.0.0
   @Lets`go: Learning PHP Standard Recommendations

EOL;

$start = <<<EOL
 _   _ _                       _               _ 
| | | (_)   _ __ ___   __ _ ___| |_ ___ _ __   | |
| |_| | |  | '_ ` _ \ / _` / __| __/ _ \ '__|  | |
|  _  | |  | | | | | | (_| \__ \ ||  __/ |     |_|
|_| |_|_|  |_| |_| |_|\__,_|___/\__\___|_|     (_)

EOL;

/**
 * 初始化
 */
echo $m_psr . PHP_EOL;

/**
 * 执行授权
 */
$pwd = `pwd`;

$pwd = trim($pwd);

$m_psr_file = $pwd . '/luck/phpPSR.php';

`chmod a+x {$m_psr_file}`;

$php_path = `whereis php`;

$php_path = explode(' ', trim($php_path));

/**
 * PHP环境 获取&检测
 */
if ($php_path[0] !== 'php:') {
    echo '   Sorry，没有发现PHP环境，请先安装PHP环境^_^';
    exit(PHP_EOL);
}
$php_path = $php_path[1];

/**
 * 安装成功
 * alias mpsr
 * @Author: Luck Li Di
 * @Email : lucklidi@126.com
 */
`echo "alias mpsr='{$php_path} {$m_psr_file}'" >>  /root/.bashrc`;

/**
 * 启动
 */
usleep(500);
echo $start . PHP_EOL;

/**
 * 全局生效
 */
`source ~/.bashrc`;
sleep(1);

/**
 * 执行帮助
 */
$help = `mpsr -h 2>&1`;
$help = trim($help);
if (substr($help,-5) == 'found') {
    $notice = <<<eol
 ------------------------------
|Please Run  'source ~/.bashrc'
 
|And    Run  'mpsr -h'
 ---------------------
 
Then, you can

use it!

eol;
    exit($notice);
}
echo $help;



