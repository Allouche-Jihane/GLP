<?php

namespace GestionLpiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Announce
 *
 * @ORM\Table(name="announce")
 * @ORM\Entity(repositoryClass="GestionLpiBundle\Repository\AnnounceRepository")
 */
class Announce
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="announceText", type="text")
     */
    private $announceText;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="date")
     */
    private $dateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateModification", type="date")
     */
    private $dateModification;


    /**
     * @ORM\ManyToOne(targetEntity="Compte", inversedBy="announces")
     * @ORM\JoinColumn(name="id_compte", referencedColumnName="id")
     *
     */
    private $compte;
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Announce
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set announceText
     *
     * @param string $announceText
     * @return Announce
     */
    public function setAnnounceText($announceText)
    {
        $this->announceText = $announceText;

        return $this;
    }

    /**
     * Get announceText
     *
     * @return string 
     */
    public function getAnnounceText()
    {
        return $this->announceText;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Announce
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set dateModification
     *
     * @param \DateTime $dateModification
     * @return Announce
     */
    public function setDateModification($dateModification)
    {
        $this->dateModification = $dateModification;

        return $this;
    }

    /**
     * Get dateModification
     *
     * @return \DateTime 
     */
    public function getDateModification()
    {
        return $this->dateModification;
    }

    /**
     * Set compte
     *
     * @param \GestionLpiBundle\Entity\Compte $compte
     * @return Announce
     */
    public function setCompte(\GestionLpiBundle\Entity\Compte $compte = null)
    {
        $this->compte = $compte;

        return $this;
    }

    /**
     * Get compte
     *
     * @return \GestionLpiBundle\Entity\Compte 
     */
    public function getCompte()
    {
        return $this->compte;
    }
}
