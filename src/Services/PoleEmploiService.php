<?php


namespace App\Services;


use App\Repository\OfferRepository;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class PoleEmploiService
{
    private $client;
    private $offer;
    private $poleEmploiServiceUrl;

    public function __construct(HttpClientInterface $client,OfferRepository $offerRepository, string $poleEmploiServiceUrl)
    {
        $this->client = $client;
        $this->offer = $offerRepository;
        $this->poleEmploiServiceUrl = $poleEmploiServiceUrl;
    }

    public function getOffers()
    {
        return json_decode(
            $this->client
                ->request('GET', $this->poleEmploiServiceUrl . '?method=offers&limit=15000')
                ->getContent(),
            true
        );
    }
}