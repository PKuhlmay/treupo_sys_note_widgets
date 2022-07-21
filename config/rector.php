<?php
declare(strict_types=1);
use Rector\CodeQuality\Rector\Class_\InlineConstructorDefaultToPropertyRector;
use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;
use Ssch\TYPO3Rector\Set\Typo3SetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__
    ]);
    // register a single rule
    $rectorConfig->rule(InlineConstructorDefaultToPropertyRector::class);
    // define sets of rules
   $rectorConfig->sets([
       LevelSetList::UP_TO_PHP_81,
       Typo3SetList::TYPO3_104,
       Typo3SetList::TCA_104
   ]);
};