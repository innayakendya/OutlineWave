<?php
/**
 * Tests for OutlineWave
 */

use PHPUnit\Framework\TestCase;
use Outlinewave\Outlinewave;

class OutlinewaveTest extends TestCase {
    private Outlinewave $instance;

    protected function setUp(): void {
        $this->instance = new Outlinewave(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Outlinewave::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
