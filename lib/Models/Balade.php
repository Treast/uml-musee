<?php
/*
 * Balade
 */
namespace Models;

/*
 * Balade
 */
class Balade {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="integer")
     */
    private $flaneurId;
/* @var int $atmosphereId  */
    private $atmosphereId;
/* @var int[] $oeuvres  */
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
}
