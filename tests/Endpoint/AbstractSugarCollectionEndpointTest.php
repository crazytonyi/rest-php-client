<?php
/**
 * ©[2022] SugarCRM Inc.  Licensed by SugarCRM under the Apache 2.0 license.
 */

namespace Sugarcrm\REST\Tests\Endpoint;

use Sugarcrm\REST\Tests\Stubs\Endpoint\SugarCollectionEndpoint;

/**
 * Class AbstractSugarCollectionEndpointTest
 * @package Sugarcrm\REST\Tests\Endpoint
 * @coversDefaultClass Sugarcrm\REST\Endpoint\Abstracts\AbstractSugarCollectionEndpoint
 * @group AbstractSugarCollectionEndpointTest
 */
class AbstractSugarCollectionEndpointTest extends \PHPUnit\Framework\TestCase {

    public static function setUpBeforeClass(): void {
        //Add Setup for static properties here
    }

    public static function tearDownAfterClass(): void {
        //Add Tear Down for static properties here
    }

    public function setUp(): void {
        parent::setUp();
    }

    public function tearDown(): void {
        parent::tearDown();
    }

    /**
     * @covers ::setOffset
     * @covers ::getOffset
     */
    public function testSetOffset() {
        $Endpoint = new SugarCollectionEndpoint();
        $this->assertEquals(0, $Endpoint->getOffset());
        $this->assertEquals($Endpoint, $Endpoint->setOffset(10));
        $this->assertEquals(10, $Endpoint->getOffset());
    }

    /**
     * @covers ::setLimit
     * @covers ::getLimit
     */
    public function testSetLimit() {
        $Endpoint = new SugarCollectionEndpoint();
        $this->assertEquals(20, $Endpoint->getLimit());
        $this->assertEquals($Endpoint, $Endpoint->setLimit(10));
        $this->assertEquals(10, $Endpoint->getLimit());
    }

    /**
     * @covers ::configurePayload
     */
    public function testConfigurePayload() {
        $Endpoint = new SugarCollectionEndpoint();
        $Reflection = new \ReflectionClass('Sugarcrm\REST\Tests\Stubs\Endpoint\SugarCollectionEndpoint');
        $configurePayload = $Reflection->getMethod('configurePayload');
        $configurePayload->setAccessible(true);
        $this->assertEquals(array(
            'offset' => 0,
            'max_num' => 20
        ), $configurePayload->invoke($Endpoint)->toArray());
    }

    /**
     * @covers ::nextPage
     * @covers ::prevPage
     * @covers ::parseResponse
     * @covers ::
     * @return void
     */
    public function testPagination()
    {

    }
}
