<?php

namespace GestionLpiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Module
 *
 * @ORM\Table(name="module")
 * @ORM\Entity(repositoryClass="GestionLpiBundle\Repository\ModuleRepository")
 */
class Module
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
     * @ORM\Column(name="nomModule", type="string", length=255)
     */
    private $nomModule;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;


    /**
     * @ORM\OneToMany(targetEntity="Matiere", mappedBy="module")
     *
     */
    private $matieres;

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
     * Set nomModule
     *
     * @param string $nomModule
     * @return Module
     */
    public function setNomModule($nomModule)
    {
        $this->nomModule = $nomModule;

        return $this;
    }

    /**
     * Get nomModule
     *
     * @return string 
     */
    public function getNomModule()
    {
        return $this->nomModule;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Module
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
        $this->matieres = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add matieres
     *
     * @param \GestionLpiBundle\Entity\Matiere $matieres
     * @return Module
     */
    public function addMatiere(\GestionLpiBundle\Entity\Matiere $matieres)
    {
        $this->matieres[] = $matieres;

        return $this;
    }

    /**
     * Remove matieres
     *
     * @param \GestionLpiBundle\Entity\Matiere $matieres
     */
    public function removeMatiere(\GestionLpiBundle\Entity\Matiere $matieres)
    {
        $this->matieres->removeElement($matieres);
    }

    /**
     * Get matieres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMatieres()
    {
        return $this->matieres;
    }
}
