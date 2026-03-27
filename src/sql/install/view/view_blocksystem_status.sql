DELIMITER ;

 
CREATE
OR REPLACE VIEW `view_blocksystem_status_blocks` AS (
    select
        concat(
            `wahlschein`.`blocknumber`,
            `wahlschein`.`wahlscheinstatus`
        ) AS `id`,
        `wahlschein`.`wahlscheinstatus` AS `wahlscheinstatus`,
        `wahlschein`.`blocknumber` AS `blocknumber`,
        `wahlscheinstatus`.`name` AS `name`,
        max(
            cast(
                `wahlschein`.`updated_at` as date
            )
        ) AS `letzte_aenderung`,
        count(distinct `wahlschein`.`id`) AS `anzahl_wahlscheine`
    from
        (
            `wahlschein`
            join `wahlscheinstatus` on(
                `wahlschein`.`wahlscheinstatus` = `wahlscheinstatus`.`id`
            )
        )
    where
        `wahlschein`.`blocknumber` <> '0'
    group by
        `wahlschein`.`wahlscheinstatus`,
        `wahlschein`.`blocknumber`
);
 
CREATE OR REPLACE  VIEW `view_blocksystem_status` AS (
    select
        `wahlschein`.`wahlscheinstatus` AS `wahlscheinstatus`,
        `wahlscheinstatus`.`name` AS `name`,
        cast(
            `wahlschein`.`updated_at` as date
        ) AS `letzte_aenderung`,
        count(
            distinct `wahlschein`.`id`
        ) AS `anzahl_wahlscheine`,
        count(
            distinct `wahlschein`.`blocknumber`
        ) AS `anzahl_blocknumber`
    from
        (
            `wahlschein`
            join `wahlscheinstatus` on(
                `wahlschein`.`wahlscheinstatus` = `wahlscheinstatus`.`id`
            )
        )
    where
        `wahlschein`.`blocknumber` <> '0'
    group by
        `wahlschein`.`wahlscheinstatus`
)