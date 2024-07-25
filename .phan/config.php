<?php

return [
    "target_php_version" => ".7.4",
    'directory_list' => [
        'src'
    ],
    "exclude_analysis_directory_list" => [
        'vendor/'
    ],
    'plugins' => [
        'AlwaysReturnPlugin',
        'DollarDollarPlugin',
        'DuplicateArrayKeyPlugin',
        'DuplicateExpressionPlugin',
        'PregRegexCheckerPlugin',
        'PrintfCheckerPlugin',
        'SleepCheckerPlugin',
        'UnreachableCodePlugin',
        'UseReturnValuePlugin',
        'EmptyStatementListPlugin',
        'LoopVariableReusePlugin',
    ],
];