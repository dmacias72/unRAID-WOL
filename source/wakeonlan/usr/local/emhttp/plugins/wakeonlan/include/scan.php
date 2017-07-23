<?
    $log = '/var/log/scan';
    file_put_contents($log, '');
    $ip = $_POST['ip'];
    $net = substr_replace($ip ,'',-1).'0/24';
    $cmd = "/usr/bin/nmap -sn -oX $log --exclude ".escapeshellarg($ip).' '.escapeshellarg($net). ' > /dev/null 2>&1';
    shell_exec($cmd);
?>