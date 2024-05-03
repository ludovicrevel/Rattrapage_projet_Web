# Rattrapage_projet_Web

Ici vous trouverez l'ensemble du sujet qui représente le module.

Pour rappel le sujet était : Fonctionnalités : Destiné aux développeurs, ce module permet de suivre l'avancement des projets, de gérer les tâches, et de collaborer avec les membres de l'équipe. Intègre un système de notification et de commentaires.

Technologies : Combine PHP en POO pour la logique serveur et JavaScript pour une interface utilisateur interactive, permettant par exemple le glisser-déposer des tâches.

## Fonctionnalités

### Avancement des projets 

Pour l'avancement des projets on a deux types d'affichages qui permettent de visualiser la progression de nos projets. On a dans notre section "Dashboard" une visualisation en pourcentage avec une barre verte, ces deux là peuvent diminuer ou augmenter en fonction du nombre de tâches présentes sur le projet et de leurs statuts. On a aussi dans la section "Liste" le statut de nos projets où l'on peut avoir "En attente","Commencer","En cours","En pause","Finition","Terminer". Tout cela est en fonction toujours avec le statut et le nombre de tâches. On peut aussi créer des projets en allant dans la seciton "Ajouter" où l'on met le nom du projet, description, date de début et de fin, chef de projet, membres qui participe au projet ainsi qu'une description.

### Gérer les tâches

Pour gérer les tâches on peut aller voir dans Liste > Action > Voir, on arrive alors dans un projet où l'on voit tout notre projet dans son ensemble dont les tâches. Ces tâches nous pouvont les voir, les modifier et les créer. La création et la modification ont le même affichage où l'on a le titre de la tâche, sa description, son statut ainsi qu'une autre fonctionnalité que nous verrons un peu plus bas le glisser-déposer.

### Collaborer avec les membres de l'équipe

Pour la collaboration avec des membres de l'équipe on a une section "Messagerie" où on arrive dans une page de login, de là on peut se connecter avec son compte ou alors en créer un. Une fois la connexion faite on arrive sur une page de users où on voit la liste de tous les users qui sont créés, on en choisit un et on arrive sur la page de discussion où l'on peut discuter avec le contact.

### Système de notification

Pour notre système de notification c'est tout simple, on a dans la section un indicatif "Notifications" où l'on a juste à cliquer dessus et le logiciel nous dit si oui ou non nous avons une notification. Si oui le logiciel nous annonce le titre et le contenu de la notification.

### Système de commentaires

Pour notre système de commentaires on va dans Liste > Action > Voir et on arrive sur un de nos projets que l'on a choisis et tout en bas de la page on a la section commentaire où l'on peut poster un commentaire, le modifier et le supprimer. Lorsqu'on poste un commentaire il apparaît dans la section commentaire où on a la date et heure de poste le titre de la tâche auquel il est lié et son contenu. L'affichage de la création et de la modification de commentaires est la même.

### Glisser-déposer de documents

Pour le glisser-déposer de tâches, il est disponible lorsqu'on crée ou modifie une tâche, on a en-dessous du statut la possibilité de glisser-déposer des tâches. On sélectionne le document que l'on veut en sachant que le glisser-déposer ne supporte que certains types de documents qui sont annoncés sur la page. Une fois le document déposer une validation apparaît pour dire que le document est bien intégré. 

### Autres fonctionnalités 

Pour d'autres fonctionnalités liées à l'interface on a la possibilité sur chacune des pages de la mettre en pleine écran avec l'icône situé en haut de page juste à côté de Administrateur. On a aussi la possibilité de mettre en cache notre sidebar avec l'icône en haut à gauche représentant trois traits.

## Première utilisation

Lors de la première installation, pour les bases de données lors de la création des bases ne pas oublier de bien les nommer avec le même nom que le nom des fichiers respectifs. Par exemple lors de la création de la base de donnée avec chatapp.sql il faudra mettre chatapp comme nom de la base de donnée, même chose pour tms_db.
