<?php
//entete
	define("accueil", "<a href=accueil.php?lang=en>Home</a>");
	define("menu", "Menu");
	define("notreProjet", "Our project");
	define("preparer_entete", "<a href=preparer.php?lang=en>Prepare your visit</a>");
	define("presentation_entete", "<a href=presentation.php?lang=en>Presentation</a>");
	define("description_entete", "<a href=description.php?lang=en>Description</a>");
	define("the_entete", "<a href=the.php?lang=en>The tea shop</a>");
	define("mecenat_entete", "<a href=mecenat.php?lang=en>Support our project</a>");
	define("avis_entete", "<a href=avis.php?lang=en>We are interested in your opinion</a>");
	define("connexion_entete", "<a href=connexion_en.php?lang=en>Connexion</a>");
	define("inscription_entete", "<a href=inscription_en.php?lang=en>Register</a>");
	define("quisommesnous_entete", "<a href=savoir.php?lang=en>About us</a>");
	define("monCompte", "<a href=membre.php?lang=en>My account</a>");
	define("deco","<a href=PHP/deco.php?lang=en>Logout</a>");
	define("message","<a href=message.php?lang=en>Message</a>");
	define("gestionCompte","<a href=membreAdmin.php?lang=en>Members</a>");


//Pied de page

	define("mentionLegale","<a href=mentions.php?lang=en>Mentions Légales</a>");
//contenu accueil
define("accueil_contenu",<<<accueil

		<div class='accueil'>
		<hr>
		<h2>Welcome</h2><br>
		<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
		Welcome to the promotional website of the Tea Salon of the Champs-sur-Marne castle. <br>
		<p> The main goal of this web site is to promote a project to create a tea room in the garden of the Château de Champs sur Marne. This project, part of a national initiative called "Heritage Cafés", aims to make visiting the park more enjoyable, especially in the summer.</p>
		<a href="presentation.php?lang=en"><i>More about it</i></a>
		</td></table>
		<br>
		<br>
		<br>
			<hr>
			<h2>Château de Champs-sur-Marne</h2>
			<br>
			<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
			"The Château de Champs-sur-Marne is characteristic of the residences of leisure built in the countryside in the 18th century, giving rise to a new style of living.  It was constructed between 1703 and 1708 by the architects Pierre Bullet and Jean-Baptiste Bullet de Chamblain, on request from Louis XIV's financier, Paul Poisson de Bourvallais. The château contains sumptuous rococo and Chinoiserie decor painted in the mid-18th century by Christophe Huet."
			<br><br>-<a href=http://www.chateau-champs-sur-marne.fr/en/><i>Web site of the Champs-sur-Marne castle</i></a>
			</td></table>
			<br>
			<br>
			<br>
				<hr>
				<h2>Localisation</h2>
				<br>
				<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.241206540707!2d2.6019006160792144!3d48.85361067928686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e61020dc9a4367%3A0xc0ab72ed5661119f!2sCh%C3%A2teau%20de%20Champs-sur-Marne!5e0!3m2!1sen!2sus!4v1591462225612!5m2!1sen!2sus" width=100% height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				</td></table>
		</div>

		<div class='onglet'>
		<hr>
		<h3 style="color:#ea5c0d;">We are interested in your opinion</h3>
		<br>
		<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
		Answer <b><a href=avis.php>here</a></b> to a questionnaire about the creation of a Tea shop in the garden of the castle.
		</td></table>
		<br><br><br>
		<hr>
		<h3 style="color:#ea5c0d;">Leave a comment</h3>
		<br>
		<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
		Login to your account<b><a href=connexion_en.php>here</a></b> or sign in <b><a href=inscription_en.php>here</a></b> to leave us a message.
		</td></table>
		</div>

accueil
);

//contenu mecenat
define("mecenat_contenu",<<<mecenat


		<div class="titre"><h1 id="Haut">SUPPORT OUR PROJECT</h1><br></div>

		<div class="cadreGm">
		<table border="0" cellspacing=0 cellpadding=0>
			<tr>
				<td>
					<img src="image/statue.jpg" alt="" height=200 width=400/>
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
					<img src="image/serreeau.jpg" alt="" height=200 width=400/>
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
		<h2 id="entreprise">ENTREPRISES ET FONDATIONS</h2>
		<br>
		<img src="image/statue.jpg" alt="" height=35% width=100%/>
		<br>
		<br>
		<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
		Your contribution can be useful, with it, we may raise enough funds for the castle’s team to carry out this project.<br>
		As major donors, to thank you for your participation, we could offer you to engrave your company's name on the greenhouse or to associate it with the castle’s exhibitions.<br>
		In addition, the tax situation linked to sponsorship allows you to benefit from a reduction in corporation tax up to 60% of the amount of the donation within the limit of 0.5% of the turnover before tax.
		</td></table>
		<br>
		<br>
		<br>

		<hr>
		<h2 id="particuliers">PARTICULIERS</h2>
		<br>
		<img src="image/serreeau.jpg" alt="" height=35% width=100%/>
		<br>
		<br>
		<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
		Your contribution is just as important to this project, no donation is overlooked.<br>
		As a donor, to thank you, you could have the opportunity to own a bench in the castle park or to put your name alongside other donors on the greenhouse.<br>
		Furthermore, your donation will allow you to benefit from a tax reduction equal to 66% of the amounts paid, up to an annual limit of 20% of the taxable income.
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
		      <img src="image/jardin1.jpg" alt="" height=200 width=400/>
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
		      <img src="image/chateauface.png" alt="" height=200 width=400/>
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
		<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
		<iframe src="https://player.vimeo.com/video/336189401" height=300% width=100% frameborder="0" title="Rallye Champs [Application mobile]"></iframe>
		</td></table>
		<br>
		<br>
		<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
		Discovering the castle in video......
		</td></table>
		<br>
		<br>
		<br>

		<hr>
		<h2 id="horaires">TIMETABLES AND ACCESS</h2>
		<br>
		<img src="image/jardin1.jpg" alt="" height=35% width=100%/>
		<br>
		<br>
		<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
		<b>TIMETABLES</b><br><br>
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
		<b>ACCESS</b><br><br><br>
		Transports:<br><br>
		RER A, get off at the station Noisiel le Luzard then take the bus n°220 or bus n°100 to Bry-sur-Marne, stop at mairie de Champs or 20 minutes walk from the station.<br><br>
		</td>
		</table>
		<br>
		<br>
		<br>


		<hr>
		<H2 id="tarifs">PRICES</H2>
		<br>
		<img src="image/chateauface.png" alt="" height=35% width=100%/>
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

//contenu Notre projet onglet présentation
	define("presentation_contenu", <<<presentation

					<div class="titre">
					<h1 id="Haut">PRESENTATION OF OUR PROJET</h1><br>
					</div>

					<div class="cadreG">
					<table border="0" cellspacing=0 cellpadding=0>
						<tr>
							<td>
								<img src="image/chateauloin.png" alt="" height=200 width=400/>
							</td>
						</tr>
						<tr>
							<td bgcolor=#ea5c0d height=100>
								<a href="#Projet"><center>A project on French heritage</center><a>
							</td>
					</tr>
					</table>
					</div>

					<div class="cadreM">
					<table border="0" cellspacing=0 cellpadding=0>
						<tr>
							<td>
								<img src="image/chateauface.png" alt="" height=200 width=400/>
							</td>
						</tr>
						<tr>
							<td bgcolor=#ea5c0d height=100>
								<a href="#Conception"><center>Design of a communication support</center></a>
							</td>
					</tr>
					</table>
					</div>

					<div class="cadreD">
					<table border="0" cellspacing=0 cellpadding=0>
						<tr>
							<td>
								<img src="image/serre.png" alt="" height=200 width=400/>
							</td>
						</tr>
						<tr>
							<td bgcolor=#ea5c0d height=100>
								<a href="#serre"><center>Introduction to the greenhouse</center></a>
							</td>
					</tr>
					</table>
					</div>

				  <div class="intro">
					<hr>
					<h2 id="Projet">A PROJECT ON FRENCH HERITAGE</h2>
		  		<br>
					<img src="image/chateauloin.png" alt="" height=35% width=100%/>
					<br>
					<br>
					<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
					This project consists of enhancing the value of the castle of Champs sur Marne, more particularly its greenhouses, by imagining the creation of a modern tea room, in partnership with the assistant of the castle, Catherine Metz.<br>
					The aim of this project is to promote this monument by enhancing what already exists within the garden (an identical renovation of the greenhouses in order to preserve the architecture) and to imagine innovations in order to create a tea room in the greenhouses, combining classic atmosphere and technological innovations.<br>
					This would have a double effect, to increase tourist interest among the population and to promote the technical capacities of the IUT.
					</td></table>
				<br>
				<br>
				<br>

		  		<hr>
					<h2 id="Conception">DESIGN OF A COMMUNICATION SUPPORT</h2>
		  		<br>
					<img src="image/chateauface.png" alt="" height=35% width=100%/>
					<br>
					<br>
					<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
					In order to successfully promote this project and raise funds for its realization, we were led to design a site highlighting this project.<br>
					This website is therefore a communication support aimed at explaining our project and making it attractive. 
					To do so, we had to take into consideration different elements to carry out its realization. We then considered the users’ expectations with the concept of “design thinking” using the agile method and its tools. This allowed us to better understand the needs of the users and to meet them more precisely.
					</td></table>
				<br>
				<br>
				<br>


				<hr>
				<H2 id="serre">INTRODUCTION TO THE GREENHOUSE</H2>
				<br>
				<img src="image/serre.png" alt="" height=35% width=100%/>
				<br>
				<br>
				<h3> A place with a rich history </h3>
				<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
				<iframe src='https://cdn.knightlab.com/libs/timeline3/latest/embed/index.html?source=1WcJJFBqRigXl13ezxOG7fCApu8wlU9vEIaet0RZ_PtM&font=Default&lang=en&initial_zoom=2&height=650' width='100%' height='650' webkitallowfullscreen mozallowfullscreen allowfullscreen frameborder='0'></iframe>
				</td></table>
				<br><br>
				<h3> A neglected place to renovate </h3>
				<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
				After being destroyed by storms, the greenhouses were seriously damaged and could not be used anymore. The purpose of this project is to renovate them and give them a second life.<br>
				Indeed, with the initiative “Les cafés du patrimoine”, the greenhouses will be faithfully renovated in order to keep the same architecture as before while modernising them by making them a Tea Salon. <br>
        Their renovation will add a resting place in the castle park which will make this place more attractive.
				</td></table>
				<br><br>

				<h3> A new place </h3>
				<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
				The TeaShop will have two main vocations:<br>
				<br>
        The first is to offer visitors something to quench their thirst with a variety of drinks (of varying quality, ranging from good tea to soda) as well as something to fill a small hunger: here we could imagine products ranging from pancakes to sandwiches.<br>
				<br>
				The second is to offer visitors something to rest with chairs, benches and other outdoor furniture: the greenhouses are in fact located in an area of the park that is very flowery in the summer with a large open area.<br>
        In order to put all this in place, two greenhouses could be reworked (as they are well damaged today). One would be used for the storage of products and their preparation. The other would be used as a catering area. Finally the visitors will be able to eat outside.
			<br>
				</td></table>
				<br><br>
				<a href="#Haut"><i><u>Back to the top of the page</i></u></a>
 </div>
presentation
);

//contenu Notre projet onglet description
	define("description_contenu", <<<description

					<div class="titre">
					<h1 id="Haut">DESCRIPTION OF OUR PROJET</h1><br>
					</div>

					<div class="cadreG">
					<table border="0" cellspacing=0 cellpadding=0>
						<tr>
							<td>
								<img src="image/cabinet.jpg" alt="" height=200 width=400/>
							</td>
						</tr>
						<tr>
							<td bgcolor=#ea5c0d height=100>
								<a href="#proposition"><center>Proposals from students</center><a>
							</td>
					</tr>
					</table>
					</div>

					<div class="cadreM">
					<table border="0" cellspacing=0 cellpadding=0>
						<tr>
							<td>
								<img src="image/orangerie.jpg" alt="" height=200 width=400/>
							</td>
						</tr>
						<tr>
							<td bgcolor=#ea5c0d height=100>
								<a href="#orangerie"><center>The presence of the Orangerie, a plus/center></a>
							</td>
					</tr>
					</table>
					</div>

					<div class="cadreD">
					<table border="0" cellspacing=0 cellpadding=0>
						<tr>
							<td>
								<img src="image/vieromantique.jpg" alt="" height=200 width=400/>
							</td>
						</tr>
						<tr>
							<td bgcolor=#ea5c0d height=100>
								<a href="#vieromantique"><center>A similar project already completed</center></a>
							</td>
					</tr>
					</table>
					</div>

				  <div class="intro">
					<hr>
					<h2 id="proposition">PROPOSALS FROM THE STUDENTS</h2>
		  		<br>
					<img src="image/cabinet.jpg" alt="" height=35% width=100%/>
					<br>
					<br>
					<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
          The students proposed different ideas to develop the tea room project and to bring in new technologies.
          For example, the installation of a solar panel with a generator to bring electricity to the greenhouses was mentioned.
          In addition, mention was made of integrating tablet computer to allow visitors to order as well as to learn about different things about the castle like the different types of plants in the castle gardenor  the history of the castle and the garden, and to be able to consult the different social networks of the castle. These tablet computer can also allow younger visitors to have access to certain recreative content in order to keep them occupied while they wait for their order.
          All these new technologies will aim to encourage visitors who have simply come for the tea room to push their visit towards a tour of the castle, which would allow them to get to know the Champs-sur-Marne castle better and thus bring more people to the Champs-sur-Marne region.
					</td></table>
				<br>
				<br>
				<br>

		  		<hr>
					<h2 id="orangerie">The presence of the Orangerie, a plus</h2>
		  		<br>
					<img src="image/orangerie.jpg" alt="" height=35% width=100%/>
					<br>
					<br>
					<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
          In order to bring more visitors to the Champs-sur-Marne castle, various modifications have been considered.
          First of all, the orangery facing the greenhouses could be used as a tourist attraction. For example, it could host exhibitions about the castle's history or maybe historical representations delivered by the Château. In addition, a partnership with the city's music conservatory has been envisaged in order to produce concerts in the orangery.
          The tea room, or greenhouses, would play an important role in this tourist attraction as it would allow visitors to take a break after or before a concert, during an exhibition or after a performance, while offering refreshments and a quiet, cosy atmosphere. The tea room would help to build visitor loyalty to the castle and will lead them to visit it more often.
					</td></table>
				<br>
				<br>
				<br>


				<hr>
				<H2 id="vieromantique">A SIMILAR PROJECT ALREADY COMPLETED</H2>
				<br>
				<img src="image/vieromantique.jpg" alt="" height=35% width=100%/>
				<br>
				<br>
				<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
				<i>Picture:
				Creator : Pierre ANTOINE
				Copyrights : Pierre ANTOINE</i><br>
				The Château de Champs-sur-Marne would not be the first to embrace the voice of a tea room in their outdoor space. The Museum of Romantic Life already integrated it to its cultural site. The fact that this tea shop has its own tab on their website shows that this is not a gadget but an asset to make the site more attractive. In addition, the site shows to the future visitors the menu, as well as the possibility to book a place for a given amount of time in the tea room, promising visitors an enhanced experience. This is the example on which the Château would like to position itself.
				</td></table>
				<br><br>
				<a href="#Haut"><i><u>Back to the top of the page</i></u></a>
 </div>
description
);

//contenu avis
define("avis_contenu", <<<avis
	<div class="titre"><h1 id="Haut">YOUR OPINION</h1><br></div>

	<div class="accueil">
	<hr>
	<h2 id="questionnaire">TEASHOP QUESTIONNAIRE</h2>
	<br>
	<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
		<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdpVsKAQOuLyYohQWkk7lsskZTI7665TpNhpYo6cvtr4iTW_A/viewform?embedded=true" width=100% height=800% frameborder="0" marginheight="0" marginwidth="0">Chargement…</iframe>
	</td></table>

	</div>


avis
);

//En savoir plus contenu
define("savoir_contenu", <<<savoir
	<div class='titre'><h1 id='Haut'>ABOUT US</h1><br></div>
		<div class="accueil">
		<hr><br>
		<h2>Présentation</h2>
		<br><br>
		<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
		<p>In order to achieve our goals we have had several resources available, divided into categories. The first is the educational category, including all the resources made available by our IUT and the educational team, whether advice, instructions or materials. A posteriori we have a set of personal resources such as our digital devices allowing us to program the site, to take pictures or to search for information.</p>
		</td></table>
		<br><br><br>
		<hr><br>
		<h2>Notre équipe</h2>
		<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
		For this project we formed a group of 5 students in computer science at the University of Champs-sur-Marnes where we proceeded to a distribution of tasks:</p><br>
		Project manager: Edgar AMBERG<br><img src="image/edgar.png" alt=""/><br><br>
		Research and documentation/content: Maisa MILADI<br><img src="image/maisa.png" alt=""/><br><br>
		Head of internal/external communication: Cléis BENOIT-GONIN<br><img src="image/cleis.png" alt=""/><br><br>
		Developer: Yohan ASTIER<br><img src="image/yohan.png" alt=""/><br><br>
		Developer: Maryline FERNANDES<br><img src="image/maryline.png" alt=""/><br><br>
		</td></table>

		</div>
savoir
);

//contenu mentions
define("mentions_contenu", <<<mentions
	<div class="titre"><h1 id="Haut">LEGAL NOTICES</h1><br></div>

	<div class="accueil">
	<hr>
	<br>
	<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
Hosted by: Université Gustave Eiffel IUT - 2 Rue Albert Einstein, 77420 Champs-sur-Marne<br><br>
E-mail: <b>webmaster-iut@univ-mlv.fr</b><br><br>
Web site: <b><a style="color:#ea5c0d;"href=www.iut.u-pem.fr>www.iut.u-pem.fr</a></b><br><br>
Tél: 01.60.95.85.85<br><br>
Fax: 01.60.95.85.55<br><br>
Graphic charter: Médiation Culturelle et Numérique (MCN)<br><br>
Developers: ASTIER Yohan & FERNANDES Maryline<br><br>
Contact: edgar.amberg@gmail.com,marylinefernandes18@gmail.com , Yohan.Astier@gmail.com , cleisbg@gmail.com & maiissaa.mld@gmail.com<br><br>
	</td></table>
	<br><br><br>
	<hr>
	<h2 style="color:#ea5c0d;">RESPONSIBILITY</h2>
	<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
	<p>The owner is solely responsible for the information and services provided. However, it endeavours to ensure, to the best of its ability, the accuracy and updating of the information published on this site, the content of which it reserves the right to correct at any time and without notice.  Also, it warns the visitor that it is his (or her) responsibility to verify the information by other means.
	<br><br>Consequently, the owner declines all responsibility : for any imprecision, inaccuracy or omission relating to information available on the site; for any damage resulting from fraudulent intrusion by a third party leading to a modification of the information made available on the site; and more generally for any damage, direct or indirect, whatever the causes, origins, nature or consequences, caused by the access of anyone to the site or the impossibility of accessing it, as well as the use of the site and/or the credit given to any information coming directly or indirectly from the latter. Furthermore, unless otherwise stated, the intellectual property rights on the documents contained in the site and each of the elements created for this site are the exclusive property of the owner or his suppliers, who do not grant any licence or right other than that of consulting the site. The reproduction of all documents published on the site is only authorised for the exclusive purpose of providing information for personal and private use, any reproduction and any use of copies made for other purposes being expressly prohibited. All trademarks mentioned in this site belong to their respective companies. All products, logos, and images cited in the pages of this site are the property of their respective brands.
	</td></table>
	<br><br><br>
	<hr>
	<h2 style="color:#ea5c0d;">COPYRIGHTS</h2>
	<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
	<p>This entire site is subject to French and international legislation on copyright and intellectual property. Any representation, reproduction, modification, commercial use, as well as any transfer to another site are prohibited, unless permission is given by mail to the address indicated above (e-mail of the project manager). Only use for strictly personal purposes is permitted.</p>
	</td></table>
	<br><br><br>
	<hr>
	<h2 style="color:#ea5c0d;">PROCESSING OF PERSONAL DATA</h2>
	<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
	<p>The information that the owner will be led to collect comes from the voluntary registration of an e-mail address provided by the Internet user, allowing him to receive documentation, to inquire on any point. This information is never communicated to third parties. </p>
	</td></table>
	<br><br><br>
	<hr>
	<h2 style="color:#ea5c0d;">HYPERLINKS</h2>
	<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
	<p>The hyperlinks present on the site guiding users to other Internet sites do not engage the responsibility of the owner for the content of these sites. Any individual or legal entity wishing to establish a link with our site must first request permission. </p>
	</td></table>
	<br><br><br>
	<hr>
	<h2 style="color:#ea5c0d;">Computer law and freedom</h2>
	<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
	<p>In application of the law n° 78-17 of January 6, 1978 relating to data processing, files and liberties, you have the right to oppose (art.26 of the law), to access (art.34 to 38 of the law), and to rectify (art.34 of the law "Informatique et Liberté" of January 6, 1978) the data concerning you. You may request the webmaster to correct, complete, clarify, update or delete any information about you that is inaccurate, incomplete, ambiguous, outdated or whose collection or use, communication or retention is prohibited.
</p>
	</td></table>

	</div>


mentions
);


?>
