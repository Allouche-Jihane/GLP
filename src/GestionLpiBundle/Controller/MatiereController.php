<?php

namespace GestionLpiBundle\Controller;

use GestionLpiBundle\Entity\Matiere;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Matiere controller.
 *
 */
class MatiereController extends Controller
{
    /**
     * Lists all matiere entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $matieres = $em->getRepository('GestionLpiBundle:Matiere')->findAll();

        return $this->render('matiere/index.html.twig', array(
            'matieres' => $matieres,
        ));
    }

    /**
     * Creates a new matiere entity.
     *
     */
    public function newAction(Request $request)
    {
        $matiere = new Matiere();
        $form = $this->createForm('GestionLpiBundle\Form\MatiereType', $matiere);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($matiere);
            $em->flush();

            return $this->redirectToRoute('GestionMatiere_show', array('id' => $matiere->getId()));
        }

        return $this->render('matiere/new.html.twig', array(
            'matiere' => $matiere,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a matiere entity.
     *
     */
    public function showAction(Matiere $matiere)
    {
        $deleteForm = $this->createDeleteForm($matiere);

        return $this->render('matiere/show.html.twig', array(
            'matiere' => $matiere,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing matiere entity.
     *
     */
    public function editAction(Request $request, Matiere $matiere)
    {
        $deleteForm = $this->createDeleteForm($matiere);
        $editForm = $this->createForm('GestionLpiBundle\Form\MatiereType', $matiere);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('GestionMatiere_edit', array('id' => $matiere->getId()));
        }

        return $this->render('matiere/edit.html.twig', array(
            'matiere' => $matiere,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a matiere entity.
     *
     */
    public function deleteAction(Request $request, Matiere $matiere)
    {
        $form = $this->createDeleteForm($matiere);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($matiere);
            $em->flush();
        }

        return $this->redirectToRoute('GestionMatiere_index');
    }

    /**
     * Creates a form to delete a matiere entity.
     *
     * @param Matiere $matiere The matiere entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Matiere $matiere)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('GestionMatiere_delete', array('id' => $matiere->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
