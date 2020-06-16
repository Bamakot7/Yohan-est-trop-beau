<?php
// entete
define("accueil", "<a href=accueil.php?lang=fr>Accueil</a>");
define("menu", "Menu");
define("preparer_entete", "<a href=preparer.php?lang=fr>Préparer sa visite</a>");
define("projet_entete", "<a href=projet.php?lang=fr>Projet</a>");
define("the_entete", "<a href=the.php?lang=fr>Le salon de thé</a>");
define("mecenat_entete", "<a href=mecenat.php?lang=fr>Mecenat</a>");
define("avis_entete", "<a href=avis.php?lang=fr>Votre avis nous intéresse</a>");
define("quisommesnous_entete", "<a href=savoir.php?lang=fr>Qui sommes-nous?</a>");
define("connexion_entete", "<a href=connexion_fr.php?lang=fr>Connexion</a>");
define("inscription_entete", "<a href=inscription.php?lang=fr>Inscription</a>");
define("monCompte", "<a href=membre.php?lang=fr>Mon compte</a>");
define("deco","<a href=PHP/deco.php?lang=fr>Déconnexion</a>");
define("message","<a href=message.php?lang=fr>Messages</a>");
define("gestionCompte","<a href=membreAdmin.php?lang=fr>Membres</a>");

//contenu accueil
define("accueil_contenu", <<<accueil

		<div class='texte'>
		<table border="1" cellpadding="8" cellspacing="0" width=1000 height=550><td>
		Bienvenue sur le site de promotion du Salon de thé du château de Champs-sur-Marne.<br>
		<p>Ce site a pour but l’exposition d’un projet visant à créer et inclure un salon de thé dans l’enceinte du jardin du château de Champs-sur-Marne.
		Ce projet, faisant partie d’un mouvement national appelé «Les cafés du Patrimoine», vise à rendre la visite du parc, notamment dans les périodes de forte chaleur, plus agréable.</p>
		<a href='Projet.php'><i>En savoir plus</i></a>
		</td></table>
		</div>

		<div class="map">
			<hr>
			Château de Champs-sur-Marne
			<br><br>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.241206540705!2d2.601900615624199!3d48.853610679286895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e61020dc9a4367%3A0xc0ab72ed5661119f!2sCh%C3%A2teau%20de%20Champs-sur-Marne!5e0!3m2!1sfr!2sfr!4v1583078697028!5m2!1sfr!2sfr" width="950" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		</div>
accueil
);

// contenu mecenat
define("mecenat_contenu",<<<mecenat

			<div class="titre"><h1 id="Haut">MÉCÉNAT</h1><br></div>

			<div class="cadreGm">
			<table border="0" cellspacing=0 cellpadding=0>
				<tr>
					<td>
						<img src="image/chateau1.png" alt="" height=200 width=400/>
					</td>
				</tr>
				<tr>
					<td bgcolor=#ea5c0d height=100>
						<a href="#entreprise"><center>Entreprises et fondations</center></a>
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
						<a href="#particuliers"><center>Particuliers</center></a>
					</td>
			</tr>
			</table>
			</div>

			<div class="intro">
			<hr>
			<h2 id="entreprise">ENTREPRISES ET FONDATIONS</h2>
			<br>
			<img src="image/chateau1.png" alt="" height=500 width=1000/>
			<br>
			<br>
			<table border="1" cellpadding="8" cellspacing="0" width=1000><td>
			Votre contribution peut nous être utile et nous apporter beaucoup de fonds qui nous permettront de mener à bien ce projet.<br>
			En tant que grands donateurs, pour vous remercier de votre participation, nous pourrions vous proposer de graver le nom de votre société sur la serre ou de l’associer à des expositions.<br>
			De plus, la situation fiscale lié au mécénat vous permet de profiter d’une réduction de l’impôt sur les sociétés à hauteur de 60% du montant du don dans la limite de 0,5% du chiffre d’affaire hors taxe.
			</td></table>
		<br>
		<br>
		<br>

			<hr>
			<h2 id="particuliers">PARTICULIERS</h2>
			<br>
			<img src="image/serre.jpg" alt="" height=500 width=1000/>
			<br>
			<br>
			<table border="1" cellpadding="8" cellspacing="0" width=1000><td>
			Votre contribution est tout autant importante pour nous, aucun don n’est négligé.<br>
			En tant que donateur, afin de vous remercier, nous aimerions vous proposer de posséder un banc du parc du château ou bien d’apposer votre nom aux côtés des autres donateurs sur la serre.<br>
			De plus, votre don vous permet de bénéficier d’une réduction d'impôt égale à 66 % des sommes versées, dans la limite annuelle de 20 % du revenu imposable.
			</td></table>

			<br><br>
			<a href="#Haut"><i><u>Retour en haut de page</i></u></a>
			</div>

mecenat
);

//contenu preparer sa visite

define("prepare_contenu", <<<prepare

						<div class="titre">
						<h1 id="Haut">PRÉPARER SA VISITE</h1><br>
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
									<a href="#decouvrir"><center>Découvrir le château</center><a>
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
									<a href="#horaires"><center>Horaires et accès</center></a>
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
									<a href="#tarifs"><center>Tarifs</center></a>
								</td>
						</tr>
						</table>
						</div>

					  <div class="intro">
						<hr>
						<h2 id="decouvrir">DÉCOUVRIR LE CHÂTEAU</h2>
			  		<br>
						<table border="1" cellpadding="8" cellspacing="0" width=1000><td>
						<iframe src="https://player.vimeo.com/video/336189401" height=500 width=950 frameborder="0" title="Rallye Champs [Application mobile]"></iframe>
						</td></table>
						<br>
						<br>
						<table border="1" cellpadding="8" cellspacing="0" width=1000><td>
						Découvrir le château en vidéo......
						</td></table>
					<br>
					<br>
					<br>

			  		<hr>
						<h2 id="horaires">HORAIRES ET ACCÈS</h2>
			  		<br>
						<img src="image/jardin.jpg" alt="" height=500 width=1000/>
						<br>
						<br>
						<table border="1" cellpadding="8" cellspacing="0" width=1000><td>
						HORAIRES<br><br>
						Du 2 janvier au 26 mai<br>
			      Ouvert tous les jours sauf le mardi 10.00-12.15 / 13.30-17.00<br>
			          <br>
			      Du 27 mai au 1er octobre<br>
			      Ouvert tous les jours sauf le mardi 10.00-12.15 / 13.30-18.00<br>
			          <br>
			      Du 2 octobre au 31 décembre<br>
			      Ouvert tous les jours sauf le mardi 10.00-12.15 / 13.30-17.00
						</td>
						<td>
						ACCÈS<br><br>
						rerA blablablab
						</td>
						</table>
					<br>
					<br>
					<br>


					<hr>
					<H2 id="tarifs">TARIFS</H2>
					<br>
					<img src="image/chateau1.png" alt="" height=500 width=1000/>
					<br>
					<br>
					<table border="1" cellpadding="8" cellspacing="0" width=1000><td>
					Plein tarif: 8€<br>
					18-25 ans: 6.50€<br>
					Mineur: Gratuit
					</td></table>

					<br><br>
					<a href="#Haut"><i><u>Retour en haut de page</i></u></a>
	 </div>
prepare
);


//contenu Notre projet
	define("projet_contenu", <<<projet

					<div class="titre">
					<h1 id="Haut">NOTRE PROJET</h1><br>
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
								<a href="#Projet"><center>Un projet sur le patrimoine</center><a>
							</td>
					</tr>
					</table>
					</div>

					<div class="cadreM">
					<table border="0" cellspacing=0 cellpadding=0>
						<tr>
							<td>
								<img src="image/ordi.jpg" alt="" height=200 width=400/>
							</td>
						</tr>
						<tr>
							<td bgcolor=#ea5c0d height=100>
								<a href="#Conception"><center>Conception d'un support de communication</center></a>
							</td>
					</tr>
					</table>
					</div>

					<div class="cadreD">
					<table border="0" cellspacing=0 cellpadding=0>
						<tr>
							<td>
								<img src="image/biblio.jpg" alt="" height=200 width=400/>
							</td>
						</tr>
						<tr>
							<td bgcolor=#ea5c0d height=100>
								<a href="#Proposition"><center>Propositions des étudiants</center></a>
							</td>
					</tr>
					</table>
					</div>

				  <div class="intro">
					<hr>
					<h2 id="Projet">UN PROJET SUR LE PATRIMOINE</h2>
		  		<br>
					<img src="image/chateau1.png" alt="" height=500 width=1000/>
					<br>
					<br>
					<table border="1" cellpadding="8" cellspacing="0" width=1000><td>
					Ce projet consiste à la valorisation du château de Champs sur Marne, en particulier sa serre, en imaginant la création
					d’un salon de thé moderne, en partenariat avec l’adjointe au château, Catherine Metz.<br>
					Ce projet vise à promouvoir ce monument en valorisant ce qui existe déjà au sein du jardin (une la
					rénovation à l’identique de la serre afin de préserver l’architecture, construite au début du XVIIIème siècle)
					et à imaginer des innovations dans le but de créer un salon de thé au sein de la serre, alliant ambiance
					classique et innovation technologique.<br>
					Cela aurait un double effet, susciter de l'intérêt touristique au sein de la population et promouvoir les
					capacités techniques de notre IUT.
					</td></table>
				<br>
				<br>
				<br>

		  		<hr>
					<h2 id="Conception">CONCEPTION D'UN SUPPORT DE COMMUNICATION</h2>
		  		<br>
					<img src="image/ordi.jpg" alt="" height=500 width=1000/>
					<br>
					<br>
					<table border="1" cellpadding="8" cellspacing="0" width=1000><td>
					Afin de mener à bien la promotion de ce projet et de soulever des fonds pour sa réalisation, nous avons été amenés à concevoir un site mettant en avant ce projet.<br>
					Ce site internet est donc un support de communication visant à expliquer notre projet et le rendre attractif.
					Pour ce faire, nous avons dû prendre en compte différents éléments pour mener à bien sa réalisation. Nous avons alors considéré les attentes des utilisateurs avec l’approche du design thinking en utilisant plus particulièrement la méthode agile et ses outils. Cela nous a permis de mieux cerner les besoins des utilisateurs et d’y répondre plus précisément.
					</td></table>
				<br>
				<br>
				<br>


				<hr>
				<H2 id="Proposition">PROPOSITIONS DES ÉTUDIANTS</H2>
				<br>
				<img src="image/biblio.jpg" alt="" height=500 width=1000/>
				<br>
				<br>
				<table border="1" cellpadding="8" cellspacing="0" width=1000><td>
				<p>Dans le but de moderniser ce projet, nous voulions proposer différentes nouvelles technologies que nous pourrions mettre en place dans le salon de thé.
				Pour cela, nous avons procédé à une veille technologique, nous nous sommes inspirés de différentes technologies, déjà présentes dans certains salons de thé ou cafés, que nous pensons applicables dans ce salon.</p>

				<p>Dans un premier temps, nous avons retenu des technologies ludiques, telles que l’impression d’un selfie sur la mousse d’une boisson ou l’installation d’un écran souple sur les tables pour que les clients puissent commander ou s’informer sur le château pour poursuivre leur visite.</p>

				<p>Dans un second temps, nous avons pensé aux technologies pratiques, telles que l’installation d’un panneau solaire « plug and play » qui s’installe rapidement, il se branche directement sur une prise électrique. Cela permettrait d’apporter du courant dans la serre, de manière écologique. De plus, introduire le paiement mobile ou encore un robot qui livre les commandes ou une machine à thé intelligente pour de parfaites infusions pourrait augmenter l’attractivité du salon.</p>

				<p>Ces différentes innovations pourraient donc offrir aux clients une expérience positive au sein du salon de thé.</p>
				</td></table>
				<br><br>
				<a href="#Haut"><i><u>Retour en haut de page</i></u></a>
 </div>

projet
);

//contenu salon the
	define("the_contenu", <<<the

						<div class="titre">
						<h1 id="Haut">LE SALON DE THÉ</h1><br>
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
									<a href="#exceptionnel"><center>Un lieu exceptionnel chargé d'histoire</center><a>
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
									<a href="#delaisse"><center>Un lieu délaissé à renover</center></a>
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
									<a href="#nouveau"><center>Un lieu nouveau</center></a>
								</td>
						</tr>
						</table>
						</div>

					  <div class="intro">
						<hr>
						<h2 id="exceptionnel">UN LIEU EXCEPTIONNEL CHARGÉ D'HISTOIRE</h2>
			  		<br>
						<img src="image/chateau1.png" alt="" height=500 width=1000/>
						<br>
						<br>
						<table border="1" cellpadding="8" cellspacing="0" width=1000><td>
						<iframe src='https://cdn.knightlab.com/libs/timeline3/latest/embed/index.html?source=1WcJJFBqRigXl13ezxOG7fCApu8wlU9vEIaet0RZ_PtM&font=Default&lang=en&initial_zoom=2&height=650' width='100%' height='650' webkitallowfullscreen mozallowfullscreen allowfullscreen frameborder='0'></iframe>
						</td></table>
					<br>
					<br>
					<br>

			  		<hr>
						<h2 id="delaisse">UN LIEU DÉLAISSÉ À RÉNOVER</h2>
			  		<br>
						<img src="image/serre.jpg" alt="" height=500 width=1000/>
						<br>
						<br>
						<table border="1" cellpadding="8" cellspacing="0" width=1000><td>
						Après des tempêtes qui l’ont abîmée et rendue impossible d’usage, cette serre fût délaissée. Le but de ce projet est donc de la rénover et de lui donner une seconde vie.<br>
					  En effet, par le biais de l’initiative “Les cafés du patrimoine”, la serre pourrait être rénovée à l’identique afin de conserver son architecture du XVIIIème siècle tout en la modernisant en la transformant en salon de thé.<br>
						Sa rénovation permettra d’ajouter un lieu de halte dans le parc du château ce qui rendrait ce lieu plus attractif.
						</table>
					<br>
					<br>
					<br>


					<hr>
					<H2 id="nouveau">UN LIEU NOUVEAU</H2>
					<br>
					<img src="image/the.jpg" alt="" width=1000 height=500/>
					<br>
					<br>
					<table border="1" cellpadding="8" cellspacing="0" width=1000>
					<td>
					Le salon de thé aurait donc deux vocations principales:<br>
					<br>
					La première, proposer aux visiteurs de quoi se désaltérer par différentes boissons (de qualité plus ou moins élevées, allant du bon thé au soda) ainsi de quoi combler un petit creu: on pourrait ici imaginer des produits allant de la crêpe, au sandwich.<br>
					<br>
					La seconde, proposer aux visiteurs de quoi se reposer en mettant en place des chaises, bancs et autres meubles de plein air: les serres sont en effets situées dans un endroit du parc très fleuri l’été avec une grande surface libre.
				<br>
					</td>
					</table>

					<br><br>
					<a href="#Haut"><i><u>Retour en haut de page</i></u></a>
	 </div>
the
);

define("savoir_contenu", <<<savoir
	<div class="savoir"><h1><u><center>EN SAVOIR PLUS :</center></u></h1>
				<p>Pour venir à bout de nos objectifs nous avons eu à disposition plusieurs ressources divisées par catégories. La première est la catégorie éducative, incluant l’ensemble des ressources mises à disposition par notre IUT et l’équipe éducative y travaillant, que ce soit les conseils, les consignes ou encore le matériel mis à disposition. A posteriori nous disposons d’un ensemble de ressources personnelles tels que nos appareils numériques nous permettant la programmation du site, la prise de photo ou encore la recherche d’informations.
				Pour ce projet nous avons formé un groupe de 5 étudiants en DUT informatique à l’iut de Champs-sur-Marnes où nous avons procédé à une distribution des tâches :</p>
				<br>
				Chef de projet: Edgar AMBERG,<br>
				Recherche et documentation/contenu: Maisa MILADI & Maryline FERNANDES,<br>
				Chargé de com interne/externe: Cléis BENOIT-GONIN & Edgar AMBERG,<br>
				Développeurs: Yohan ASTIER & Cléis BENOIT-GONIN,<br>
				Designer: Maryline FERNANDES & Maisa MILADI.</div>
savoir
);

//contenu avis
define("avis_contenu", <<<avis
	<div class="titre"><h1 id="Haut">VOTRE AVIS</h1><br></div>

	<div class="cadreGm">
	<table border="0" cellspacing=0 cellpadding=0>
		<tr>
			<td>
				<img src="image/chateau1.png" alt="" height=200 width=400/>
			</td>
		</tr>
		<tr>
			<td bgcolor=#ea5c0d height=100>
				<a href="#questionnaire"><center>Questionnaire sur le salon de thé</center></a>
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
				<a href="#commentaire"><center>Laissez un commentaire</center></a>
			</td>
	</tr>
	</table>
	</div>

	<div class="intro">
	<hr>
	<h2 id="questionnaire">QUESTIONNAIRE SUR LE SALON DE THÉ</h2>
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
	<h2 id="commentaire">LAISSEZ UN COMMENTAIRE</h2>
	<br>
	<img src="image/serre.jpg" alt="" height=500 width=1000/>
	<br>
	<br>
	<table border="1" cellpadding="8" cellspacing="0" width=1000><td>

	</td></table>

	<br><br>
	<a href="#Haut"><i><u>Retour en haut de page</i></u></a>
	</div>


avis
);

?>
