<?php 

namespace Notify;

class Notify {

    const base = 'notify-send'; 

    public static function show ($summary, $body) {
        self::call(self::base.' '.$summary.' "'.$body.'"');          
    }

    private static function call ($cmd) {
        shell_exec($cmd);
    }
}
