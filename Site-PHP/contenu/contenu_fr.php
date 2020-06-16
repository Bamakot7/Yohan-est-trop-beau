<?php
// entete
define("accueil", "<a href=accueil.php?lang=fr>Accueil</a>");
define("menu", "Menu");
define("notreProjet", "Notre projet");
define("preparer_entete", "<a href=preparer.php?lang=fr>Préparer sa visite</a>");
define("presentation_entete", "<a href=presentation.php?lang=fr>Présentation</a>");
define("description_entete", "<a href=description.php?lang=fr>Description</a>");
define("mecenat_entete", "<a href=mecenat.php?lang=fr>Mécénat</a>");
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

		<div class='accueil'>
		<hr>
		<h2>Bienvenue</h2><br>
		<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
		Bienvenue sur le site de promotion du Salon de thé du château de Champs-sur-Marne.<br>
		<p>Ce site a pour but l’exposition d’un projet visant à créer et inclure un salon de thé dans l’enceinte du jardin du château de Champs-sur-Marne.
		Ce projet, faisant partie d’un mouvement national appelé «Les cafés du Patrimoine», vise à rendre la visite du parc, notamment dans les périodes de forte chaleur, plus agréable.</p>
		<a href='presentation.php'><i>En savoir plus</i></a>
		</td></table>
		<br>
		<br>
		<br>
			<hr>
			<h2>Château de Champs-sur-Marne</h2>
			<br>
			<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
			"Le château de Champs-sur-Marne est caractéristique des maisons de plaisance du XVIIIème siècle bâties à la campagne, permettant un nouvel art de vivre.  Construit de 1703 à 1708 par les architectes Pierre Bullet et Jean-Baptiste Bullet de Chamblain, à la demande du financier de Louis XIV, Paul Poisson de Bourvallais. Le château présente  de somptueux décors rocaille, ainsi que des décors de chinoiseries peintes au milieu du XVIIIème siècle par Christophe Huet."
			<br><br>-<a href=http://www.chateau-champs-sur-marne.fr><i>Site du Château de Champs-sur-Marne</i></a>
			</td></table>
			<br>
			<br>
			<br>
				<hr>
				<h2>Localisation</h2>
				<br>
				<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.241206540705!2d2.601900615624199!3d48.853610679286895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e61020dc9a4367%3A0xc0ab72ed5661119f!2sCh%C3%A2teau%20de%20Champs-sur-Marne!5e0!3m2!1sfr!2sfr!4v1583078697028!5m2!1sfr!2sfr" width=100% height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				</td></table>
		</div>

		<div class='onglet'>
		<hr>
		<h3 style="color:#ea5c0d;">Votre avis nous intéresse</h3>
		<br>
		<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
		Répondez <b><a href=avis.php>ici</a></b> à un questionnaire sur la création d'un salon de thé au Château de Champs-sur-Marne.
		</td></table>
		<br><br><br>
		<hr>
		<h3 style="color:#ea5c0d;">Laissez un commentaire</h3>
		<br>
		<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
		Connectez-vous à votre espace <b><a href=connexion_fr.php>ici</a></b> ou inscrivez-vous <b><a href=inscription.php>ici</a></b> pour nous laisser un message.
		</td></table>
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
						<img src="image/statue.jpg" alt="" height=200 width=400/>
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
						<img src="image/serreeau.jpg" alt="" height=200 width=400/>
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
			<img src="image/statue.jpg" alt="" height=35% width=100%/>
			<br>
			<br>
			<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
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
			<img src="image/serreeau.jpg" alt="" height=35% width=100%/>
			<br>
			<br>
			<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
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
									<img src="image/jardin1.jpg" alt="" height=200 width=400/>
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
									<img src="image/chateauface.png" alt="" height=200 width=400/>
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
						<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
						<iframe src="https://player.vimeo.com/video/336189401" height=300% width=100% frameborder="0" title="Rallye Champs [Application mobile]"></iframe>
						</td></table>
						<br>
						<br>
						<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
						Découvrir le château en vidéo......
						</td></table>
					<br>
					<br>
					<br>

			  		<hr>
						<h2 id="horaires">HORAIRES ET ACCÈS</h2>
			  		<br>
						<img src="image/jardin1.jpg" alt="" height=35% width=100%/>
						<br>
						<br>
						<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
						<b>HORAIRES</b><br><br>
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
						<b>ACCÈS</b><br><br><br>
						En transport:<br><br>
						RER A, descendre à Noisiel le Luzard puis prendre le bus n°220 ou bus n°100 direction Bry-sur-Marne, arrêt mairie de Champs ou 20 minutes à pied de la gare.<br><br>
						En voiture:<br><br>
						De Paris : A 4, sortie n°10 Champs, suivre le fléchage "château de Champs", 30 min de trajet. <br>
						Provenance diverses : A4, sortie Noisiel suivre le fléchage<br><br>
						</td>
						</table>
					<br>
					<br>
					<br>


					<hr>
					<H2 id="tarifs">TARIFS</H2>
					<br>
					<img src="image/chateauface.png" alt="" height=35% width=100%/>
					<br>
					<br>
					<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
					Plein tarif: 8€<br>
					18-25 ans: 6.50€<br>
					Mineur: Gratuit
					</td></table>

					<br><br>
					<a href="#Haut"><i><u>Retour en haut de page</i></u></a>
	 </div>
prepare
);


//contenu Notre projet onglet présentation
	define("presentation_contenu", <<<presentation

					<div class="titre">
					<h1 id="Haut">PRÉSENTATION DE NOTRE PROJET</h1><br>
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
								<a href="#Projet"><center>Un projet sur le patrimoine</center><a>
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
								<a href="#Conception"><center>Conception d'un support de communication</center></a>
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
								<a href="#serre"><center>Présentation de la serre</center></a>
							</td>
					</tr>
					</table>
					</div>

				  <div class="intro">
					<hr>
					<h2 id="Projet">UN PROJET SUR LE PATRIMOINE</h2>
		  		<br>
					<img src="image/chateauloin.png" alt="" height=35% width=100%/>
					<br>
					<br>
					<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
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
					<img src="image/chateauface.png" alt="" height=35% width=100%/>
					<br>
					<br>
					<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
					Afin de mener à bien la promotion de ce projet et de soulever des fonds pour sa réalisation, nous avons été amenés à concevoir un site mettant en avant ce projet.<br>
					Ce site internet est donc un support de communication visant à expliquer notre projet et le rendre attractif.
					Pour ce faire, nous avons dû prendre en compte différents éléments pour mener à bien sa réalisation. Nous avons alors considéré les attentes des utilisateurs avec l’approche du design thinking en utilisant plus particulièrement la méthode agile et ses outils. Cela nous a permis de mieux cerner les besoins des utilisateurs et d’y répondre plus précisément.
					</td></table>
				<br>
				<br>
				<br>


				<hr>
				<H2 id="serre">PRÉSENTATION DE LA SERRE</H2>
				<br>
				<img src="image/serre.png" alt="" height=35% width=100%/>
				<br>
				<br>
				<h3> Un lieu chargé d'histoire </h3>
				<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
				<iframe src='https://cdn.knightlab.com/libs/timeline3/latest/embed/index.html?source=1WcJJFBqRigXl13ezxOG7fCApu8wlU9vEIaet0RZ_PtM&font=Default&lang=en&initial_zoom=2&height=650' width='100%' height='650' webkitallowfullscreen mozallowfullscreen allowfullscreen frameborder='0'></iframe>
				</td></table>
				<br><br>
				<h3> Un lieu délaissé à rénover </h3>
				<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
				Après des tempêtes qui l’ont abîmée et rendue impossible d’usage, cette serre fût délaissée. Le but de ce projet est donc de la rénover et de lui donner une seconde vie.<br>
				En effet, par le biais de l’initiative “Les cafés du patrimoine”, la serre pourrait être rénovée à l’identique afin de conserver son architecture du XVIIIème siècle tout en la modernisant en la transformant en salon de thé.<br>
				Sa rénovation permettra d’ajouter un lieu de halte dans le parc du château ce qui rendrait ce lieu plus attractif.
				</td></table>
				<br><br>

				<h3> Un lieu nouveau </h3>
				<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
				Le salon de thé aurait donc deux vocations principales:<br>
				<br>
				La première, proposer aux visiteurs de quoi se désaltérer par différentes boissons (de qualité plus ou moins élevées, allant du bon thé au soda) ainsi de quoi combler un petit creu: on pourrait ici imaginer des produits allant de la crêpe, au sandwich.<br>
				<br>
				La seconde, proposer aux visiteurs de quoi se reposer en mettant en place des chaises, bancs et autres meubles de plein air: les serres sont en effets situées dans un endroit du parc très fleuri l’été avec une grande surface libre.
			<br>
				</td></table>
				<br><br>
				<a href="#Haut"><i><u>Retour en haut de page</i></u></a>
 </div>
presentation
);

//contenu Notre projet onglet description
	define("description_contenu", <<<description

					<div class="titre">
					<h1 id="Haut">DESCRIPTION DE NOTRE PROJET</h1><br>
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
								<a href="#proposition"><center>Proposition des étudiants</center><a>
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
								<a href="#orangerie"><center>La présence de l'Orangerie, un plus</center></a>
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
								<a href="#vieromantique"><center>Un projet similaire déjà réalisé</center></a>
							</td>
					</tr>
					</table>
					</div>

				  <div class="intro">
					<hr>
					<h2 id="proposition">PROPOSITION DES ÉTUDIANTS</h2>
		  		<br>
					<img src="image/cabinet.jpg" alt="" height=35% width=100%/>
					<br>
					<br>
					<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
					Les étudiants ont proposés différentes idées afin de développer le projet du salon de thé et d'y apporter des nouvelles technologies.
					Par exemple, il a été mentionné l'installation d'un panneau solaire accompagné d'un générateur permettant d'amener de l'électricité dans les serres.
					De plus, la mention d'intégrer des tablettes pour permettre aux visiteurs de commander ainsi que de se renseigner sur les différents types de plantes présentes dans le jardin du château, sur l'histoire du château et du jardin, pouvoir consulter les différents réseaux sociaux du château. Ces tablettes peuvent aussi permettre aux plus jeunes visiteurs d'avoir accès à certains contenu de loisir afin de les occuper pendant l'attente de leur commande.
					Toutes ces nouvelles technologies auront pour but d'amener les visiteurs étant simplement venus pour le salon de thé à pousser leur visite vers une visite du château, se qui permettrait de mieux faire connaitre le château de Champs-sur-Marne et ainsi faire venir plus de monde dans la région de Champs-sur-Marne.
					</td></table>
				<br>
				<br>
				<br>

		  		<hr>
					<h2 id="orangerie">LA PRÉSENCE DE L'ORANGERIE, UN PLUS</h2>
		  		<br>
					<img src="image/orangerie.jpg" alt="" height=35% width=100%/>
					<br>
					<br>
					<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
					Pour amener plus de visiteurs au Château de Champs-sur-Marne, différentes modifications ont été envisagées.
					Tout d'abord, l'orangerie située en face des serres serait utilisée comme un moyen d'attraction touristique. Par exemple, elle pourrait accueillir des expositions sur l'histoire du Château ou des représentations historiques délivrées par le Château. De plus, un partenariat avec le conservatoire de musique de la ville a été envisagé afin de produire des concerts au sein de l'orangerie.
					Le salon de thé, ou les serres, jouerait ici un rôle important puisqu'il permettrait aux visiteurs de s'accorder une pause après ou avant un concert, pendant une exposition ,après une représentation, tout en leurs proposant des rafraîchissements ainsi qu'une ambiance tranquille, cosy. Le salon de thé permettrait de fidéliser les visiteurs au château et les amènera à le visiter plus souvent.
					</td></table>
				<br>
				<br>
				<br>


				<hr>
				<H2 id="vieromantique">UN PROJET SIMILAIRE DÉJÀ RÉALISÉ</H2>
				<br>
				<img src="image/vieromantique.jpg" alt="" height=35% width=100%/>
				<br>
				<br>
				<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
				<i>Photo:
				Créateur : Pierre ANTOINE
				Droits d'auteur : Pierre ANTOINE</i><br>
				Le château de Champs-sur-Marne ne serait pas le premier à embrasser la voix d'un salon de thé dans leur espace en extérieur. Le musée de la vie romantique
				l'a déjà intégré à son site culturel. La fait que ce salon de thé dispose de son propre onglet sur leur site internet montre qu'il ne s'agit pas là d'un
				gadget mais bien d'un atout permettant de rendre le site plus attractif. De plus le site propose aux futurs visiteurs la carte, ainsi que de quoi réserver
				sa place pour un temps donné dans le salon de thé, promettant ainsi aux visiteurs une expérience améliorée. C'est l'exemple sur lequel le salon de thé du
				Château voudrait se positionner.
				</td></table>
				<br><br>
				<a href="#Haut"><i><u>Retour en haut de page</i></u></a>
 </div>
description
);

define("savoir_contenu", <<<savoir
	<div class='titre'><h1 id='Haut'>QUI SOMMES NOUS?</h1><br></div>
		<div class="accueil">
		<hr><br>
		<h2>Présentation</h2>
		<br><br>
		<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
		<p>Pour venir à bout de nos objectifs nous avons eu à disposition plusieurs ressources divisées par catégories. La première est la catégorie éducative, incluant l’ensemble des ressources mises à disposition par notre IUT et l’équipe éducative y travaillant, que ce soit les conseils, les consignes ou encore le matériel mis à disposition. A posteriori nous disposons d’un ensemble de ressources personnelles tels que nos appareils numériques nous permettant la programmation du site, la prise de photo ou encore la recherche d’informations.
		</td></table>
		<br><br><br>
		<hr><br>
		<h2>Notre équipe</h2>
		<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
		Pour ce projet nous avons formé un groupe de 5 étudiants en DUT informatique à l’iut de Champs-sur-Marnes où nous avons procédé à une distribution des tâches :</p><br>
		Chef de projet: Edgar AMBERG<br><img src="image/edgar.png" alt=""/><br><br>
		Recherche et documentation/contenu: Maisa MILADI<br><img src="image/maisa.png" alt=""/><br><br>
		Chargé de communication interne/externe: Cléis BENOIT-GONIN<br><img src="image/cleis.png" alt=""/><br><br>
		Développeur: Yohan ASTIER<br><img src="image/yohan.png" alt=""/><br><br>
		Développeur: Maryline FERNANDES<br><img src="image/maryline.png" alt=""/><br><br>
		</td></table>

		</div>
savoir
);

//contenu avis
define("avis_contenu", <<<avis
	<div class="titre"><h1 id="Haut">VOTRE AVIS</h1><br></div>

	<div class="accueil">
	<hr>
	<h2 id="questionnaire">QUESTIONNAIRE SUR LE SALON DE THÉ</h2>
	<br>
	<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
		<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdpVsKAQOuLyYohQWkk7lsskZTI7665TpNhpYo6cvtr4iTW_A/viewform?embedded=true" width=100% height=800% frameborder="0" marginheight="0" marginwidth="0">Chargement…</iframe>
	</td></table>

	</div>


avis
);

//contenu mentions
define("mentions_contenu", <<<mentions
	<div class="titre"><h1 id="Haut">MENTION LÉGALES</h1><br></div>

	<div class="accueil">
	<hr>
	<br>
	<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
(réglementées par la Loi n° 2004-575 du 21 juin 2004 pour la confiance dans l’économie numérique)<br>
Hébergeur: Université Gustave Eiffel IUT - 2 Rue Albert Einstein, 77420 Champs-sur-Marne<br><br>
E-mail: <b>webmaster-iut@univ-mlv.fr</b><br><br>
Site Web: <b><a style="color:#ea5c0d;"href=www.iut.u-pem.fr>www.iut.u-pem.fr</a></b><br><br>
Tél: 01.60.95.85.85<br><br>
Fax: 01.60.95.85.55<br><br>
Charte graphique: Médiation Culturelle et Numérique (MCN)<br><br>
Développement du site: ASTIER Yohan & FERNANDES Maryline<br><br>
Contact: edgar.amberg@gmail.com,marylinefernandes18@gmail.com , Yohan.Astier@gmail.com , cleisbg@gmail.com & maiissaa.mld@gmail.com<br><br>
	</td></table>
	<br><br><br>
	<hr>
	<h2 style="color:#ea5c0d;">RESPONSABILITÉ</h2>
	<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
	<p>Le propriétaire assure seul la responsabilité des informations et des prestations fournies.  Cependant, il s’efforce d’assurer au mieux de ses possibilités, l’exactitude et la mise à jour des informations diffusées sur ce site, dont il se réserve le droit de corriger, à tout moment et sans préavis, le contenu.  Aussi, elle avertit le visiteur qu’il lui appartient de vérifier l’information par d’autres moyens.
	<br><br>En conséquence, le propriétaire décline toute responsabilité : pour toute imprécision, inexactitude ou omission portant sur des informations disponibles sur le site ; pour tous dommages résultant d’une intrusion frauduleuse d’un tiers ayant entraîné une modification des informations mises à la disposition sur le site ; et plus généralement pour tous dommages, directs ou indirects, qu’elles qu’en soient les causes, origines, nature ou conséquences, provoqués  à raison de l’accès de quiconque au site ou de l’impossibilité d’y accéder, de même que l’utilisation du site et/ou du crédit accordé à une quelconque information provenant directement ou indirectement de ce dernier. Par ailleurs, sauf mention contraire, les droits de propriété intellectuelle sur les documents contenus dans le site et chacun des éléments créés pour ce site sont la propriété exclusive du propriétaire ou de ses fournisseurs, ceux-ci ne concédant aucune licence, ni aucun droit que celui de consulter le site. La reproduction de tous documents publiés sur le site est seulement autorisée à des fins exclusives d’informations pour un usage personnel et privé, toute reproduction et toute utilisation de copies réalisées à d’autres fins étant expressément interdite. Toutes les marques citées dans ce site appartiennent à leurs compagnies respectives. Tous les produits, logos, et images cités dans les pages de ce site sont la propriété de leur marque respective.</p>
	</td></table>
	<br><br><br>
	<hr>
	<h2 style="color:#ea5c0d;">DROITS D'AUTEUR</h2>
	<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
	<p>L’ensemble de ce site relève de la législation française et internationale sur le droit d’auteur et la propriété intellectuelle. Toute représentation, reproduction, modification, utilisation commerciale, ainsi que tout transfert vers un autre site sont interdits, sauf autorisation à demander par courrier à l’adresse indiquée plus haut (adresse mail du chef de projet). Seule une utilisation à des fins strictement personnelle est autorisée.</p>
	</td></table>
	<br><br><br>
	<hr>
	<h2 style="color:#ea5c0d;">TRAITEMENT DES DONNÉES PERSONNELLES</h2>
	<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
	<p>Les informations que le propriétaire sera amenée à recueillir proviennent de l’enregistrement volontaire d’une adresse courriel fournie par l’internaute, lui permettant de recevoir une documentation, de se renseigner sur un point quelconque. Ces informations ne sont jamais communiquées à des tiers.</p>
	</td></table>
	<br><br><br>
	<hr>
	<h2 style="color:#ea5c0d;">LIENS HYPERTEXTE</h2>
	<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
	<p>Les liens hypertextes présents sur le site orientant les utilisateurs vers d’autres sites Internet n’engagent pas la responsabilité du propriétaire quant au contenu de ces sites. Toute personne physique ou morale souhaitant que soit établi un lien avec notre site, doit préalablement en demander l’autorisation.</p>
	</td></table>
	<br><br><br>
	<hr>
	<h2 style="color:#ea5c0d;">LOI INFORMATIQUE ET LIBERTÉ</h2>
	<table border="1" cellpadding="8" cellspacing="0" width=100%><td>
	<p>En application de la loi n° 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, vous disposez des droits d’opposition (art.26 de la loi), d’accès (art.34 à 38 de la loi), et de rectification (art.34 de la loi «  Informatique et Liberté  » du 6 janvier 1978) des données vous concernant. Vous pouvez exiger sur simple demande au  webmaster que soient rectifiées, complétées, clarifiées, mises à jour ou effacées les informations vous concernant qui sont inexactes, incomplètes, équivoques, périmées ou dont la collecte ou l’utilisation, la communication ou la conservation est interdite.
</p>
	</td></table>

	</div>


mentions
);


?>
