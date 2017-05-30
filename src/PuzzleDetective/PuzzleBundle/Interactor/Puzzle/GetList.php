<?php

namespace PuzzleDetective\PuzzleBundle\Interactor\Puzzle;

use PuzzleDetective\PuzzleBundle\Repository\PuzzleRepository;

/**
 * Retrieve and returns puzzles list.
 *
 * @author Dariusz Gołąbek <golabiusz@gmail.com>
 */
class GetList
{
    /**
     * Puzzle repository.
     * @var PuzzleRepository
     */
    protected $repository;

    /**
     * Interactor constructor.
     *
     * @param PuzzleRepository $puzzleRepository puzzle repository
     */
    public function __construct(PuzzleRepository $puzzleRepository)
    {
        $this->repository = $puzzleRepository;
    }

    /**
     * Retrieve and returns puzzles list.
     *
     * @return array
     */
    public function execute(): array
    {
        return $this->repository->findAll();
    }
}
