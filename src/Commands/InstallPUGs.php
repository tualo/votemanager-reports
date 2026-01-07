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

        'install/pug/wm_berichte_php.pug'                           => 'install wm_berichte_php pug',


        'install/pug/printable_page.pug' => 'install printable_page pug',
        'install/pug/printable_page_css.pug' => 'install printable_page_css pug',
        'install/pug/wm_berichte.pug' => 'install wm_berichte pug',
        'install/pug/wm_berichte_abgewiesene_online.pug' => 'install wm_berichte_abgewiesene_online pug',
        'install/pug/wm_berichte_abschlussbericht_gesamt.pug' => 'install wm_berichte_abschlussbericht_gesamt pug',
        'install/pug/wm_berichte_abschlussbericht_gesamt.pug' => 'install wm_berichte_abschlussbericht_gesamt pug',
        'install/pug/wm_berichte_bekanntmachung.pug' => 'install wm_berichte_bekanntmachung pug',
        'install/pug/wm_berichte_bekanntmachung_schlusstext.pug' => 'install wm_berichte_bekanntmachung_schlusstext pug',
        'install/pug/wm_berichte_beteiligung_gesamt.pug' => 'install wm_berichte_beteiligung_gesamt pug',
        'install/pug/wm_berichte_beteiligung_tagesprokoll.pug' => 'install wm_berichte_beteiligung_tagesprokoll pug',
        'install/pug/wm_berichte_beteiligung_tagesprokoll_wrapper.pug' => 'install wm_berichte_beteiligung_tagesprokoll_wrapper pug',
        'install/pug/wm_berichte_blocksystem.pug' => 'install wm_berichte_blocksystem pug',
        'install/pug/wm_berichte_blocksystem_wrapper.pug' => 'install wm_berichte_blocksystem_wrapper pug',
        'install/pug/wm_berichte_css.pug' => 'install wm_berichte_css pug',
        'install/pug/wm_berichte_double_voter.pug' => 'install wm_berichte_double_voter pug',
        'install/pug/wm_berichte_erwartet.pug' => 'install wm_berichte_erwartet pug',
        'install/pug/wm_berichte_erwartet_online.pug' => 'install wm_berichte_erwartet_online pug',
        'install/pug/wm_berichte_erwartet_schlusstext.pug' => 'install wm_berichte_erwartet_schlusstext pug',
        'install/pug/wm_berichte_footer.pug' => 'install wm_berichte_footer pug',
        'install/pug/wm_berichte_header.pug' => 'install wm_berichte_header pug',
        'install/pug/wm_berichte_los_mindestsitze.pug' => 'install wm_berichte_los_mindestsitze pug',
        'install/pug/wm_berichte_losentscheid_stimmzettel.pug' => 'install wm_berichte_losentscheid_stimmzettel pug',
        'install/pug/wm_berichte_php.pug' => 'install wm_berichte_php pug',
        'install/pug/wm_berichte_prozentuale_verteilung.pug' => 'install wm_berichte_prozentuale_verteilung pug',
        'install/pug/wm_berichte_tanboegen.pug' => 'install wm_berichte_tanboegen pug',
        'install/pug/wm_berichte_tanboegen_tabelle.pug' => 'install wm_berichte_tanboegen_tabelle pug',
        'install/pug/wm_berichte_teilergebnis.pug' => 'install wm_berichte_teilergebnis pug',
        'install/pug/wm_berichte_wrapper.pug' => 'install wm_berichte_wrapper pug',
        'install/pug/wm_berichte_wrapper_stand.pug' => 'install wm_berichte_wrapper_stand pug',
        'install/pug/wm_berichte_zaehlprotokoll.pug' => 'install wm_berichte_zaehlprotokoll pug',
        'install/pug/wm_berichte_zaehlprotokoll_output.pug' => 'install wm_berichte_zaehlprotokoll_output pug',
        'install/pug/wm_berichte_zeichnungsberechtigt_status.pug' => 'install wm_berichte_zeichnungsberechtigt_status pug',

    ];
}
