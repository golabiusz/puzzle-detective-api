<?php

namespace PuzzleDetective\PuzzleBundle\Tests\Unit\Interactor\Puzzle;

use PuzzleDetective\PuzzleBundle\Interactor\Puzzle\GetList;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

/**
 * Puzzle GetList interactor tests.
 *
 * @author Dariusz Gołąbek <golabiusz@gmail.com>
 */
class GetListTest extends KernelTestCase
{
    /**
     * Puzzle GetList interactor.
     * @var GetList
     */
    private $interactor;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        static::bootKernel();
        $this->interactor = static::$kernel->getContainer()->get('puzzle_detective.puzzle.interactor.puzzle.get_list');
    }

    /**
     * Execute method test.
     */
    public function testExecute(): void
    {
        $list = $this->interactor->execute();

        $this->assertTrue(is_array($list), 'Interactor does not returned an array');
    }
}
