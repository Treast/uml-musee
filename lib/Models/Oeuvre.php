<?php
/*
 * Oeuvre
 */
namespace Models;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="oeuvre")
 */
class Oeuvre {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
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
}
