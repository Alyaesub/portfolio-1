<?php
$page = $_GET['page'] ?? 'accueil';

$sections = [
  'accueil',
  'a-propos',
  'competences',
  'experiences',
  'travaux',
  'offres',
  'parcours',
  'contact',
];

if (!in_array($page, $sections)) {
  $page = 'accueil';
}
