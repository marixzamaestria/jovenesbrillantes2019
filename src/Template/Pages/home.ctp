<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'Jovenes Brillantes 2019';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('home.css') ?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
</head>
<body class="home">

<header class="row">
    <div class="header-image"><?= $this->Html->image('http://www.cedem.info/item/images/NCLP635BSET1.jpg') ?></div>
    <div class="header-title">
        <h1>BIENVENIDOS A JOVENES BRILLANTES 2019  </h1>
    </div>
</header>

<div class="row">
    <div class="columns large-12">
        <div class="ctp-warning alert text-center">
            <p>ALUMNOS DE CONCERTISTA EVA CHAVEZ ATKINSON</p>
        </div>
        <div id="url-rewriting-warning" class="alert url-rewriting">
            <ul>
                <li class="bullet problem">
                    URL rewriting is not properly configured on your server.<br />
                    1) <a target="_blank" href="https://book.cakephp.org/3.0/en/installation.html#url-rewriting">Help me configure it</a><br />
                    2) <a target="_blank" href="https://book.cakephp.org/3.0/en/development/configuration.html#general-configuration">I don't / can't use URL rewriting</a>
                </li>
            </ul>
        </div>
        <?php Debugger::checkSecurityKeys(); ?>
    </div>
</div>

<div class="row">
    <div class="columns large-6">
        <h4>INSTRUMENTOS</h4>
        <ul>
        
            <li class="bullet success">PIANO DE PARED </li>
        
            <li class="bullet problem">PIANO DE COLA </li>
        
        
            <li class="bullet success">PIANO SEMI COLA </li>
        
            
    </div>
    <div class="columns large-6">
        <h4>ALUMNOS</h4>
        <ul>
            <li class="bullet success">JOVENES DE MAS DE 16 AÑOS</li>
        
            <li class="bullet problem">JOVENES DE 16 A 12 AÑOS.</li>
        

        
            <li class="bullet success">JOVENES DE MENOS DE 12 AÑOS</li>
        
            
</div>

<div class="row">
    <div class="columns large-6">
        <h4>EXPERIENCIA</h4>
        <?php
        try {
            $connection = ConnectionManager::get('default');
            $connected = $connection->connect();
        } catch (Exception $connectionError) {
            $connected = false;
            $errorMsg = $connectionError->getMessage();
            if (method_exists($connectionError, 'getAttributes')) :
                $attributes = $connectionError->getAttributes();
                if (isset($errorMsg['message'])) :
                    $errorMsg .= '<br />' . $attributes['message'];
                endif;
            endif;
        }
        ?>
        <ul>
        
            <li class="bullet success">CONCURSOS</li>
        
            <li class="bullet problem">PRESENTACIONES<br /></li>
        
        </ul>
    </div>
    </div>
    <hr />
</div>

<div class="row">
        <ul>
            <li class="bullet book"><a target="_blank" href="https://www.youtube.com/watch?v=vq-6edilOM8">chopin</a></li>
            <li class="bullet book"><a target="_blank" href="https://www.youtube.com/watch?v=hLGuH6YZ28o">Mozart</a></li>
        </ul>
    </div>
</div>

<div class="row">
    <div class="columns large-12 text-center">
        <h3 class="more">y Mucho más</h3>
        <p>
            </p>
    </div>
    <hr/>
</div>

<div class="row">
            </li>
        </ul>
    </div>
        </ul>
    </div>
    <div class="columns large-4">
        <i class="icon training">s</i>
            </li>
        </ul>
    </div>
</div>

</body>
</html>
