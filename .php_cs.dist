<?php

$finder = PhpCsFixer\Finder::create()
    ->files()
    ->name('*.php')
    ->exclude('vendor') //排除 vendor 目录
    ->exclude('storage') //排除 storage 目录
    ->exclude('bootstrap') //排除 bootstrap 目录
    ->notPath('_ide_helper_models.php') //排除 ide-helper 文件
    ->notPath('_ide_helper.php') //排除 ide-helper 文件
    ->notPath('scratch.php') //排除 scratch.php 文件
    ->in(__DIR__)
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

$rules = [
    '@PhpCsFixer' => true,
    'concat_space' => ['spacing' => 'one'],
    'single_line_comment_style' => false,
];

$config = new \PhpCsFixer\Config();
return $config->setRules($rules)
    ->setFinder($finder);
