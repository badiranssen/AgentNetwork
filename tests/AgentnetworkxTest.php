<?php
/**
 * Tests for AgentNetworkX
 */

use PHPUnit\Framework\TestCase;
use Agentnetworkx\Agentnetworkx;

class AgentnetworkxTest extends TestCase {
    private Agentnetworkx $instance;

    protected function setUp(): void {
        $this->instance = new Agentnetworkx(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Agentnetworkx::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
