<?php
 namespace MailPoetVendor\Doctrine\ORM\Query\AST; if (!defined('ABSPATH')) exit; class NullIfExpression extends \MailPoetVendor\Doctrine\ORM\Query\AST\Node { public $firstExpression; public $secondExpression; public function __construct($firstExpression, $secondExpression) { $this->firstExpression = $firstExpression; $this->secondExpression = $secondExpression; } public function dispatch($sqlWalker) { return $sqlWalker->walkNullIfExpression($this); } } 