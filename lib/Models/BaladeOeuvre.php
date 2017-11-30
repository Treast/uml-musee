<?php
/*
 * Balade
 */
namespace Models;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="balades_oeuvres")
 */
class BaladeOeuvre {
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Oeuvre", inversedBy="balades")
     */
    private $oeuvre;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Balade", inversedBy="oeuvres")
     */
    private $balade;

    /**
     * @ORM\Column(type="integer")
     */
    private $ordre;

    /**
     * Set ordre
     *
     * @param integer $ordre
     *
     * @return BaladeOeuvre
     */
    public function setOrdre($ordre)
    {
        $this->ordre = $ordre;

        return $this;
    }

    /**
     * Get ordre
     *
     * @return integer
     */
    public function getOrdre()
    {
        return $this->ordre;
    }

    /**
     * Set oeuvre
     *
     * @param \Models\Oeuvre $oeuvre
     *
     * @return BaladeOeuvre
     */
    public function setOeuvre(\Models\Oeuvre $oeuvre)
    {
        $this->oeuvre = $oeuvre;

        return $this;
    }

    /**
     * Get oeuvre
     *
     * @return \Models\Oeuvre
     */
    public function getOeuvre()
    {
        return $this->oeuvre;
    }

    /**
     * Set balade
     *
     * @param \Models\Balade $balade
     *
     * @return BaladeOeuvre
     */
    public function setBalade(\Models\Balade $balade)
    {
        $this->balade = $balade;

        return $this;
    }

    /**
     * Get balade
     *
     * @return \Models\Balade
     */
    public function getBalade()
    {
        return $this->balade;
    }
}
