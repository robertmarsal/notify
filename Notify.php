<?php 

namespace Notify;

define('URGENCY_LOW', 'low');
define('URGENCY_NORMAL', 'normal');
define('URGENCY_CRITICAL', 'critical');

class Notify {

    const base = 'notify-send';
    
    public static function show ($summary, $body, $urgency=URGENCY_NORMAL) {
        $call = self::base.' "'.$summary.'" "'.$body.'" -u '.$urgency;
        self::call($call);          
    }

    private static function call ($call) {
        shell_exec($call);
    }
}
