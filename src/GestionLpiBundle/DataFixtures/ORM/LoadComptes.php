<?php

namespace GestionLpiBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GestionLpiBundle\Entity\Compte;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Validator\Constraints\Date;

class LoadComptes implements FixtureInterface, ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    public function load(ObjectManager $manager)
    {
        $compte=new Compte();
        $compte->setLogin('admin');
        $compte->setPassword(self::encodePassword($compte,'admin'));
        $compte->setNom('maarad');
        $compte->setPrenom('walid');
        $compte->setDateCreation(new \DateTime('Tomorrow'));
        $compte->setDateModification(new \DateTime('Tomorrow'));
        $compte->setEmail('email@gmail.com');
        $compte->setStatus("admin");
        $compte->setRoles(array('ROLE_ADMIN'));
        $manager->persist($compte);

        // the queries aren't done until now
        $manager->flush();

        $user=new Compte();
        $user->setLogin('user');
        $user->setPassword(self::encodePassword($compte,'user'));
        $user->setNom('Maachou');
        $user->setPrenom('Oussama');
        $user->setDateCreation(new \DateTime('Tomorrow'));
        $user->setDateModification(new \DateTime('Tomorrow'));
        $user->setEmail('email@gmail.com');
        $user->setStatus("user");
        $user->setRoles(array('ROLE_ADMIN'));
        $manager->persist($user);

        // the queries aren't done until now
        $manager->flush();

    }

    private function encodePassword(Compte $compte, $plainPassword)
    {
        $encoder = $this->container->get('security.encoder_factory')
            ->getEncoder($compte)
        ;

        return $encoder->encodePassword($plainPassword, $compte->getSalt());
    }

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
}
