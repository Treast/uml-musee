<?php
/*
 * Oeuvre
 */
namespace Models;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="oeuvres")
 */
class Oeuvre implements \JsonSerializable {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $nom;
    /**
     * @ORM\Column(type="string")
     */
    private $artiste;
    /**
     * @ORM\Column(type="string")
     */
    private $annee;
    /**
     * @ORM\Column(type="string")
     */
    private $musee;
    /**
     * @ORM\Column(type="string")
     */
    private $description;
    /**
     * @ORM\Column(type="text")
     */
    private $photo;
    /**
     * @ORM\OneToMany(targetEntity="BaladeOeuvre", mappedBy="oeuvre")
     */
    private $balades;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->balades = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Oeuvre
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Oeuvre
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
     * Set artiste
     *
     * @param string $artiste
     *
     * @return Oeuvre
     */
    public function setArtiste($artiste)
    {
        $this->artiste = $artiste;

        return $this;
    }

    /**
     * Get artiste
     *
     * @return string
     */
    public function getArtiste()
    {
        return $this->artiste;
    }

    /**
     * Set annee
     *
     * @param string $annee
     *
     * @return Oeuvre
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return string
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set musee
     *
     * @param string $musee
     *
     * @return Oeuvre
     */
    public function setMusee($musee)
    {
        $this->musee = $musee;

        return $this;
    }

    /**
     * Get musee
     *
     * @return string
     */
    public function getMusee()
    {
        return $this->musee;
    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param mixed $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Oeuvre
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
     * Add balade
     *
     * @param \Models\BaladeOeuvre $balade
     *
     * @return Oeuvre
     */
    public function addBalade(\Models\BaladeOeuvre $balade)
    {
        $this->balades[] = $balade;

        return $this;
    }

    /**
     * Remove balade
     *
     * @param \Models\BaladeOeuvre $balade
     */
    public function removeBalade(\Models\BaladeOeuvre $balade)
    {
        $this->balades->removeElement($balade);
    }

    /**
     * Get balades
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBalades()
    {
        return $this->balades;
    }

    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
        return [
            'id' => $this->getId(),
            'nom' => $this->getNom(),
            'artiste' => $this->getArtiste(),
            'annee' => $this->getAnnee(),
            'musee' => $this->getMusee(),
            'description' => $this->getDescription(),
            'photo' => $this->getPhoto()
        ];
    }
}
