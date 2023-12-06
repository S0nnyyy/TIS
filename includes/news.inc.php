<?php
// Start the session
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/config_session.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/check_session.inc.php';

check_session();

// TMDb API key
$api_key = '4fd25aa2f0bc394a193bdb476125f0f3';

// Get upcoming movies using TMDb API
$api_url = "https://api.themoviedb.org/3/movie/upcoming?api_key=$api_key";
$response = file_get_contents($api_url);
$data = json_decode($response, true);

// Store data in the session
$_SESSION['upcoming_movies'] = $data['results'];
?>
