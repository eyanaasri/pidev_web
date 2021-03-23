<?php

namespace App\Entity;

use App\Repository\OffreRepository;
use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OffreRepository::class)
 */
class Offre
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NomEntreprise;

    /**
     * @ORM\Column(type="integer")
     */
    private $Salaire;

    /**
     * @ORM\Column(type="text")
     */
    private $Description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Localisation;

    /**
     * @ORM\Column(type="integer")
     */
    private $NombreHeure;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $TypeContrat;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NiveauEtude;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Experience;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Langue;

    /**
     * @ORM\Column(type="date")
     */
    private $DateExpiration;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Tel;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Email;

    /**
     * @ORM\ManyToOne(targetEntity=Categorie::class, inversedBy="offres")
     */
    private $NomCategorie;

    /**
     * @ORM\ManyToMany(targetEntity=Users::class)
     */
    private $Id_Offre;

    public function __construct()
    {
        $this->Id_Offre = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEntreprise(): ?string
    {
        return $this->NomEntreprise;
    }

    public function setNomEntreprise(string $NomEntreprise): self
    {
        $this->NomEntreprise = $NomEntreprise;

        return $this;
    }

    public function getSalaire(): ?int
    {
        return $this->Salaire;
    }

    public function setSalaire(int $Salaire): self
    {
        $this->Salaire = $Salaire;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getLocalisation(): ?string
    {
        return $this->Localisation;
    }

    public function setLocalisation(string $Localisation): self
    {
        $this->Localisation = $Localisation;

        return $this;
    }

    public function getNombreHeure(): ?int
    {
        return $this->NombreHeure;
    }

    public function setNombreHeure(int $NombreHeure): self
    {
        $this->NombreHeure = $NombreHeure;

        return $this;
    }

    public function getTypeContrat(): ?string
    {
        return $this->TypeContrat;
    }

    public function setTypeContrat(string $TypeContrat): self
    {
        $this->TypeContrat = $TypeContrat;

        return $this;
    }

    public function getNiveauEtude(): ?string
    {
        return $this->NiveauEtude;
    }

    public function setNiveauEtude(string $NiveauEtude): self
    {
        $this->NiveauEtude = $NiveauEtude;

        return $this;
    }

    public function getExperience(): ?int
    {
        return $this->Experience;
    }

    public function setExperience(?int $Experience): self
    {
        $this->Experience = $Experience;

        return $this;
    }

    public function getLangue(): ?string
    {
        return $this->Langue;
    }

    public function setLangue(string $Langue): self
    {
        $this->Langue = $Langue;

        return $this;
    }

    public function getDateExpiration(): ?DateTimeInterface
    {
        return $this->DateExpiration;
    }

    public function setDateExpiration(DateTimeInterface $DateExpiration): self
    {
        $this->DateExpiration = $DateExpiration;

        return $this;
    }

    public function getTel(): ?int
    {
        return $this->Tel;
    }

    public function setTel(?int $Tel): self
    {
        $this->Tel = $Tel;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(?string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getNomCategorie(): ?Categorie
    {
        return $this->NomCategorie;
    }

    public function setNomCategorie(?Categorie $NomCategorie): self
    {
        $this->NomCategorie = $NomCategorie;

        return $this;
    }

    /**
     * @return Collection|Users[]
     */
    public function getIdOffre(): Collection
    {
        return $this->Id_Offre;
    }

    public function addIdOffre(Users $idOffre): self
    {
        if (!$this->Id_Offre->contains($idOffre)) {
            $this->Id_Offre[] = $idOffre;
        }

        return $this;
    }

    public function removeIdOffre(Users $idOffre): self
    {
        $this->Id_Offre->removeElement($idOffre);

        return $this;
    }
}
