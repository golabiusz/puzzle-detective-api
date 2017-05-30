<?php

namespace PuzzleDetective\PuzzleBundle\Tests\Functional;

use Symfony\Bundle\FrameworkBundle\Client;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

/**
 * Base class for all functional tests.
 *
 * @author Dariusz Gołąbek <golabiusz@gmail.com>
 * @todo add more assertions
 */
abstract class BaseTestCase extends WebTestCase
{
    /**
     * A Client instance.
     * @var Client
     */
    protected $client;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->client = static::createClient();
    }

    /**
     * Get request test.
     *
     * @param Response $response server response
     */
    protected function getRequestTest(Response $response): void
    {
        $this->responseStatusCodeTest($response, Response::HTTP_OK);
    }

    /**
     * Response status code test.
     *
     * @param Response $response server response
     * @param type $expected expected response status code
     */
    protected function responseStatusCodeTest(Response $response, $expected): void
    {
        $statusCode = $response->getStatusCode();
        $this->assertEquals(
            $expected,
            $statusCode,
            'Response code not equals '.$expected.'. (actual = '.$statusCode.')'
        );
    }
}
