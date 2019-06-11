<?php

namespace GestionLpiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etudiant
 *
 * @ORM\Table(name="etudiant")
 * @ORM\Entity(repositoryClass="GestionLpiBundle\Repository\EtudiantRepository")
 */
class Etudiant
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="cne", type="string", length=255)
     */
    private $cne;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissence", type="date")
     */
    private $dateNaissence;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateInscription", type="date")
     */
    private $dateInscription;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="text")
     */
    private $adresse;



    /**
     * @ORM\OneToMany(targetEntity="Absence", mappedBy="etudiant")
     *
     */
    private $absences;

    /**
     * @ORM\OneToMany(targetEntity="Notes", mappedBy="etudiant")
     *
     */
    private $notes;

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
     * Set nom
     *
     * @param string $nom
     * @return Etudiant
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Etudiant
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set cne
     *
     * @param string $cne
     * @return Etudiant
     */
    public function setCne($cne)
    {
        $this->cne = $cne;

        return $this;
    }

    /**
     * Get cne
     *
     * @return string 
     */
    public function getCne()
    {
        return $this->cne;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Etudiant
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set dateNaissence
     *
     * @param \DateTime $dateNaissence
     * @return Etudiant
     */
    public function setDateNaissence($dateNaissence)
    {
        $this->dateNaissence = $dateNaissence;

        return $this;
    }

    /**
     * Get dateNaissence
     *
     * @return \DateTime 
     */
    public function getDateNaissence()
    {
        return $this->dateNaissence;
    }

    /**
     * Set dateInscription
     *
     * @param \DateTime $dateInscription
     * @return Etudiant
     */
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    /**
     * Get dateInscription
     *
     * @return \DateTime 
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Etudiant
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->absences = new \Doctrine\Common\Collections\ArrayCollection();
        $this->notes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add absences
     *
     * @param \GestionLpiBundle\Entity\Absence $absences
     * @return Etudiant
     */
    public function addAbsence(\GestionLpiBundle\Entity\Absence $absences)
    {
        $this->absences[] = $absences;

        return $this;
    }

    /**
     * Remove absences
     *
     * @param \GestionLpiBundle\Entity\Absence $absences
     */
    public function removeAbsence(\GestionLpiBundle\Entity\Absence $absences)
    {
        $this->absences->removeElement($absences);
    }

    /**
     * Get absences
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAbsences()
    {
        return $this->absences;
    }

    /**
     * Add notes
     *
     * @param \GestionLpiBundle\Entity\Notes $notes
     * @return Etudiant
     */
    public function addNote(\GestionLpiBundle\Entity\Notes $notes)
    {
        $this->notes[] = $notes;

        return $this;
    }

    /**
     * Remove notes
     *
     * @param \GestionLpiBundle\Entity\Notes $notes
     */
    public function removeNote(\GestionLpiBundle\Entity\Notes $notes)
    {
        $this->notes->removeElement($notes);
    }

    /**
     * Get notes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNotes()
    {
        return $this->notes;
    }

    public function __toString()
    {
        return $this->getNom();
    }

}
