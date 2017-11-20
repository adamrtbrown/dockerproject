<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Rebates\User;

/**
 * @covers User
 */
final class UserTest extends TestCase
{
    /**
     * Should check for authentication
     */
    public function testUser(): void {
        $user = new User();
        $authenticator = $this->createMock(Authenticator::class);
        $user->setAuthenticator($authenticator);
        
        $this->assertFalse($user->isAuthorized());
        
        $authenticator->authenticate();
        $this->assertTrue($user->isAuthorized());

    }
}
