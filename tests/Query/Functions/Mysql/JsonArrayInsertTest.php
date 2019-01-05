<?php

namespace Syslogic\DoctrineJsonFunctions\Tests\Query\Functions\Mysql;

use Syslogic\DoctrineJsonFunctions\Tests\Query\MysqlTestCase;
use Doctrine\ORM\Query\Expr;

class JsonArrayInsertTest extends MysqlTestCase
{
    public function testJsonArrayInsert()
    {
        $this->assertDqlProducesSql(
            "SELECT JSON_ARRAY_INSERT('[\"a\", {\"b\": [1, 2]}, [3, 4]]', '$[1]', 1 + 8) from Syslogic\DoctrineJsonFunctions\Tests\Entities\Blank b",
            "SELECT JSON_ARRAY_INSERT('[\"a\", {\"b\": [1, 2]}, [3, 4]]', '$[1]', 1 + 8) AS sclr_0 FROM Blank b0_"
        );
    }
}
