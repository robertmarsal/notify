<?php

namespace Notify;

class Notify {

    const base = 'notify-send';

    public static function show($summary, $body) {
        $call = self::base . ' "' .
                escapeshellcmd($summary) . '" "' .
                escapeshellcmd($body) . '" -u NORMAL';
        self::call($call);
    }

    private static function call($call) {
        shell_exec($call);
    }

}