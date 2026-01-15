<?php

namespace Tualo\Office\VoteManagerReports\Commands;

use Garden\Cli\Cli;
use Garden\Cli\Args;
use phpseclib3\Math\BigInteger\Engines\PHP;
use Tualo\Office\Basic\ICommandline;
use Tualo\Office\ExtJSCompiler\Helper;
use Tualo\Office\Basic\TualoApplication as App;
use Tualo\Office\Basic\PostCheck;
use Tualo\Office\Basic\CommandLineInstallSQL;


class InstallDS extends CommandLineInstallSQL  implements ICommandline
{
    public static function getDir(): string
    {
        return dirname(__DIR__, 1);
    }
    public static $shortName  = 'votemanagerreports-ds';
    public static $files = [

        'install/ds/ds_class'                               => 'setup ds_class',
        'install/ds/wm_berichte.ds'                         => 'setup wm_berichte.ds',
        'install/ds/view_blocksystem_status.ds'             => 'setup view_blocksystem_status.ds',



    ];
}
