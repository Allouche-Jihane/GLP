<?php

namespace GestionLpiBundle\Controller;

use GestionLpiBundle\Entity\Notes;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Note controller.
 *
 */
class NotesController extends Controller
{
    /**
     * Lists all note entities.
     *
     */
    public function indexAction()
    {

        $user = $this->get('security.token_storage')->getToken()->getUser();
        $userIdMatiere = ($user->getMatiere()!= null) ? $user->getMatiere()->getId() : 0;
        $em = $this->getDoctrine()->getManager();

        $notes = $em->getRepository('GestionLpiBundle:Notes')->findAll();

        return $this->render('notes/index.html.twig', array(
            'notes' => $notes,
            'id_mat'=>$userIdMatiere

        ));
    }

    /**
     * Creates a new note entity.
     *
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $noteStudiant = $request->request->get("noteStudiant");
        $note1 = $request->request->get("note1");
        $Desc = $request->request->get("Desc");
        $matiereId = $request->request->get("matiere");
        $submeted = $request->request->get("submited");

        if($noteStudiant!=null and sizeof($noteStudiant > 0))
        {
            $note = new Notes();
            $etRepo  = $em->getRepository('GestionLpiBundle:Etudiant');
            $matRepo = $em->getRepository('GestionLpiBundle:Matiere');

            foreach (array_combine($note1, $noteStudiant) as $nt => $id) {
                $note = new  Notes();
                $note->setEtudiant($etRepo->find($id));
                $note->setMatiere($matRepo->find($matiereId));
                $note->setDescription($Desc);
                $note->setNote($nt);
                $em->persist($note);
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

        return $this->render('notes/ajouterNotes.html.twig',array('etudiands'=>$etudiands,
            'matieres'=>$matieres));

    }

    /**
     * Finds and displays a note entity.
     *
     */
    public function showAction(Notes $note)
    {
        $deleteForm = $this->createDeleteForm($note);

        return $this->render('notes/show.html.twig', array(
            'note' => $note,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing note entity.
     *
     */
    public function editAction(Request $request, Notes $note)
    {
        $deleteForm = $this->createDeleteForm($note);
        $editForm = $this->createForm('GestionLpiBundle\Form\NotesType', $note);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('gestionNotes_edit', array('id' => $note->getId()));
        }

        return $this->render('notes/edit.html.twig', array(
            'note' => $note,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a note entity.
     *
     */
    public function deleteAction(Request $request, Notes $note)
    {
        $form = $this->createDeleteForm($note);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($note);
            $em->flush();
        }

        return $this->redirectToRoute('gestionNotes_index');
    }

    /**
     * Creates a form to delete a note entity.
     *
     * @param Notes $note The note entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Notes $note)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('gestionNotes_delete', array('id' => $note->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
