<?php

namespace PuzzleDetective\PuzzleBundle\Tests\Functional\Controller\Api\V1;

use PuzzleDetective\PuzzleBundle\Tests\Functional\BaseTestCase;

/**
 * Puzzle Controller functional tests.
 *
 * @author Dariusz Gołąbek <golabiusz@gmail.com>
 */
class PuzzleControllerTest extends BaseTestCase
{
    /**
     * Get list test.
     */
    public function testGetList(): void
    {
        $this->requestJson('GET', '/api/v1/puzzle/puzzles');

        $this->getRequestTest($this->client->getResponse());
    }
}
