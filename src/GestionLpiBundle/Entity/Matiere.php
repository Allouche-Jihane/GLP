<?php

namespace GestionLpiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matiere
 *
 * @ORM\Table(name="matiere")
 * @ORM\Entity(repositoryClass="GestionLpiBundle\Repository\MatiereRepository")
 */
class Matiere
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
     * @ORM\Column(name="nomMatiere", type="string", length=255)
     */
    private $nomMatiere;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;



    /**
     * @ORM\OneToMany(targetEntity="Absence", mappedBy="matiere")
     *
     */
    private $absences;


    /**
     * @ORM\OneToMany(targetEntity="Notes", mappedBy="matiere")
     *
     */
    private $notes;


    /**
     * @ORM\ManyToOne(targetEntity="Module", inversedBy="matieres")
     * @ORM\JoinColumn(name="id_module", referencedColumnName="id")
     *
     */
    private $module;

    /**
     * @ORM\OneToOne(targetEntity="Compte", mappedBy="matiere")
     * @ORM\JoinColumn(name="compte_id", referencedColumnName="id")
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
     * Set nomMatiere
     *
     * @param string $nomMatiere
     * @return Matiere
     */
    public function setNomMatiere($nomMatiere)
    {
        $this->nomMatiere = $nomMatiere;

        return $this;
    }

    /**
     * Get nomMatiere
     *
     * @return string 
     */
    public function getNomMatiere()
    {
        return $this->nomMatiere;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Matiere
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
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
     * @return Matiere
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
     * @return Matiere
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

    /**
     * Set module
     *
     * @param \GestionLpiBundle\Entity\Module $module
     * @return Matiere
     */
    public function setModule(\GestionLpiBundle\Entity\Module $module = null)
    {
        $this->module = $module;

        return $this;
    }

    /**
     * Get module
     *
     * @return \GestionLpiBundle\Entity\Module 
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Set compte
     *
     * @param \GestionLpiBundle\Entity\Compte $compte
     * @return Matiere
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

    public function __toString()
    {
        return $this->getNomMatiere();
    }


}
