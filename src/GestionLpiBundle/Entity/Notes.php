<?php

namespace GestionLpiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notes
 *
 * @ORM\Table(name="notes")
 * @ORM\Entity(repositoryClass="GestionLpiBundle\Repository\NotesRepository")
 */
class Notes
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
     * @var float
     *
     * @ORM\Column(name="note", type="float")
     */
    private $note;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;




    /**
     * @ORM\ManyToOne(targetEntity="Matiere", inversedBy="notes")
     * @ORM\JoinColumn(name="id_matiere", referencedColumnName="id")
     *
     */
    private $matiere;

    /**
     * @ORM\ManyToOne(targetEntity="Etudiant", inversedBy="notes")
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
     * Set note
     *
     * @param float $note
     * @return Notes
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return float 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Notes
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
     * Set matiere
     *
     * @param \GestionLpiBundle\Entity\Matiere $matiere
     * @return Notes
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
     * @return Notes
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
