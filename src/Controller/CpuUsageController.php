<?php

namespace App\Controller;

use App\Entity\CpuUsage;
use App\Entity\UsageCPU;
use App\Entity\UsageDisk;
use App\Entity\UsageMemory;
use App\Entity\UsageNetwork;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CpuUsageController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(): Response
    {
        return $this->redirect($this->generateUrl('add_cpu_usage'));
    }

    /**
     * @Route ("/addcpu", name="add_cpu_usage")
     *
     */
    public function addCpu() {
        $usagedetails = new \App\Services\UsageDetails();
        $usageCPU = $usagedetails->cpuUsage();
//        dump($usageCPU);

        $memUsage = $usagedetails->memUsage();
//        dump($memUsage);

        $usageDisk = $usagedetails->diskUsage();
//        dump($usageDisk);

        $netUsage = $usagedetails->netUsage();
//        dump($netUsage);

        $em = $this->getDoctrine()->getManager();

        $em->persist($usageCPU);
        $em->persist($usageDisk);
        $em->persist($memUsage);
        $em->persist($netUsage);
        $em->flush();

        header("refresh: 3;");

        return $this->json([
           'message' => 'cpu usage entered into db'
        ]);
    }
}
