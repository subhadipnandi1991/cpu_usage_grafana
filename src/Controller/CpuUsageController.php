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
        $load = sys_getloadavg();                           // returns cpu load avg of last 1min,
                                                            // 5min and 15min respectively

        $cpuload = $load[0];                                // stores cpu load avg of last 1min

        $usageCPU = new UsageCPU();
        $usageCPU->setCpuUsage($cpuload);
        $usageCPU->setTime(\DateTime::createFromFormat('y-m-d',date('y-m-d')));
//        dump($usageCPU);

        $free = shell_exec('free');		        // execute command via shell and return
                                                            // the complete output as string

        $free = (string)trim($free);		                // removed all unnecessary space from right
                                                            // and left of the strings

        $free = explode("\n", $free);	            // strings divided into three in every newline
        $mem = explode(" ", $free[1]);             // strings divided in every space
        $mem = array_filter($mem, function ($value) {
            return ($value !== NULL &&
                $value !== false && $value !== "");		    // removed any null false or blank values
        });
        $mem = array_merge($mem);		                    // array merged into one array mem,
                                                            // all values are stored serially in array

        $memtotal = round(($mem[1]/1024)/1024, 2);		// total memory in GB

        $memused = round(($mem[2]/1024)/1024, 2);		    // used memory in GB

        $memfree = round(($mem[3]/1024)/1024, 2);	    	// free memory in GB

        $memshared = round(($mem[4]/1024)/1024, 2);		// shared memory in GB

        $memcached = round(($mem[5]/1024)/1024, 2);		// cached memory in GB

        $memavailable = round(($mem[6]/1024)/1024, 2);	// available memory in GB

        $memUsage = new UsageMemory();
        $memUsage->setTotalMemory($memtotal);
        $memUsage->setUsedMemory($memused);
        $memUsage->setFreeMemory($memfree);
        $memUsage->setSharedMemory($memshared);
        $memUsage->setCachedMemory($memcached);
        $memUsage->setAvailableMemory($memavailable);
        $memUsage->setTime(\DateTime::createFromFormat('y-m-d',date('y-m-d')));
//        dump($memUsage);

        $diskfree = round(((disk_free_space(".")
                    / 1024) /1024) / 1024 , 0.2);	        	// free disk space in GB

        $disktotal = round(((disk_total_space(".")
                    / 1024) /1024) / 1024 , 0.2);	            // total space in GB

        $diskused = round($disktotal - $diskfree);					// used space in GB

        $diskusage = round($diskused/$disktotal*100);				// disk usage in %

        $usageDisk = new UsageDisk();
        $usageDisk->setFreeDisk($diskfree);
        $usageDisk->setTotalDisk($disktotal);
        $usageDisk->setUsedDisk($diskused);
        $usageDisk->setDiskUsage($diskusage);
        $usageDisk->setTime(\DateTime::createFromFormat('y-m-d',date('y-m-d')));
//        dump($usageDisk);

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

        $em = $this->getDoctrine()->getManager();

        $netUsage = new UsageNetwork();
        $netUsage->setLoRecvBytes(round($lo_rec[1]/1024/1024,2));
        $netUsage->setLoRecvPckts($lo_rec[2]);
        $netUsage->setLoTrnsBytes(round($lo_rec[3]/1024/1024, 2));
        $netUsage->setLoTrnsPckts($lo_rec[4]);
        $netUsage->setWlp7s0RecvBytes(round($wl_rec[1]/1024/1024, 2));
        $netUsage->setWlp7s0RecvPckts($wl_rec[2]);
        $netUsage->setWlp7s0RecvFrms($wl_rec[3]);
        $netUsage->setWlp7s0TrnsBytes(round($wl_rec[4]/1024/1024, 2));
        $netUsage->setWlp7s0TrnsPckts($wl_rec[5]);
        $netUsage->setTime(\DateTime::createFromFormat('y-m-d',date('y-m-d')));
//        dump($netUsage);
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
