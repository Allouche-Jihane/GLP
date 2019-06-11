<?php

namespace GestionLpiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use CMEN\GoogleChartsBundle\CMENGoogleChartsBundle;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\BarChart;
use Symfony\Component\Validator\Constraints\Count;


class DefaultController extends Controller
{
    /**
     * Lists all compte entities.
     * @Template()
     */
    public function indexAction(Request $request)
    {
        $session = $request->getSession();

        // get the login error if there is one
        $error = $session->get(SecurityContextInterface::AUTHENTICATION_ERROR);
        $session->remove(SecurityContextInterface::AUTHENTICATION_ERROR);
        $announces=$this->getDoctrine()->getRepository('GestionLpiBundle:Announce')->reverse();
        return array(
            // last username entered by the user
            'last_username' => $session->get(SecurityContextInterface::LAST_USERNAME),
            'error'         => $error,
            'announces' => $announces,
        );
    }
    /* no route*/
    public function loginCheckAction()
    {

    }
    /* no route*/
    public function logoutAction()
    {

    }


    public function homeAction()
    {
        $absences=$this->getDoctrine()->getRepository('GestionLpiBundle:Absence')->absenceCount();
        $chart = new \CMEN\GoogleChartsBundle\GoogleCharts\Charts\Material\ColumnChart();

        foreach ( $absences as $absence)
        {
            $array[] = array($absence['nom'],$absence['countABS']);
            $arrayinversed=array_reverse($absences);
        }



        $chart->getData()->setArrayToDataTable($arrayinversed,true);
        $chart->getOptions()->getChart()
            ->setTitle('Absence')
            ->setSubtitle('2016/2017');
        $chart->getOptions()
            ->setBars('vertical')
            ->setHeight(400)
            ->setWidth(900)
            ->setColors(['#1b9e77', '#d95f02', '#7570b3'])
            ->getVAxis()
            ->setFormat('decimal');

        $abs=$this->getDoctrine()->getRepository('GestionLpiBundle:Absence')->absenceHouresCount();
        $charti = new \CMEN\GoogleChartsBundle\GoogleCharts\Charts\Material\ColumnChart();

        foreach ( $abs as $absence)
        {
            $array[] = array($absence['nom'],$absence['sumABS']);
            $arrayinversedo=array_reverse($abs);
        }



        $charti->getData()->setArrayToDataTable($arrayinversedo,true);
        $charti->getOptions()->getChart()
            ->setTitle('Absence par heures')
            ->setSubtitle('2016/2017');
        $charti->getOptions()
            ->setBars('horizontal')
            ->setHeight(400)
            ->setWidth(900)
            ->setColors(['#FE0101', '#d95f02', '#7570b3'])
            ->getVAxis()
            ->setFormat('decimal');


        return $this->render('GestionLpiBundle:Default:home.html.twig', array('bar' => $chart, 'baro'=>$charti));



    }


}
