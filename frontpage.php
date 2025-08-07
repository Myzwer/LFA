<?php
/**
 * Template Name: Custom - Front Page
 *
 * The Frontpage of the PreLaunch Theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Farmers_Only
 * @author Josh Forrester <josh@onefortyfivedesign.com>
 * @version 1.0.0
 */

get_header(); ?>

<?php get_template_part('components/headers/_hero'); ?>

<?php get_template_part('components/layouts/_highlight'); ?>

<?php get_template_part('components/layouts/_info'); ?>

<?php get_template_part('components/layouts/_clients'); ?>

<?php get_template_part('components/layouts/_process'); ?>

<?php get_template_part('components/layouts/_impact'); ?>

<?php get_template_part('components/layouts/_side-image'); ?>

<?php get_template_part('components/layouts/_faq'); ?>

<?php
get_footer();