<?php

namespace App\Controller;

use App\Entity\CpuUsage;
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
        return $this->json([
            'message' => 'go to create page'
        ]);
    }

    /**
     * @Route ("/addcpu", name="add_cpu_usage")
     */
    public function addCpu() {
        $output = shell_exec('cat /proc/net/dev');
        $output = explode("\n", $output);
        $output = array_filter($output, function ($value) {
            return($value !== NULL && $value !== FALSE && $value !== "");
        });
        $output = array_merge($output);

        $lo_rec = explode(" ", $output[2]);
        $lo_rec = array_filter($lo_rec, function ($value) {
            return($value !== NULL && $value !== FALSE && $value !== "" && $value !== "0");
        });
        $lo_rec = array_merge($lo_rec);

        $wl_rec = explode(" ", $output[4]);
        $wl_rec = array_filter($wl_rec, function ($value) {
            return($value !== NULL && $value !== FALSE && $value !== "" && $value !== "0");
        });
        $wl_rec = array_merge($wl_rec);

//        dump(date('d-m-y'));
        $em = $this->getDoctrine()->getManager();

        $cpuUsage = new CpuUsage();
        $cpuUsage->setLoRecvBytes($lo_rec[1]);
        $cpuUsage->setLoRecvPckts($lo_rec[2]);
        $cpuUsage->setLoTrnsBytes($lo_rec[3]);
        $cpuUsage->setLoTrbsPckts($lo_rec[4]);
        $cpuUsage->setWlp7s0RecvBytes($wl_rec[1]);
        $cpuUsage->setWlp7s0RecvPckts($wl_rec[2]);
        $cpuUsage->setWlp7s0RecvFrms($wl_rec[3]);
        $cpuUsage->setWlp7s0TrnsBytes($wl_rec[4]);
        $cpuUsage->setWlp7s0TrnsPckts($wl_rec[5]);
        $cpuUsage->setTime(\DateTime::createFromFormat('y-m-d',date('y-m-d')));
//        dump($cpuUsage);
        $em->persist($cpuUsage);
        $em->flush();

        header("refresh: 3;");

        return $this->json([
           'message' => 'cpu usage entered into db'
        ]);
    }
}
