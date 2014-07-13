<?php
class Article{
	private $_titre;
	private $_auteur;
	private $_description;
	private $_date;
	private $_contenu;
	private $_image;
	//Constructeur
	public function __construct($titre,$auteur,$description,$date,$contenu,$image)
	{
		$this->setTitre($titre);
		$this->setAuteur($auteur);
		$this->setDescription($description);
		$this->setDate($date);
		$this->setContenu($contenu);
		$this->setImage($image);
		
	}
	//modificateurs
	public function setTitre($titre)
	{
		$this->_titre = $titre;
	}
	public function setAuteur($auteur)
	{
		$this->_auteur = $auteur;
	}
	public function setDescription($description)
	{
		$this->_description = $description;
	}
	public function setDate($date)
	{
		$this->_date = $date;
	}
	public function setContenu($contenu)
	{
		$this->_contenu = $contenu;
	}
	public function setImage($image)
	{
		$this->_image = $image;
	}
	//Accesseurs
	public function getTitre()
	{
		return $this->_titre;
	}
	public function getAuteur($auteur)
	{
		return $this->_auteur;
	}
	public function getDescription()
	{
		return $this->_description;
	}
	public function getDate()
	{
		return $this->_date;
	}
	public function getContenu()
	{
		return $this->_contenu;
	}
	public function getImage()
	{
		return $this->_image;
	}
	//destructeur
	public function __destruct()
	{
	}
	}
?>