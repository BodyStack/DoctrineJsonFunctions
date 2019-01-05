<?php

namespace Syslogic\DoctrineJsonFunctions\Query\AST\Functions\Mysql;

/**
 * "JSON_SET" "(" StringPrimary "," StringPrimary "," NewValue { "," StringPrimary "," NewValue }* ")"
 */
class JsonSet extends MysqlJsonFunctionNode
{
	const FUNCTION_NAME = 'JSON_SET';

    /** @var string[] */
    protected $requiredArgumentTypes = [self::STRING_ARG, self::STRING_ARG, self::VALUE_ARG];

    /** @var string[] */
    protected $optionalArgumentTypes = [self::STRING_ARG, self::VALUE_ARG];

    /** @var bool */
    protected $allowOptionalArgumentRepeat = true;
}
