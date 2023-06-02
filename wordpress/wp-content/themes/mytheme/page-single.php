<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<button class="luk">Tilbage</button>

<section class="indhold">

<article class="enkeltRet">

<h2></h2>

<img id="pic" src="" alt="">

<p class="text"></p>

</article>

</section>

</main><!-- #main -->

<script>



let ret;

window.addEventListener("DOMContentLoaded", getJson);



async function getJson () {

console.log("id er", <?php echo get_the_ID() ?>);

//hent en enkelt ret ud fra id'et



let jsonData = await fetch(`http://juliecp.dk/kea/babushka-wp/wordpress/wp-json/wp/v2/ret/<?php echo get_the_ID() ?>`);

ret = await jsonData.json();

visRet();

//vis data om retten

function visRet() {

document.querySelector("h2").textContent = ret.title.rendered;

document.querySelector(".text").innerHTML = ret.beskrivelse;

document.querySelector("#pic").src = ret.billede.guid;

}



document.querySelector(".luk").addEventListener("click", () => {

history.back();

//link tilbage til den foregående side på "luk" knappen

})



</script>
			
	</div><!-- #primary -->

<?php
get_footer();
