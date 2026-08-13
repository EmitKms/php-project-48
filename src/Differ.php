<?php

namespace App;

use Docopt;

class Differ
{
  private array $args;

  public function __construct()
  {
    $doc = <<<HELP
Generate diff

Usage:
  gendiff (-h|--help)
  gendiff (-v|--version)
  gendiff [--format <fmt>] <firstFile> <secondFile>

Options:
  -h --help             Show this screen
  -v --version          Show version
  --format <fmt>        Report format [default: stylish]
HELP;

    $this->args = (array)Docopt::handle($doc, ['version' => '1.0.0']);
  }

  public function run(): string
  {
    return '';
  }
}
