<?php
	class main{
		function __construct(){
			$this->smarty = new Smarty();
			$this->smarty->setTemplateDir('template');
			$this->smarty->setCompileDir('compile');
		}
	}
?>