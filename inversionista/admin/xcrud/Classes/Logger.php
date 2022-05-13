<?php

/**
 * Created by IntelliJ IDEA.
 * User: desarrollo
 * Date: 05/08/2015
 * Time: 12:52 PM
 */

class Logger
{
    public static function info($msg) {
            $logfile = '../xcrud/logs/system.out';
            file_put_contents($logfile,date("Y-m-d H:i:s")." | ".$msg."\n",FILE_APPEND);
    }
    public static function spread() {
            $logfile = '../xcrud/logs/system.out';
            file_put_contents($logfile,"\n\n\n\n\n\n" . "
                             ____
                          __/ GO \__
                      >>>>l_(@)_(@)_l|" . "\n\n",FILE_APPEND);
    }
}