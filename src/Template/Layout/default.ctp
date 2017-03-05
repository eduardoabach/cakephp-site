<?php
$this->extend('materializecss');

$this->assign('title', 'CakePHP Site - Project');

$this->assign('logo', 'CakePHP Site');

$this->start('menu');
 echo $this->element('menu');
$this->end();

$this->assign('footer-bio-title', 'Maicon Pinto');
$this->assign('footer-bio-description', 'Meu nome é Maicon Silva Pinto, 28 anos, casado, pai de duas meninas. Desenvolvedor Web, trabalho com sites e sistemas para web. CakePHP.');
$this->assign('footer-menu-one-title', '');
$this->assign('footer-menu-one', '');
$this->assign('footer-menu-two-title', '');
$this->assign('footer-menu-two', '');


echo $this->fetch('content');
