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
}
