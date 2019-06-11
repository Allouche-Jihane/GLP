<?php

namespace GestionLpiBundle\Controller;

use GestionLpiBundle\Entity\Announce;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Announce controller.
 *
 */
class AnnounceController extends Controller
{
    /**
     * Lists all announce entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $announces = $em->getRepository('GestionLpiBundle:Announce')->reverse();


        return $this->render('announce/index.html.twig', array(
            'announces' => $announces,
        ));
    }

    /**
     * Creates a new announce entity.
     *
     */
    public function newAction(Request $request)
    {
        $announce = new Announce();

        $form = $this->createForm('GestionLpiBundle\Form\AnnounceType', $announce);
        $form->handleRequest($request);
        $announce ->setDateCreation(new \DateTime('now'));
        $announce ->setDateModification(new \DateTime('now'));
        $user = $this->get('security.context')->getToken()->getUser();
        $announce->setCompte($user);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($announce);
            $em->flush();

            return $this->redirectToRoute('announce_show', array('id' => $announce->getId()));
        }

        return $this->render('announce/new.html.twig', array(
            'announce' => $announce,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a announce entity.
     *
     */
    public function showAction(Announce $announce)
    {
        $deleteForm = $this->createDeleteForm($announce);

        return $this->render('announce/show.html.twig', array(
            'announce' => $announce,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing announce entity.
     *
     */
    public function editAction(Request $request, Announce $announce)
    {
        $deleteForm = $this->createDeleteForm($announce);
        $editForm = $this->createForm('GestionLpiBundle\Form\AnnounceType', $announce);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('announce_edit', array('id' => $announce->getId()));
        }

        return $this->render('announce/edit.html.twig', array(
            'announce' => $announce,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a announce entity.
     *
     */
    public function deleteAction(Request $request, Announce $announce)
    {
        $form = $this->createDeleteForm($announce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($announce);
            $em->flush();
        }

        return $this->redirectToRoute('announce_index');
    }

    /**
     * Creates a form to delete a announce entity.
     *
     * @param Announce $announce The announce entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Announce $announce)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('announce_delete', array('id' => $announce->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
