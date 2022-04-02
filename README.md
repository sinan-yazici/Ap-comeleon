<div id="top"></div>

<!-- PROJECT LOGO -->
<br />
<div align="center">
    <img src="https://t3.ftcdn.net/jpg/01/37/37/10/240_F_137371088_fgyexgp5eh97Ds4BVgVxZULaFgbLBIjh.jpg" alt="Logo" width="120">

  <h3 align="center">Projet Comeleon</h3>

  <p align="center">
    <a href="https://github.com/RomainRamanzin/Projet_Comeleon/issues">Signaler un Bug</a>
    ·
    <a href="https://github.com/RomainRamanzin/Projet_Comeleon/issues">Demander une nouvelle fonctionnalitée</a>
  </p>
</div>



<!-- TABLE OF CONTENTS -->
<details>
  <summary>Sommaire</summary>
  <ol>
    <li>
      <a href="#Presentation">Présentation</a>
      <ul>
        <li><a href="#Contexte">Contexte</a></li>
        <li><a href="#Projet">Projet</a></li>
	<li><a href="#Technologie">Technologies Utilisées</a></li>
      </ul>
    </li>
    <li>
      <a href="#Installation">Installation</a>
      <ul>
        <li><a href="#Prerequis">Les Prérequis</a></li>
        <li><a href="#Importation">Importation du projet</a></li>
        <li><a href="#Configuration">Configuration</a></li>
        <li><a href="#Importation">Importer la base de données</a></li>
      </ul>
    </li>
    <li><a href="#Utilisation">Utilisation</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#Images">Les Images</a></li>
  </ol>
</details>



<!-- Contexte -->
## Contexte

![Fichier de config](Images/accueil.png)

L’agence Comeleon propose ses services dans la création de site, application, à l’acquisition de nouveaux clients via les moteurs de recherche et les réseaux sociaux, elle accélère le business sur internet.

Dans ce projet, nous travaillons dans cette société dans le service ‘création de site’, notre équipe est constitué de 3 membres.

<p align="right">(<a href="#top">Retour en haut</a>)</p>



### Projet

Mr. X, désire augmenter sa visibilité sur internet pour booster son business. Cela devient impossible pour un entrepreneur de ne pas avoir de site en ligne.
Il désire avoir un site moderne avec un style qui correspond à son activité.

Il désire un site, accessible et ergonomique pour présenter son activité, que les clients puissent laisser des avis(dtb), consulter ses différentes prestations (dtb) et avoir un formulaire de contact. 

Notre équipe a été chargée de réaliser ce projet pour un Blombier Chauffagiste.

<p align="right">(<a href="#top">Retour en haut</a>)</p>


### Technologie

Lors de la réalisation de ce projet, nous avons utilisés différentes technologies :

* [Symfony 5](https://symfony.com/)
* [BootStrap 5](https://getbootstrap.com/)
* [PHP 7](https://www.php.net/)
* [Twig](https://twig.symfony.com/)

<p align="right">(<a href="#top">Retour en haut</a>)</p>


<!-- Installation -->
## Installation

Afin de pouvoir visualiser et utiliser notre projet, il est néccessaire de procéder à quelques actions :

### Les Prérequis

Dans un premier temps, nous aurons besoin de Symfony 5 

* Télécharger Symfony sur [symfony.com](https://symfony.com/download)


Ensuite, nous aurons besoin d'une version de PHP 7 au minimum

* Télécharger PHP 7 sur [php.net](https://www.php.net/downloads)
* Vous pouvez verifier l'installation en entrant la commande 
```sh
  php -v 
  ```


Nous aurons besoin du manager de dépendance Composer

* Télécharger composer sur [getcomposer.org](https://getcomposer.org/download/)

Pour finir, nous aurons besoin d'un serveur de base de données (ici wampserver)
* Télécharger WampServer sur [wampserver.com](https://www.wampserver.com/)


### Importation

1. Cloner le repository
   ```sh
   https://github.com/RomainRamanzin/Projet_Comeleon.git
   ```

<p align="right">(<a href="#top">Retour en haut</a>)</p>


### Configuration

Penssez à bien lancer WampServer lors de la configuration de la base !

Modifiez les informations de connexion à la base de données dans '.env'

![Fichier de config](Images/config_bdd.png)

### Importation

Pour créer la base de données veillez entrer :

```sh
   symfony console doctrine:database:create
```

Une fois la base créée, nous allons importer les tables

```sh
   symfony console doctrine:migrations:migrate
```

Pour en finir avec la base de données, nous allons importer les jeux d'essais réalisés

```sh
   symfony console doctrinefixture:load
```


<!-- Utilisation -->
## Utilisation

Le projet est constitué de différentes pages :

* une page d'accueil 
* une page de présentation
* une page contenant les différentes prestations proposées
* une page avec tous les avis postés
* une page de contact


Vous pouvez créer un compte et ensuite vous connecter sur le site avec les memes identifiants

Par défaut, toutes personnes connectés ont la possibilité d'effectuer des modification sur le site web.

<p align="right">(<a href="#top">Retour en haut</a>)</p>


<!-- CONTACT -->
## Contact

Romain Ramanzin - [@Romain-Ramanzin](https://www.linkedin.com/in/romain-ramanzin-051698202/) - romain.ramanzin@gmail.com

Lien du projet : [https://github.com/RomainRamanzin/Projet_Comeleon](https://github.com/RomainRamanzin/Projet_Comeleon)

<p align="right">(<a href="#top">Retour en haut</a>)</p>

## Images

Voici la liste des différentes images utilisées sur notre site :

* [Logo du site](https://t3.ftcdn.net/jpg/01/37/37/10/240_F_137371088_fgyexgp5eh97Ds4BVgVxZULaFgbLBIjh.jpg)
* [image d'accueil](https://image.freepik.com/vecteurs-libre/composition-isometrique-pour-fixation-fuites-chaudiere_1284-17770.jpg)
* [accueil](https://www.raquin-duchon.com/wp-content/uploads/photo-plombier.jpg)
* [accueil_2](https://storage.googleapis.com/assets-monsite-medias/monsitemoncommerce.com-la-plomberie-longonienne/2020/11/3a47bf1a-istock-5170613592.jpg)
* [presentation](https://www.schneider-cie.fr/wp-content/uploads/2021/06/plombier-chauffagiste-schneider-et-cie-1024x576.jpg)
* [presentation_2](https://media.istockphoto.com/vectors/-vector-id1227491350?k=20&m=1227491350&s=612x612&w=0&h=KGs6RK_ElbXLAkILhh_tOzoVK45U5Lem2LYgUo9uUz8=)
* [prestation](https://www.a2depannages.fr/docs/chauffage/chauffagiste-taverny-95-val-d-oise.jpg)
* [prestation_2](https://www.yesss-fr.com/assets/pics/produits/Plomberie.jpg)
* [prestation_3](https://www.resoconfort.fr/content/uploads/sites/7/2019/06/shutterstock_655155613-e1560518056689-1024x519.jpg)
* [prestation_4](https://static.vecteezy.com/ti/vecteur-libre/p1/2163534-pollution-de-la-riviere-avec-les-eaux-usees-de-l-usine-jeter-les-dechets-dans-l-eau-contamination-de-l-eau-potable-vectoriel.jpg)
* [prestation_5](https://thermozassainissement.fr/wp-content/uploads/2021/03/Thermoz-assainissement-inspection-camera-canalisation.jpg)
* [prestation_6](https://static.vecteezy.com/ti/vecteur-libre/p1/3146817-le-inondation-a-inonde-la-ville-gratuit-vectoriel.jpg)



