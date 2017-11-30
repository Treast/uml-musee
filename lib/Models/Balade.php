<?php
/*
 * Balade
 */
namespace Models;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="balades")
 */
class Balade {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="integer", name="flaneur_id")
     */
    private $flaneurId;
    /**
     * @ORM\Column(type="integer", name="atmosphere_id")
     */
    private $atmosphereId;
    /**
     * @ORM\OneToMany(targetEntity="BaladeOeuvre",  mappedBy="balade")
     */
    private $oeuvres;
    /**
     * @ORM\Column(type="string")
     */
    private $nom;
    /**
     * @ORM\Column(type="string")
     */
    private $description;
    /**
     * @ORM\Column(type="datetime")
     */
    private $dateRealisation;

    /**
     * @ORM\OneToOne(targetEntity="Flaneur")
     * @ORM\JoinColumn(name="flaneur_id", referencedColumnName="id")
     */
    private $flaneur;

    /**
     * @ORM\OneToOne(targetEntity="Atmosphere")
     * @ORM\JoinColumn(name="atmosphere_id", referencedColumnName="id")
     */
    private $atmosphere;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->oeuvres = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Balade
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

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
     * Set flaneurId
     *
     * @param integer $flaneurId
     *
     * @return Balade
     */
    public function setFlaneurId($flaneurId)
    {
        $this->flaneurId = $flaneurId;

        return $this;
    }

    /**
     * Get flaneurId
     *
     * @return integer
     */
    public function getFlaneurId()
    {
        return $this->flaneurId;
    }

    /**
     * Set atmosphereId
     *
     * @param integer $atmosphereId
     *
     * @return Balade
     */
    public function setAtmosphereId($atmosphereId)
    {
        $this->atmosphereId = $atmosphereId;

        return $this;
    }

    /**
     * Get atmosphereId
     *
     * @return integer
     */
    public function getAtmosphereId()
    {
        return $this->atmosphereId;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Balade
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
     * Set description
     *
     * @param string $description
     *
     * @return Balade
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
     * Set dateRealisation
     *
     * @param \DateTime $dateRealisation
     *
     * @return Balade
     */
    public function setDateRealisation($dateRealisation)
    {
        $this->dateRealisation = $dateRealisation;

        return $this;
    }

    /**
     * Get dateRealisation
     *
     * @return \DateTime
     */
    public function getDateRealisation()
    {
        return $this->dateRealisation;
    }

    /**
     * Add oeuvre
     *
     * @param \Models\BaladeOeuvre $oeuvre
     *
     * @return Balade
     */
    public function addOeuvre(\Models\BaladeOeuvre $oeuvre)
    {
        $this->oeuvres[] = $oeuvre;

        return $this;
    }

    /**
     * Remove oeuvre
     *
     * @param \Models\BaladeOeuvre $oeuvre
     */
    public function removeOeuvre(\Models\BaladeOeuvre $oeuvre)
    {
        $this->oeuvres->removeElement($oeuvre);
    }

    /**
     * Get oeuvres
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOeuvres()
    {
        return $this->oeuvres;
    }

    /**
     * Set flaneur
     *
     * @param \Models\Flaneur $flaneur
     *
     * @return Balade
     */
    public function setFlaneur(\Models\Flaneur $flaneur = null)
    {
        $this->flaneur = $flaneur;

        return $this;
    }

    /**
     * Get flaneur
     *
     * @return \Models\Flaneur
     */
    public function getFlaneur()
    {
        return $this->flaneur;
    }

    /**
     * Set atmosphere
     *
     * @param \Models\Atmosphere $atmosphere
     *
     * @return Balade
     */
    public function setAtmosphere(\Models\Atmosphere $atmosphere = null)
    {
        $this->atmosphere = $atmosphere;

        return $this;
    }

    /**
     * Get atmosphere
     *
     * @return \Models\Atmosphere
     */
    public function getAtmosphere()
    {
        return $this->atmosphere;
    }
}
