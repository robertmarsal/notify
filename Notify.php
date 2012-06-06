<?php 

namespace Notify;

define('URGENCY_LOW', 'low');
define('URGENCY_NORMAL', 'normal');
define('URGENCY_CRITICAL', 'critical');

class Notify {

    const base = 'notify-send';
    
    public static function show ($summary, $body, $urgency = URGENCY_NORMAL) {
        self::call(self::base.' '.$summary.' '.$body.' -u '.$urgency);          
    }

    private static function call ($cmd) {
        shell_exec($cmd);
    }
}
