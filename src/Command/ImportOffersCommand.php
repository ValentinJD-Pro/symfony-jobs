<?php


namespace App\Command;


use App\Entity\Job;
use App\Entity\Offer;
use App\Repository\OfferRepository;
use App\Services\PoleEmploiService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ImportOffersCommand extends Command
{
    protected static $defaultName = 'offer:import';

    private $poleEmploiService;
    private $offerRepository;
    private $em;

    public function __construct(PoleEmploiService $poleEmploiService, OfferRepository $offerRepository, EntityManagerInterface $em)
    {
        parent::__construct();
        $this->poleEmploiService = $poleEmploiService;
        $this->offerRepository = $offerRepository;
        $this->em = $em;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        //$em = $this->getContainer()->get('doctrine.orm.default_entity_manager');
        $jobRepo = $this->em->getRepository('App:Job');
        $offerRepo = $this->em->getRepository('App:Offer');
        $today = new \DateTime();

        $offers = $this->poleEmploiService->getOffers();

        $output->writeln([
            '============',
            ' Import jobs and offers in DB ...',
            '============',
        ]);
        $count = 0;
        foreach($offers as $company_ref => $company_jobs)
        {
            $output->writeln([
                '============',
                ' Company : '.$company_ref,
                '============',
            ]);
            foreach($company_jobs as $ref => $offerArr)
            {
                $count++;
                if(isset($offerArr['title']) && isset($offerArr['location'])){
                    $offer = $offerRepo->findOneBy(array('reference'=>$ref));
                    if(!$offer)$offer=new Offer();
                    $job = $jobRepo->findOneBy(array('name'=>$offerArr['title']));
                    if(!$job){
                        $job=new Job();
                        $job->setCode($offerArr['romeCode']);
                        $job->setName($offerArr['title']);
                        $job->setCreatedAt($today);
                        $job->setSticky($count%1000==0);
                        $this->em->persist($job);
                    }
                    $offer->setJob($job);
                    $offer->setReference($ref);
                    /* AUTRES CHAMPS */
                    $offer->setZipcode($offerArr['location']['codePostal']);

                    $offer->setDepartment(substr($offerArr['location']['codePostal'],0,2));
                    $offer->setCity($offerArr['location']['libelle']);
                    if(isset($offerArr['location']['latitude'])) {
                        $offer->setLatitude($offerArr['location']['latitude']);
                        $offer->setLongitude($offerArr['location']['longitude']);
                    }
                    $offer->setDescription($offerArr['description']);
                    $offer->setCreatedAt(new \DateTime($offerArr['date']));
                    // Précaution : les emails sont réels, remplacez ici par un email factice
                    $offer->setContactEmail('fake-email-'.$company_ref.'@lebonjob.com');
                    $offer->setCompany($company_ref);
                    $this->em->persist($offer);
                    if($count%50==0)
                    {
                        $this->em->flush();
                        $output->writeln([
                            $count.' ...'
                        ]);
                    }
                }
            }
        }
        $this->em->flush();
        $output->writeln([
            '============',
            ' Done ! ',
            '============',
        ]);


        return Command::SUCCESS;
    }

}