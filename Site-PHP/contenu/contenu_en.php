<?php
//entete
	define("accueil", "<a href=accueil.php?lang=en>Home</a>");
	define("menu", "Menu");
	define("preparer_entete", "<a href=preparer.php?lang=en>Prepare your visit</a>");
	define("projet_entete", "<a href=projet.php?lang=en>Our project");
	define("the_entete", "<a href=the.php?lang=en>The tea shop</a>");
	define("mecenat_entete", "<a href=mecenat.php?lang=en>Patronage</a>");
	define("avis_entete", "<a href=avis.php?lang=en>We are interested in your opinion</a>");
	define("connexion_entete", "<a href=connexion_en.php?lang=en>Connexion</a>");
	define("inscription_entete", "<a href=inscription_en.php?lang=en>Register</a>");
	define("quisommesnous_entete", "<a href=Savoir.php?lang=en>More about it</a>");
	define("monCompte", "My account");
	define("deco","<a href=PHP/deco.php?lang=en>Logout</a>");
	define("message","<a href=message.php?lang=en>Message</a>");

//contenu accueil
define("accueil_contenu",<<<accueil

		<div class="texte">
		<table border="1" cellpadding="8" cellspacing="0" width=1000 height=550><td>
		Welcome to the promotional website of the Tea Salon of the Champs-sur-Marne castle. <br>
		<p> The purpose of this site is to promote a project to create and include a Teashop in the garden of the castle of Champs sur Marne.
		This project, which is part of a national initiative called "Les cafés du patrimoine", aims to make the visit of the park, especially in summertime, more pleasant.</p>
		<a href="projetEn.html"><i>More about it</i></a>
		</td></table>
		</div>

		<div class="map">
			<hr>
			Castle of Champs-sur-Marne
			<br><br>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.241206540707!2d2.6019006160792144!3d48.85361067928686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e61020dc9a4367%3A0xc0ab72ed5661119f!2sCh%C3%A2teau%20de%20Champs-sur-Marne!5e0!3m2!1sen!2sus!4v1591462225612!5m2!1sen!2sus" width="950" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>

accueil
);

//contenu mecenat
define("mecenat_contenu",<<<mecenat


				<div class="titre"><h1 id="Haut">PATRONAGE</h1><br></div>

				<div class="cadreGm">
				<table border="0" cellspacing=0 cellpadding=0>
					<tr>
						<td>
							<img src="image/chateau1.png" alt="" height=200 width=400/>
						</td>
					</tr>
					<tr>
						<td bgcolor=#ea5c0d height=100>
							<a href="#entreprise"><center>Companies and foundations</center></a>
						</td>
				</tr>
				</table>
				</div>

				<div class="cadreDm">
				<table border="0" cellspacing=0 cellpadding=0>
					<tr>
						<td>
							<img src="image/Photo_serre.jpg" alt="" height=200 width=400/>
						</td>
					</tr>
					<tr>
						<td bgcolor=#ea5c0d height=100>
							<a href="#particuliers"><center>Private individual</center></a>
						</td>
				</tr>
				</table>
				</div>

				<div class="intro">
				<hr>
				<h2 id="entreprise">COMPANIES AND FOUNDATIONS</h2>
				<br>
				<img src="image/chateau1.png" alt="" height=500 width=1000/>
				<br>
				<br>
				<table border="1" cellpadding="8" cellspacing="0" width=1000><td>
			Your contribution can be useful to us and it can bring us lots of funds which will able us to carry out this project.<br>
			As major donors, to thank you for your participation, we could offer to engrave your company's name on the greenhouse or to associate it with exhibitions. <br>
			In addition, the tax situation linked to sponsorship allows you to benefit from a reduction in corporation tax up to 60% of the amount of the donation within the limit of 0.5% of the turnover before tax.
				</td></table>
			<br>
			<br>
			<br>

				<hr>
				<h2 id="particuliers">PRIVATE INDIVIDUAL</h2>
				<br>
				<img src="image/Photo_serre.jpg" alt="" height=500 width=1000/>
				<br>
				<br>
				<table border="1" cellpadding="8" cellspacing="0" width=1000><td>
					Your contribution is just as important to us, no donation is overlooked.<br>
					As a donor, to thank you, we would like to offer you the opportunity to own a bench in the castle park or to put your name alongside other donors on the greenhouse.<br>
					Furthermore, your donation allows you to benefit from a tax reduction equal to 66% of the sums paid, up to an annual limit of 20% of the taxable income.
				</td></table>

				<br><br>
				<a href="#Haut"><i><u>Back to the top of the page</i></u></a>
				</div>
mecenat
);

//contenu preparer sa visite
define("prepare_contenu", <<<prepare
							<div class="titre">
							<h1 id="Haut">PREPARE YOUR VISIT</h1><br>
							</div>

							<div class="cadreG">
							<table border="0" cellspacing=0 cellpadding=0>
								<tr>
									<td>
										<img src="image/chateau-video.png" alt="" height=200 width=400/>
									</td>
								</tr>
								<tr>
									<td bgcolor=#ea5c0d height=100>
										<a href="#decouvrir"><center>Discover the castle</center><a>
									</td>
							</tr>
							</table>
							</div>

							<div class="cadreM">
							<table border="0" cellspacing=0 cellpadding=0>
								<tr>
									<td>
										<img src="image/jardin.jpg" alt="" height=200 width=400/>
									</td>
								</tr>
								<tr>
									<td bgcolor=#ea5c0d height=100>
										<a href="#horaires"><center>Timetables and access</center></a>
									</td>
							</tr>
							</table>
							</div>

							<div class="cadreD">
							<table border="0" cellspacing=0 cellpadding=0>
								<tr>
									<td>
										<img src="image/chateau1.png" alt="" height=200 width=400/>
									</td>
								</tr>
								<tr>
									<td bgcolor=#ea5c0d height=100>
										<a href="#tarifs"><center>Prices</center></a>
									</td>
							</tr>
							</table>
							</div>

						  <div class="intro">
							<hr>
							<h2 id="decouvrir">DISCOVER THE CASTLE</h2>
				  		<br>
							<table border="1" cellpadding="8" cellspacing="0" width=1000><td>
							<iframe src="https://player.vimeo.com/video/336189401" height=500 width=950 frameborder="0" title="Rallye Champs [Application mobile]"></iframe>
							</td></table>
							<br>
							<br>
							<table border="1" cellpadding="8" cellspacing="0" width=1000><td>
							Discover the castle in video......
							</td></table>
						<br>
						<br>
						<br>

				  		<hr>
							<h2 id="horaires">TIMETABLES AND ACCESS</h2>
				  		<br>
							<img src="image/jardin.jpg" alt="" height=500 width=1000/>
							<br>
							<br>
							<table border="1" cellpadding="8" cellspacing="0" width=1000><td>
							TIMETABLES<br><br>
							<p>January 2 to May 26<br>
				        Open daily except Tuesday 10.00-12.15 / 13.30-17.00<br>
				          <br>
				            May 27 to October 1<br>
				            Open daily except Tuesday 10.00-12.15 / 13.30-18.00<br>
				          <br>
				            October 2 to December 31<br>
				            Open daily except Tuesday 10.00-12.15 / 13.30-17.00
							</td>
							<td>
							ACCESS<br><br>
							rerA blablablab
							</td>
							</table>
						<br>
						<br>
						<br>


						<hr>
						<H2 id="tarifs">PRICES</H2>
						<br>
						<img src="image/chateau1.png" alt="" height=500 width=1000/>
						<br>
						<br>
						<table border="1" cellpadding="8" cellspacing="0" width=1000><td>
						Adult: €8<br>
				    Age 18-25: €6.50<br>
				    Child (age 18-): Free
						</td></table>

						<br><br>
						<a href="#Haut"><i><u>Back to the top of the page</i></u></a>
		 </div>
prepare
);

//contenu projet

//contenu salon the
define("the_contenu", <<<the

							<div class="titre">
							<h1 id="Haut">THE TEA SHOP</h1><br>
							</div>

							<div class="cadreG">
							<table border="0" cellspacing=0 cellpadding=0>
								<tr>
									<td>
										<img src="image/chateau1.png" alt="" height=200 width=400/>
									</td>
								</tr>
								<tr>
									<td bgcolor=#ea5c0d height=100>
										<a href="#exceptionnel"><center>A place with a rich history</center><a>
									</td>
							</tr>
							</table>
							</div>

							<div class="cadreM">
							<table border="0" cellspacing=0 cellpadding=0>
								<tr>
									<td>
										<img src="image/serre.jpg" alt="" height=200 width=400/>
									</td>
								</tr>
								<tr>
									<td bgcolor=#ea5c0d height=100>
										<a href="#delaisse"><center>A neglected place to renovate</center></a>
									</td>
							</tr>
							</table>
							</div>

							<div class="cadreD">
							<table border="0" cellspacing=0 cellpadding=0>
								<tr>
									<td>
										<img src="image/the.jpg" alt="" height=200 width=400/>
									</td>
								</tr>
								<tr>
									<td bgcolor=#ea5c0d height=100>
										<a href="#nouveau"><center>A new place</center></a>
									</td>
							</tr>
							</table>
							</div>

						  <div class="intro">
							<hr>
							<h2 id="exceptionnel">A PLACE WUTH A RICH HISTORY</h2>
				  		<br>
							<img src="image/chateau1.png" alt="" height=500 width=1000/>
							<br>
							<br>
							<table border="1" cellpadding="8" cellspacing="0" width=1000><td>
							<img src="image/frise.jpg" alt="" height=500 width=1000/>
							</td></table>
						<br>
						<br>
						<br>

				  		<hr>
							<h2 id="delaisse">A NEGLECTED PLACE TO RENOVATE</h2>
				  		<br>
							<img src="image/serre.jpg" alt="" height=500 width=1000/>
							<br>
							<br>
							<table border="1" cellpadding="8" cellspacing="0" width=1000><td>
							After being destroyed by storms, the greenhouse was seriously damaged and could not be used anymore. The purpose of this project is to renovate it and give it a second life.<br>
						  Indeed, with the initiative “Les cafés du patrimoine”, the greenhouse will be faithfully renovate the greenhouse in order to keep its architecture meanwhile modernising it by transforming it in a Tea Salon.<br>
							Its renovation will add a resting place in the castle park which will make this place more attractive.
							</table>
						<br>
						<br>
						<br>


						<hr>
						<H2 id="nouveau">A NEW PLACE</H2>
						<br>
						<img src="image/the.jpg" alt="" width=1000 height=500/>
						<br>
						<br>
						<table border="1" cellpadding="8" cellspacing="0" width=1000>
						<td>
						The TeaShop will have two main vocations:<br>
						<br>
						The first is to offer visitors something to quench their thirst with a variety of drinks (of varying quality, ranging from good tea to soda) as well as something to fill a small gap: here we could imagine products ranging from pancakes to sandwiches.<br>
						<br>
						The second is to offer visitors something to rest with chairs, benches and other outdoor furniture: the greenhouses are in fact located in an area of the park that is very flowery in the summer with a large open area.
					<br>
						</td>
						</table>

						<br><br>
						<a href="#Haut"><i><u>Back to the top of the page</i></u></a>
		 </div>

the
);

//contenu avis
define("avis_contenu", <<<avis
	<div class="titre"><h1 id="Haut">YOUR OPINION</h1><br></div>

	<div class="cadreGm">
	<table border="0" cellspacing=0 cellpadding=0>
		<tr>
			<td>
				<img src="image/chateau1.png" alt="" height=200 width=400/>
			</td>
		</tr>
		<tr>
			<td bgcolor=#ea5c0d height=100>
				<a href="#questionnaire"><center>TeaShop Questionnaire</center></a>
			</td>
	</tr>
	</table>
	</div>

	<div class="cadreDm">
	<table border="0" cellspacing=0 cellpadding=0>
		<tr>
			<td>
				<img src="image/serre.jpg" alt="" height=200 width=400/>
			</td>
		</tr>
		<tr>
			<td bgcolor=#ea5c0d height=100>
				<a href="#commentaire"><center>Leave a comment</center></a>
			</td>
	</tr>
	</table>
	</div>

	<div class="intro">
	<hr>
	<h2 id="questionnaire">TEASHOP QUESTIONNAIRE</h2>
	<br>
	<img src="image/chateau1.png" alt="" height=500 width=1000/>
	<br>
	<br>
	<table border="1" cellpadding="8" cellspacing="0" width=1000><td>
		<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdpVsKAQOuLyYohQWkk7lsskZTI7665TpNhpYo6cvtr4iTW_A/viewform?embedded=true" width="950" height="1100" frameborder="0" marginheight="0" marginwidth="0">Chargement…</iframe>
	</td></table>
<br>
<br>
<br>

	<hr>
	<h2 id="commentaire">LEAVE A COMMENT</h2>
	<br>
	<img src="image/serre.jpg" alt="" height=500 width=1000/>
	<br>
	<br>
	<table border="1" cellpadding="8" cellspacing="0" width=1000><td>

	</td></table>

	<br><br>
	<a href="#Haut"><i><u>Back to the top of the page</i></u></a>
	</div>


avis
);

//En savoir plus contenu


?>
