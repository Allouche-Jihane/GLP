<?php
/**
 * Created by PhpStorm.
 * User: walsa
 * Date: 11/05/2017
 * Time: 11:26
 */

namespace GestionLpiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use GestionLpiBundle\Entity\Compte;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use GestionLpiBundle\Form\RegisterFormType;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Doctrine\Common\DataFixtures\FixtureInterface;

class ajouterCompteController extends Controller
{
    /**
     * @Route("/ajouterCompte", name="ajouterCompte")
     * @Template
     */
    public function ajouterCompteAction(Request $request)
    {


        $form = $this->createFormBuilder()
            ->add('login','text')
            ->add('password','repeated', array('type'=>'password'))
            ->add('nom','text')
            ->add('prenom','text')
            ->add('email','email')
            ->getform();

        $form->handleRequest($request);
        if ($form->isValid()) {
            $data = $form->getData();
            $user =new compte();
            $user->setLogin($data['login']);
            $user->setPassword($this->encodePassword($user, $data['password']));
            $user->setNom($data['nom']);
            $user->setPrenom($data['prenom']);
            $user->setEmail($data['email']);
            $user->setStatus('user');
            $user ->setDateCreation(new \DateTime('now'));
            $user ->setDateModification(new \DateTime('now'));



            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();


        }



        return array('form' => $form->createView());
    }


    private function encodePassword(Compte $user, $plainPassword)
    {
        $encoder = $this->container->get('security.encoder_factory')
            ->getEncoder($user);

        return $encoder->encodePassword($plainPassword, $user->getSalt());
    }


}