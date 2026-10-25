<?php
/**
 * Tests for DefiTangle
 */

use PHPUnit\Framework\TestCase;
use Defitangle\Defitangle;

class DefitangleTest extends TestCase {
    private Defitangle $instance;

    protected function setUp(): void {
        $this->instance = new Defitangle(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Defitangle::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
