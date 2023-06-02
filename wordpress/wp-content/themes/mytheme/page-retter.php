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

<style>
	* {

box-sizing: border-box;
margin: 0;
padding: 0;
text-decoration: none;

}



section {

display: grid;
grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
gap: 10px;
grid-column: 2/3; /* Placerer vores indhold i midten af vores main grid */

}



article {

padding: 10px;
border: 10px orange solid;
border-radius: 5px;
border-radius: 0px;
cursor: pointer;

}



article img {

border-radius: 5px;

}



img {

max-width: 100%;

height: auto;

}



h2{

font-size: 2rem;

}
</style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
	<h1 id="overskrift">Retter</h1>
	<section id="ret-oversigt"></section>
	</main><!-- #main -->
	<template>
		<article>
			<h2></h2>
			<img src="" alt="">
			<p></p>
		</article>
</template>
	<script>
	console.log("henterMitScript");

let retter = [];
const liste = document.querySelector("#ret-oversigt");
const skabelon = document.querySelector("template");
let filterRet = "alle";

window.addEventListener("DOMContentLoaded", start);

function start() {
	getJson();
}

const url = "http://juliecp.dk/kea/babushka-wp/wordpress/wp-json/wp/v2/ret?per_page=100";
async function getJson() {
console.log("getJson")
let response = await fetch(url);
retter = await response.json();
visRetter();
}



function visRetter () {
console.log(retter);
retter.forEach(ret => {
	const klon = skabelon.cloneNode(true).content;
	klon.querySelector("h2").textContent = ret.title.rendered;
	klon.querySelector("img").src = ret.billede.guid;
	klon.querySelector("p").innerHTML = ret.pris + "kr";
	klon.querySelector("article").addEventListener("click", () => {
		location.href = ret.link;
	})
	liste.appendChild(klon);

})
}

getJson();
</script>

		
	</div><!-- #primary -->

<?php
get_footer();
