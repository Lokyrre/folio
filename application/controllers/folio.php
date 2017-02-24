<?php 

/**
* 
*/
class Folio extends CI_Controller
{
	private $bodyFR = array(
		'desc' => "Bonjour à vous cher visiteur, je suis <span class=\"important\">Jérémy Paroux</span>, développeur web et mobile et vous êtes sur mon <span class=\"important\">portfolio</span>. Je vous souhaite une agréable viste.", 
		'all' => "Tous",
		'other' => "Autre",
		'formName' => 'Votre Nom:',
		'formFirstName' => 'Votre Prénom:',
		'formEmail' => 'Votre Email:',
		'formMessage' => 'Votre Message:',
		'formSend' => 'Envoyer',
		'projects' => 'Projets',
		'skill' => 'Compétences',
		'sociaux' => 'Par réseau social: ',
		'mail' => 'Par mail: '
		);
	private $bodyEN = array(
		'desc' => "Hello dear visitor, I am <span class=\"important\">Jérémy Paroux</span>, web and mobile developer and you are on my <span class=\"important\">portfolio</span>. I wish you a pleasant visit", 
		'all' => "All",
		'other' => "Other",
		'formName' => 'Your Lastname:',
		'formFirstName' => 'Your Firstname:',
		'formEmail' => 'Your Email:',
		'formMessage' => 'Your Message:',
		'formSend' => 'Send',
		'projects' => 'Projects',
		'skill' => 'Skill',
		'sociaux' => 'By social media: ',
		'mail' => 'By mail: '
		);
	private $headFR = array(
		'info' => 'Informations',
		'projects' => 'Projets',
		'skill' => 'Compétences',
		'flag' => 'fr'
		);

	private $headEN = array(
		'info' => 'Informations',
		'projects' => 'Projects',
		'skill' => 'Skill',
		'flag' => 'en'
		);

	public function index()
	{
		$this->acceuil();
	}

	public function acceuil()
	{
		$body = $this->bodyFR;
		$head = $this->headFR;
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->view('folio/header',$head);
		$this->load->view('folio/body',$body);
		$this->load->view('folio/footer');
	}

	public function en(){
		$body = $this->bodyEN;
		$head = $this->headEN;
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->view('folio/header',$head);
		$this->load->view('folio/body',$body);
		$this->load->view('folio/footer');
	}
}
?>