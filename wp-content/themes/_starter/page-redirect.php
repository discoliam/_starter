<?php 
  // @package _starter
  // Template Name: Redirect
	get_header();

  wp_safe_redirect( home_url() );
  exit();