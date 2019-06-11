<?php

namespace GestionLpiBundle\Controller;

use GestionLpiBundle\Entity\Compte;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Compte controller.
 *
 */
class CompteController extends Controller
{
    /**
     * Lists all compte entities.
     *
     */
    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();
        //$cmpt = $em->getRepository('GestionLpiBundle:Compte')->AnnocesByCompte(12);
        //dump($cmpt);die;
        $comptes = $em->getRepository('GestionLpiBundle:Compte')->findAll();

        return $this->render('compte/index.html.twig', array(
            'comptes' => $comptes,
        ));
    }

    /**
     * Creates a new compte entity.
     *
     */
    public function newAction(Request $request)
    {
        $compte = new Compte();
        $form = $this->createForm('GestionLpiBundle\Form\CompteType', $compte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($compte);
            $em->flush();

            return $this->redirectToRoute('GestionCompte_show', array('id' => $compte->getId()));
        }

        return $this->render('compte/new.html.twig', array(
            'compte' => $compte,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a compte entity.
     *
     */
    public function showAction(Compte $compte)
    {
        $deleteForm = $this->createDeleteForm($compte);

        return $this->render('compte/show.html.twig', array(
            'compte' => $compte,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing compte entity.
     *
     */
    public function editAction(Request $request, Compte $compte)
    {
        $deleteForm = $this->createDeleteForm($compte);
        $editForm = $this->createForm('GestionLpiBundle\Form\CompteType', $compte);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $plainTextPassword = $compte->getPassword();
            $encoded = self::encodePassword($compte,$plainTextPassword);
            $compte->setPassword($encoded);
            dump($encoded);
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('GestionCompte_edit', array('id' => $compte->getId()));
        }

        return $this->render('compte/edit.html.twig', array(
            'compte' => $compte,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a compte entity.
     *
     */
    public function deleteAction(Request $request, Compte $compte)
    {
        $form = $this->createDeleteForm($compte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($compte);
            $em->flush();
        }

        return $this->redirectToRoute('GestionCompte_index');
    }

    /**
     * Creates a form to delete a compte entity.
     *
     * @param Compte $compte The compte entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Compte $compte)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('GestionCompte_delete', array('id' => $compte->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    private function encodePassword(Compte $user, $plainPassword)
    {
        $encoder = $this->container->get('security.encoder_factory')
            ->getEncoder($user);

        return $encoder->encodePassword($plainPassword, $user->getSalt());
    }
}
