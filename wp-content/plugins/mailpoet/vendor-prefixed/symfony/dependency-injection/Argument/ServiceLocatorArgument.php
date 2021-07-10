<?php
 namespace MailPoetVendor\Symfony\Component\DependencyInjection\Argument; if (!defined('ABSPATH')) exit; use MailPoetVendor\Symfony\Component\DependencyInjection\Reference; class ServiceLocatorArgument implements \MailPoetVendor\Symfony\Component\DependencyInjection\Argument\ArgumentInterface { use ReferenceSetArgumentTrait; private $taggedIteratorArgument; public function __construct($values = []) { if ($values instanceof \MailPoetVendor\Symfony\Component\DependencyInjection\Argument\TaggedIteratorArgument) { $this->taggedIteratorArgument = $values; $this->values = []; } else { $this->setValues($values); } } public function getTaggedIteratorArgument() : ?\MailPoetVendor\Symfony\Component\DependencyInjection\Argument\TaggedIteratorArgument { return $this->taggedIteratorArgument; } } 