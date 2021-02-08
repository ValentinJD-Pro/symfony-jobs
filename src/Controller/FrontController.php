<?php


namespace App\Controller;


use App\Repository\OfferRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{

    /**
     * @Route("/", name="homepage")
     */
    public function index(): Response
    {
        return $this->render('front/index.html.twig', [
        ]);
    }

    /**
     * @Route("/offers", name="offers", methods="GET")
     */
    public function offers(OfferRepository $or): Response
    {
        return $this->render('front/offers.html.twig', [
            'offers'=>$or->findAll(),
        ]);
    }

    /**
     * @Route("/offers/department-{code}", name="offersDep", methods="GET")
     */
    public function offersDep(string $code, OfferRepository $or): Response
    {
        return $this->render('front/offers.html.twig', [
            'offers'=>$or->findBy(array('department' => $code)),
        ]);
    }

    /**
     * @Route("/offers/job-{id}", name="offersPerJob", methods="GET")
     */
    public function offersPerJob(int $id, OfferRepository $or): Response
    {
        return $this->render('front/offers.html.twig', [
            'offers'=>$or->findBy(array('job' => $id)), //id 4 par exemple propose 2 offres
        ]);
    }

    /**
     * @Route("/offers/{id}", name="offerDetails", methods="GET")
     */
    public function offerDetails(int $id, OfferRepository $or): Response
    {
        return $this->render('front/offerDetails.html.twig', [
            'offer'=>$or->findOneBy(array('id' => $id)),
        ]);
    }
}