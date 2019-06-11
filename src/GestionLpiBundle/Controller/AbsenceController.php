<?php

namespace GestionLpiBundle\Controller;

use Doctrine\Common\Util\Debug;
use GestionLpiBundle\Entity\Absence;
use GestionLpiBundle\Entity\Etudiant;
use GestionLpiBundle\Entity\Matiere;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;


/**
 * Absence controller.
 *
 */
class AbsenceController extends Controller
{

    /**
     * Lists all absence entities.
     *
     */
    public function indexAction()
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $userIdMatiere = ($user->getMatiere()!= null) ? $user->getMatiere()->getId() : 0;
        $em = $this->getDoctrine()->getManager();

        $absences = $em->getRepository('GestionLpiBundle:Absence')->findAll();


        return $this->render('absence/index.html.twig', array(
            'absences' => $absences,
            'id_mat'=>$userIdMatiere
        ));
    }


    /**
     * Creates a new absence entity.
     *
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $abcentSturents = $request->request->get("abcentSturent");
        $nbrH = $request->request->get("nbrH");
        $dataAbcence = $request->request->get("date");
        $matiereId = $request->request->get("matiere");
        $date = ($dataAbcence!= null) ? new \DateTime($dataAbcence):  new \DateTime();
        $submeted = $request->request->get("submited");

        if($abcentSturents!=null and sizeof($abcentSturents > 0))
        {
            dump($dataAbcence);
            $abs = new  Absence();
            $etRepo  = $em->getRepository('GestionLpiBundle:Etudiant');
            $matRepo = $em->getRepository('GestionLpiBundle:Matiere');

            foreach ($abcentSturents as $id)
            {
                $abs = new  Absence();
                $abs->setEtudiant($etRepo->find($id));
                $abs->setMatiere($matRepo->find($matiereId));
                $abs->setDateAbsence($date);
                $abs->setNombreHeurs($nbrH);
                $em->persist($abs);
            }
            $em->flush();
            return new JsonResponse('success');
        }
        elseif ($submeted)
        {
            return new JsonResponse('error');
        }
        $etudiands    = $em->getRepository('GestionLpiBundle:Etudiant')->findAll();
        $matieres     = $em->getRepository('GestionLpiBundle:Matiere')->findAll();

        return $this->render('absence/ajouterAbcence.html.twig',array('etudiands'=>$etudiands,
                                                                            'date'=>$date,
                                                                            'matieres'=>$matieres));
    }

    /**
     * Finds and displays a absence entity.
     *
     */
    public function showAction(Absence $absence)
    {
        $deleteForm = $this->createDeleteForm($absence);

        return $this->render('absence/show.html.twig', array(
            'absence' => $absence,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing absence entity.
     *
     */
    public function editAction(Request $request, Absence $absence)
    {
        $deleteForm = $this->createDeleteForm($absence);
        $editForm = $this->createForm('GestionLpiBundle\Form\AbsenceType', $absence);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('gestionAbsence_edit', array('id' => $absence->getId()));
        }

        return $this->render('absence/edit.html.twig', array(
            'absence' => $absence,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a absence entity.
     *
     */
    public function deleteAction(Request $request, Absence $absence)
    {
        $form = $this->createDeleteForm($absence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($absence);
            $em->flush();
        }

        return $this->redirectToRoute('gestionAbsence_index');
    }

    /**
     * Creates a form to delete a absence entity.
     *
     * @param Absence $absence The absence entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Absence $absence)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('gestionAbsence_delete', array('id' => $absence->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }






}
