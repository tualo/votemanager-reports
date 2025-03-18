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


class InstallPUGs extends CommandLineInstallSQL  implements ICommandline
{
    public static function getDir(): string
    {
        return dirname(__DIR__, 1);
    }
    public static $shortName  = 'votemanagerreports-pugs';
    public static $files = [
        'install/pug/printable_page.pug'             => 'install printable_page pug',
        'install/pug/printable_page_css.pug'             => 'install printable_page_css pug',
        'install/pug/wm_berichte.pug'                               => 'install wm_berichte pug',
        'install/pug/wm_berichte_php.pug'                           => 'install wm_berichte_php pug',
        'install/pug/wm_berichte_abschlussbericht_gesamt.pug'       => 'install wm_berichte_abschlussbericht_gesamt pug',

    ];
}
