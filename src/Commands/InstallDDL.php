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


class InstallDDL extends CommandLineInstallSQL  implements ICommandline
{
    public static function getDir(): string
    {
        return dirname(__DIR__, 1);
    }
    public static $shortName  = 'votemanagerreports-ddl';
    public static $files = [

        'install/ddl/wm_berichte'                   => 'setup wm_berichte',
        'install/ddl/wm_berichte.data'              => 'setup wm_berichte.data',
        'install/ddl/view_blocksystem_status'       => 'setup view_blocksystem_status',

    ];
}
