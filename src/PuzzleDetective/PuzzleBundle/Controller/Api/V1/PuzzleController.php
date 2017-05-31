<?php

namespace PuzzleDetective\PuzzleBundle\Controller\Api\V1;

use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\NamePrefix;
use FOS\RestBundle\Controller\Annotations\Prefix;
use FOS\RestBundle\Controller\Annotations\Version;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use PuzzleDetective\PuzzleBundle\Entity\Puzzle;
use PuzzleDetective\PuzzleBundle\Interactor\Puzzle\GetList;
use Symfony\Component\HttpFoundation\Request;

/**
 * REST Puzzle Controller.
 *
 * @author Dariusz Gołąbek <golabiusz@gmail.com>
 *
 * @NamePrefix("api_v1_puzzle_")
 * @Prefix("api/v1/puzzle")
 * @View(serializerGroups={"Default"})
 * @Version({"1.0"})
 */
class PuzzleController extends FOSRestController implements ClassResourceInterface
{
    /**
     * @ApiDoc(
     *   description="Get puzzles list",
     *   section="Puzzle Puzzles",
     *   output="array",
     *   statusCodes={
     *     200="Returned when success"
     *   }
     * )
     *
     * @param GetList $getListInteractor interactor
     * @return Puzzle[]
     */
    public function cgetAction(GetList $getListInteractor): array
    {
        return $getListInteractor->execute();
    }
}
