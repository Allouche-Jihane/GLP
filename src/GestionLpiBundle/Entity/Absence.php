<?php

namespace GestionLpiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Absence
 *
 * @ORM\Table(name="absence")
 * @ORM\Entity(repositoryClass="GestionLpiBundle\Repository\AbsenceRepository")
 */
class Absence
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateAbsence", type="datetime")
     */
    private $dateAbsence;

    /**
     * @var int
     *
     * @ORM\Column(name="NombreHeurs", type="integer")
     */
    private $nombreHeurs;




    /**
     * @ORM\ManyToOne(targetEntity="Matiere", inversedBy="absences")
     * @ORM\JoinColumn(name="id_matiere", referencedColumnName="id")
     *
     */
    private $matiere;

    /**
     * @ORM\ManyToOne(targetEntity="Etudiant", inversedBy="absences")
     * @ORM\JoinColumn(name="id_etudiant", referencedColumnName="id")
     *
     */
    private $etudiant;

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
     * Set dateAbsence
     *
     * @param \DateTime $dateAbsence
     * @return Absence
     */
    public function setDateAbsence($dateAbsence)
    {
        $this->dateAbsence = $dateAbsence;

        return $this;
    }

    /**
     * Get dateAbsence
     *
     * @return \DateTime 
     */
    public function getDateAbsence()
    {
        return $this->dateAbsence;
    }

    /**
     * Set nombreHeurs
     *
     * @param integer $nombreHeurs
     * @return Absence
     */
    public function setNombreHeurs($nombreHeurs)
    {
        $this->nombreHeurs = $nombreHeurs;

        return $this;
    }

    /**
     * Get nombreHeurs
     *
     * @return integer 
     */
    public function getNombreHeurs()
    {
        return $this->nombreHeurs;
    }

    /**
     * Set matiere
     *
     * @param \GestionLpiBundle\Entity\Matiere $matiere
     * @return Absence
     */
    public function setMatiere(\GestionLpiBundle\Entity\Matiere $matiere = null)
    {
        $this->matiere = $matiere;

        return $this;
    }

    /**
     * Get matiere
     *
     * @return \GestionLpiBundle\Entity\Matiere 
     */
    public function getMatiere()
    {
        return $this->matiere;
    }

    /**
     * Set etudiant
     *
     * @param \GestionLpiBundle\Entity\Etudiant $etudiant
     * @return Absence
     */
    public function setEtudiant(\GestionLpiBundle\Entity\Etudiant $etudiant = null)
    {
        $this->etudiant = $etudiant;

        return $this;
    }

    /**
     * Get etudiant
     *
     * @return \GestionLpiBundle\Entity\Etudiant 
     */
    public function getEtudiant()
    {
        return $this->etudiant;
    }

}
