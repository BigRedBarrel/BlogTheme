<?php
/**
 * Template Name: Vanilla Forum Template
 *
 * A custom page template for a Vanilla Forum.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 */

get_header();
the_content();

?>

<script type="text/javascript" src="http://localhost:8888/vanilla/js/embed.js"></script>
<noscript>Please enable JavaScript to view the <a href="http://vanillaforums.com/?ref_noscript">discussions powered by Vanilla.</a></noscript>
<div class="vanilla-credit"><a class="vanilla-anchor" href="http://vanillaforums.com">Discussions by <span class="vanilla-logo">Vanilla</span></a></div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
