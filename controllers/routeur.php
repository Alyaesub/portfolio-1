<?php
$page = $_GET['page'] ?? 'accueil';

$sections = [
  'accueil',
  'a-propos',
  'competences',
  'diplomes',
  'experiences',
  'projets',
  'contact',
  'blog'
];

if (!in_array($page, $sections)) {
  $page = 'accueil';
}
