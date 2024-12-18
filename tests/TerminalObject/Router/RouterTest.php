<?php

namespace League\CLImate\Tests\TerminalObject\Router;

use League\CLImate\TerminalObject\Router\Router;
use League\CLImate\Tests\TestBase;

class RouterTest extends TestBase
{
    /** @test */
    public function it_can_find_a_basic_object()
    {
        $router = new Router();

        $this->assertTrue($router->exists('out'));
    }

    /** @test */
    public function it_can_find_a_dynamic_object()
    {
        $router = new Router();

        $this->assertTrue($router->exists('input'));
    }

    /** @test */
    public function it_returns_false_on_a_non_existent_object()
    {
        $router = new Router();

        $this->assertFalse($router->exists('NotAThingAtAll'));
    }
}
