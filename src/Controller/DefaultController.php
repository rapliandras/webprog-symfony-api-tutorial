<?php


namespace App\Controller;


use App\Entity\Lyric;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{

    /**
     * @var ParameterBagInterface
     */
    private $parameterBag;
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    public function __construct(ParameterBagInterface $parameterBag, EntityManagerInterface $entityManager)
    {
        $this->parameterBag = $parameterBag;
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
        $song = $request->get("song");
//        var_dump($song); exit;

        /**
         * @var Lyric $lyrics
         */
        $lyrics = $this->entityManager->getRepository(Lyric::class)->findOneBy([
            "song" => $song,
//            "year" => $this->parameterBag->get("year")
        ]);

        $l = $lyrics instanceof Lyric ? $lyrics->getLyrics() : null;

        return new JsonResponse(["lyrics" => $l]);
    }
}