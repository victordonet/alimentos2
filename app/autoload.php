<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';

$loader->add('VDG\\AulasMentor\\EjercicioBundle',__DIR__.'/../fuentes');

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;
