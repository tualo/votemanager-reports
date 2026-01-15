<?php

namespace Tualo\Office\VoteManagerReports\Checks;

use Tualo\Office\Basic\Middleware\Session;
use Tualo\Office\Basic\PostCheck;
use Tualo\Office\Basic\TualoApplication as App;


class Tables  extends PostCheck
{

    public static function test(array $config)
    {
        $clientdb = App::get('clientDB');
        if (is_null($clientdb)) return;
        $tables = [
            'view_blocksystem_status' => [],
            'view_blocksystem_status_blocks' => [],
            'view_blocksystem_status_blocks_wahlscheine' => [],


        ];
        self::tableCheck(
            'votemanagerreports',
            $tables,
            "please run the following command: `./tm install-sql-votemanagerreports --client " . $clientdb->dbname . "`",
            "please run the following command: `./tm install-sql-votemanagerreports --client " . $clientdb->dbname . "`"

        );
    }
}
