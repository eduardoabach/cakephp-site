<?php
$this->extend('MaterializeCSS.Common/home');

$this->assign('title', 'CakePHP Site - Project');

$this->assign('logo', 'CakePHP Site');

$this->start('menu');
 echo $this->element('menu');
$this->end();

$this->assign('section-banner-title', 'Site Project');
$this->assign('section-banner-subtitle', 'My CakePHP Site Project');
$this->assign('section-banner-button-link', 'http://maiconpinto.com.br/cakephp-site');
$this->assign('section-banner-button-text', 'Demo');
$this->assign('section-banner-background-url', 'background1.jpg');
$this->assign('section-banner-background-alt', 'Unsplashed background img 1');

$this->assign('section-icons-block-left-icon', 'flash_on');
$this->assign('section-icons-block-left-title', 'Speeds up development');
$this->assign('section-icons-block-left-description', 'We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.');

$this->assign('section-icons-block-middle-icon', 'group');
$this->assign('section-icons-block-middle-title', 'Experience Focused');
$this->assign('section-icons-block-middle-description', 'By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.');

$this->assign('section-icons-block-right-icon', 'settings');
$this->assign('section-icons-block-right-title', 'Easy to work with');
$this->assign('section-icons-block-right-description', 'We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.');

$this->assign('section-banner-two-title', 'A modern responsive front-end framework based on Material Design');
$this->assign('section-banner-two-background-url', 'background2.jpg');
$this->assign('section-banner-two-background-alt', 'Unsplashed background img 2');

$this->assign('section-contact-title', 'Contact us');
$this->assign('section-contact-content', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;');

$this->assign('section-banner-three-title', 'A modern responsive front-end framework based on Material Design');
$this->assign('section-banner-three-background-url', 'background3.jpg');
$this->assign('section-banner-three-background-alt', 'Unsplashed background img 3');

$this->assign('footer-bio-title', 'Maicon Pinto');
$this->assign('footer-bio-description', 'Meu nome é Maicon Silva Pinto, 28 anos, casado, pai de duas meninas. Desenvolvedor Web, trabalho com sites e sistemas para web. CakePHP.');
$this->assign('footer-menu-one-title', '');
$this->assign('footer-menu-one', '');
$this->assign('footer-menu-two-title', '');
$this->assign('footer-menu-two', '');
