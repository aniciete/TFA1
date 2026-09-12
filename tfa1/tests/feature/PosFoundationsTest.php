<?php

namespace Tests\Feature;

use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FeatureTestTrait;

/**
 * @internal
 */
final class PosFoundationsTest extends CIUnitTestCase
{
    use FeatureTestTrait;

    public function testHomePageReturnsOkAndDisplaysElements(): void
    {
        $result = $this->get('/');

        $result->assertOK();
        $result->assertSee('Point-of-Sale Foundations');
        $result->assertSee('Customer Accounts');
        $result->assertSee('User Accounts');
        $result->assertSee('About');
        $result->assertSee('aria-current="page"');
    }

    public function testAboutPageReturnsOkAndDisplaysMvcFlow(): void
    {
        $result = $this->get('about');

        $result->assertOK();
        $result->assertSee('About This Application');
        $result->assertSee('Request Execution Flow');
        $result->assertSee('Data Storage Design Decision');
        $result->assertSee('static PHP arrays');
        $result->assertSee('aria-current="page"');
    }

    public function testCustomersPageReturnsOkAndDisplaysRecords(): void
    {
        $result = $this->get('customers');

        $result->assertOK();
        $result->assertSee('Customer Accounts');
        $result->assertSee('Total Records');
        $result->assertSee('Elena Rostova');
        $result->assertSee('elena.rostova@example.com');
        $result->assertSee('+1 (555) 234-5678');
        $result->assertSee('Marcus Vance');
        $result->assertSee('Aria Thorne');
        $result->assertSee('Julian Mercer');
        $result->assertSee('Sophia Lin');
        $result->assertSee('<table class="data-table">');
        $result->assertSee('scope="col"');
    }

    public function testUsersPageReturnsOkAndDisplaysStaffRecords(): void
    {
        $result = $this->get('users');

        $result->assertOK();
        $result->assertSee('User Accounts');
        $result->assertSee('Total Users');
        $result->assertSee('admin.reyes');
        $result->assertSee('Carlos Reyes');
        $result->assertSee('Store Administrator');
        $result->assertSee('mgr.castro');
        $result->assertSee('Beatriz Castro');
        $result->assertSee('cashier.valdez');
        $result->assertSee('cashier.santos');
        $result->assertSee('inv.navarro');
        $result->assertSee('<table class="data-table">');
        $result->assertSee('scope="col"');
    }

    public function testUndefinedRouteThrowsPageNotFound(): void
    {
        $this->expectException(PageNotFoundException::class);
        $this->get('non-existent-pos-route-404');
    }
}
