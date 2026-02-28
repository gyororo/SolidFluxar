<?php
/**
 * Tests for SolidFluxar
 */

use PHPUnit\Framework\TestCase;
use Solidfluxar\Solidfluxar;

class SolidfluxarTest extends TestCase {
    private Solidfluxar $instance;

    protected function setUp(): void {
        $this->instance = new Solidfluxar(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Solidfluxar::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
