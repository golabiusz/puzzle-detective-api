<?php

namespace PuzzleDetective\PuzzleBundle\Tests\Functional;

use Symfony\Bundle\FrameworkBundle\Client;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

/**
 * Base class for all functional tests.
 *
 * @author Dariusz Gołąbek <golabiusz@gmail.com>
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
     * Calls a URI with json accept and content-type headers.
     *
     * @param string $method        The request method
     * @param string $uri           The URI to fetch
     * @param array  $parameters    The Request parameters
     * @param array  $files         The files
     *
     * @return Crawler
     */
    protected function requestJson(string $method, string $uri, array $parameters = [], array $files = []): Crawler
    {
        return $this->client->request($method, $uri, $parameters, $files, [
            'HTTP_ACCEPT' => 'application/json',
            'HTTP_CONTENT_TYPE' => 'application/json'
        ]);
    }

    /**
     * Get request test.
     *
     * @param Response $response server response
     */
    protected function getRequestTest(Response $response): void
    {
        $this->checkStatusCode($response, Response::HTTP_OK);
        $this->hasJsonHeader($response->headers);
        $this->assertJson($response->getContent(), "Odpowiedź nie jest poprawnym formatem JSON");
    }

    /**
     * Checks status code.
     *
     * @param Response $response server response
     * @param int      $expected expected response status code
     */
    protected function checkStatusCode(Response $response, $expected): void
    {
        $statusCode = $response->getStatusCode();
        $this->assertEquals(
            $expected,
            $statusCode,
            'Response code not equals '.$expected.'. (actual = '.$statusCode.')'
        );
    }

    /**
     * Sprawdzamy czy w nagłówkach odpowiedzi serwera otrzymaliśmy JSONowy content type.
     *
     * @param ResponseHeaderBag $headerBag nagłówki odpowiedzi
     */
    public function hasJsonHeader(ResponseHeaderBag $headerBag)
    {
        $this->assertTrue(
            $headerBag->contains(
                'Content-Type',
                'application/json'
            ),
            'Otrzymano Content-Type: '.$headerBag->get('Content-Type')
        );
    }
}
