<?php

namespace simplon\entities;

class Article {
    private $id_person;
    private $id_article;
    private $titre;
    private $contenu;
    private $commentaire;

    public function __construct(string $titre,
                                string $contenu,
                                string $commentaire,
                                int $id_article=null) {
        $this->id_article = $id_article;
        $this->titre = $titre;
        $this->contenu = $contenu;
        $this->commentaire = $commentaire;
    }
    

    /**
     * Get the value of id
     */ 
    public function getId():int
    {
        return $this->id_article;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId(int $id)
    {
        $this->id = $id_article;

        return $this;
    }

    /**
     * Get the value of titre
     */ 
    public function getTitre():string
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre(string $titre)
    {
        $this->titre = $titre;

        return $this;
    }
     
        /**
     * Get the value of contenu
     */ 
    public function getContenu():string
    {
        return $this->contenu;
    }
    
    /**
     * Set the value of contenu
     *
     * @return  self
     */ 
    public function setContenu(string $contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }



    


        /**
     * Get the value of commentaire
     */ 
    public function getCommentaire()
    {
       
        return $this->commentaire;
    }

        /**
     * Set the value of commentaire
     *
     * @return  self
     */ 
    public function setCommentaire(string $commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }




}
