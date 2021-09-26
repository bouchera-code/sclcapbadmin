<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adherents
 *
 * @ORM\Table(name="adherents")
 * @ORM\Entity
 */
class Adherents
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_postale", type="string", length=255, nullable=false)
     */
    private $adressePostale;

    /**
     * @var int|null
     *
     * @ORM\Column(name="telephone", type="integer", nullable=true)
     */
    private $telephone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mail", type="string", length=255, nullable=true)
     */
    private $mail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="date", nullable=false)
     */
    private $dateNaissance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reglement", type="string", length=255, nullable=true)
     */
    private $reglement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="etatdossier", type="string", length=255, nullable=true)
     */
    private $etatdossier;

    /**
     * @var string|null
     *
     * @ORM\Column(name="certificat_medical", type="string", length=255, nullable=true)
     */
    private $certificatMedical;

    /**
     * @var string|null
     *
     * @ORM\Column(name="renouvellement_certificat", type="string", length=255, nullable=true)
     */
    private $renouvellementCertificat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="certificat_an_prec", type="string", length=255, nullable=true)
     */
    private $certificatAnPrec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="renouv_quest", type="string", length=255, nullable=true)
     */
    private $renouvQuest;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_paiement", type="date", nullable=true)
     */
    private $datePaiement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="moyen_paiement", type="string", length=255, nullable=true)
     */
    private $moyenPaiement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAdressePostale(): ?string
    {
        return $this->adressePostale;
    }

    public function setAdressePostale(string $adressePostale): self
    {
        $this->adressePostale = $adressePostale;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(?int $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(\DateTimeInterface $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getReglement(): ?string
    {
        return $this->reglement;
    }

    public function setReglement(?string $reglement): self
    {
        $this->reglement = $reglement;

        return $this;
    }

    public function getEtatdossier(): ?string
    {
        return $this->etatdossier;
    }

    public function setEtatdossier(?string $etatdossier): self
    {
        $this->etatdossier = $etatdossier;

        return $this;
    }

    public function getCertificatMedical(): ?string
    {
        return $this->certificatMedical;
    }

    public function setCertificatMedical(?string $certificatMedical): self
    {
        $this->certificatMedical = $certificatMedical;

        return $this;
    }

    public function getRenouvellementCertificat(): ?string
    {
        return $this->renouvellementCertificat;
    }

    public function setRenouvellementCertificat(?string $renouvellementCertificat): self
    {
        $this->renouvellementCertificat = $renouvellementCertificat;

        return $this;
    }

    public function getCertificatAnPrec(): ?string
    {
        return $this->certificatAnPrec;
    }

    public function setCertificatAnPrec(?string $certificatAnPrec): self
    {
        $this->certificatAnPrec = $certificatAnPrec;

        return $this;
    }

    public function getRenouvQuest(): ?string
    {
        return $this->renouvQuest;
    }

    public function setRenouvQuest(?string $renouvQuest): self
    {
        $this->renouvQuest = $renouvQuest;

        return $this;
    }

    public function getDatePaiement(): ?\DateTimeInterface
    {
        return $this->datePaiement;
    }

    public function setDatePaiement(?\DateTimeInterface $datePaiement): self
    {
        $this->datePaiement = $datePaiement;

        return $this;
    }

    public function getMoyenPaiement(): ?string
    {
        return $this->moyenPaiement;
    }

    public function setMoyenPaiement(?string $moyenPaiement): self
    {
        $this->moyenPaiement = $moyenPaiement;

        return $this;
    }


}
