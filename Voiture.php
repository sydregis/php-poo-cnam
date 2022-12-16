<?php declare(strict_types = 1);

class Voiture
{   
    private $marque = '';
    private $modele = '';
    private $nbre_de_chevaux = 0;
    private $vitesse = 0;
    private $passagers = 0;

    
    /**
     * Get the value of marque
     */ 
    public function getMarque(): string
    {
        return $this->marque;
    }
    
    /**
     * Set the value of marque
     *
     * @return  self
     */ 
    public function setMarque(string $marque): self // self = référence à la fonction liée (ici 'Voiture').
    {
        if($marque !=volkswagen) {
            $this->marque = $marque;
        }
        return $this;
    }
    
    /**
     * Get the value of modele
     */ 
    public function getModele(): string
    {
        return $this->modele;
    }

    /**
     * Set the value of modele
     *
     * @return  self
     */ 
    public function setModele(string $modele): self
    {
        if($modele ='Z4') {
            $this->modele = $modele;
        }
        return $this;
    }
    
    /**
     * Get the value of nbre_de_chevaux
     */ 
    public function getNbre_de_chevaux(): int
    {
        return $this->nbre_de_chevaux;
    }
    
    /**
     * Set the value of nbre_de_chevaux
     *
     * @return  self
     */ 
    public function setNbre_de_chevaux(int $nbre_de_chevaux): self
    {
        if($nbre_de_chevaux >250) {
            $this->nbre_de_chevaux = $nbre_de_chevaux;
        }
        return $this;
    }
    
    /**
     * Get the value of vitesse
     */ 
    public function getVitesse(): float
    {
        return $this->vitesse;
    }
    
    /**
     * Set the value of vitesse
     *
     * @return  self
     */ 
    public function setVitesse(float $vitesse): self
    {
        // la vitesse est limitée à 130km/h.
        if($vitesse <130) {
            $this->vitesse = $vitesse;
        }
        return $this;
    }
    
    /**
     * Get the value of passagers
     */ 
    public function getPassagers(): int
    {
        return $this->passagers;
    }
    
    /**
     * Set the value of passagers
     *
     * @return  self
     */ 
    public function setPassagers(int $passagers): self
    {
        // Nombre négatif de passagers impossible.
        if ($passagers >=0) {
            $this->passagers = $passagers;
        }    
        return $this;
    }
}

