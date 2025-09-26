<?php

class SgqaHelper
{
    // SGQA = SID X GID X QID [ + subcode para múltiple/matriz ]
    public static function base($sid, $gid, $qid)
    {
        return "{$sid}X{$gid}X{$qid}";
    }

    public static function forChild($sid, $gid, $parentQid, $childTitle)
    {
        // En arrays/múltiple, LimeSurvey usa: base + child "title" concatenado
        return "{$sid}X{$gid}X{$parentQid}{$childTitle}";
    }
}
