# Intégration continue grâce aux GitHub Actions

Lorsqu’on modifie un code existant, que ce soit pour corriger un bug ou introduire une nouvelle fonctionnalité, il y a un risque de régression. On dit que le code a régressé quand avant il fonctionnait bien et que, suite à une modification, il ne marche plus, ou il marche moins bien.

Pour éviter les régressions, on peut mettre en place des tests unitaires. Ce sont des tests qui vont vérifier le résultat d’une fonction. Ainsi, à chaque modification du code, on pourra lancer les tests unitaires pour vérifier que le code n’a pas régressé. Ça permet d’avoir l’esprit plus tranquille lorsqu’on modifie un code existant.

Le problème avec les tests unitaires, c’est qu’il ne faut pas oublier de les exécuter. Ils ne se lanceront pas tout seul ! C’est là que GitHub Actions entre en scène. Cette fonctionnalité permet d’exécuter du code lors d’un événement sur GitHub. On va par exemple pouvoir exécuter nos tests unitaires à chaque fois qu’on pousse du code sur GitHub. Comme ça, si on oublie de les lancer en local, GitHub les lancera pour nous et nous indiquera s’il y a un souci avec notre code.


## Objectifs

 - Découvrir GitHub Actions
 - Utiliser des tests unitaires pour guider le développement d’une bibliothèque

## Modalités

 - 30 à 45 min pour découvrir GitHub Actions
 - 1h30 à 2h pour corriger et coder les fonctions de la bibliothèque


## Étapes


### Étape 1

Nous allons nous servir de GitHub Actions pour faire du TDD, acronyme anglais de _Test Driven Development_. Faîtes une recherche internet pour comprendre ce qui se cache derrière ce terme.

C’est bon ? Vous avez compris comment marche la méthode TDD ? Quels sont ses avantages ? Ses inconvénients ? Si c’est bon, on passe à la suite, sinon, cherchez encore ou posez des questions pour être sûr d’avoir compris !


### Étape 2

À présent, il est temps de jouer un peu avec GitHub Actions. Suivez le tutoriel d’introduction dans la [documentation officielle](https://docs.github.com/en/actions/quickstart). Comme expliqué, créez un dépôt pour tester cette fonctionnalité.

À chaque nouveau _push_, l’action que vous avez programmée sera exécutée. Faîtes quelques _push_ supplémentaires pour le vérifier.

À part afficher quelques lignes et la liste des fichiers, l’action du tutoriel ne sert pas à grand-chose. Néanmoins, il fallait bien commencer quelque part !


### Étape 3

Il est temps de combiner les deux notions précédentes. Clonez ce dépôt Git.

Ce dépôt contient du code PHP. Il y a deux fichiers : un fichier avec des tests unitaires et un fichier avec des fonctions de la bibliothèque qu’on cherche à développer. Enfin, pour le moment, il n’y a qu’une fonction. Et en plus de ça, elle ne fonctionne pas bien. Elle ne passe pas les tests unitaires.

En plus des fichiers PHP, il y a le fichier `.github/workflows/tests.yml`. Ce dernier explique à GitHub qu’il doit installer PHP et lancer les tests unitaires à chaque fois qu’on pousse le code.

Il faut donc envoyer ce code sur un nouveau dépôt GitHub que vous devez créer. N’hésitez pas à relire l’activité sur la gestion des dépôts distants si vous avez du mal à pousser ce code sur votre GitHub.

Une fois le dépôt en ligne, vous pouvez aller dans l’onglet Actions voir ce qui se passe.


### Étape 4

Corrigez l’erreur dans la fonction `trouver_min`. Vous pouvez vérifier localement que les tests passent pour cette fonction en lançant la commande `php -r "require('tests.php'); test_trouver_min();"`. Tant que les tests ne sont pas OK pour cette fonction-là, continuez à chercher l’erreur. Mais une fois que c’est bon, que les tests passent, vous pouvez faire un commit et l’envoyer sur GitHub.

L’action sera toujours en échec. Mais l'un des jobs sera vert ! Ça veut dire qu’on a progressé dans notre développement.

Il est à présent temps de coder les autres fonctions de la bibliothèque pour passer plus de tests. Gardez bien la procédure suivante en tête :

 1. Je code une fonction.
 2. Je vérifie que les tests pour cette fonction passent en local.
 3. Si ce n’est pas le cas, j’améliore ma fonction et je relance les tests autant de fois que nécessaire.
 4. Quand ma fonction est prête, je fais un commit.
 5. Je pousse mon code sur GitHub et vérifie la progression.
 6. On recommence tant que tout n’est pas développé.

Si vous procédez ainsi, vous ferez de beaux commits atomiques. C’est-à-dire que chaque commit contiendra une nouvelle fonctionnalité complète. On pourra revenir sur n’importe quel commit plus tard et le projet sera à chaque fois dans un état fonctionnel.


## Aller plus loin

À votre tour de mettre du TDD en place. Vous pouvez créer un nouveau projet PHP, avec un dépôt Git associé. Le projet consistera à réaliser une bibliothèque de calcul vectoriel : addition de deux vecteurs et multiplication d’un vecteur par un scalaire.

Commencez par mettre en place les tests. Ajoutez ensuite votre bibliothèque et améliorez-la au fur et à mesure pour qu’elle passe de plus en plus de tests. Pour la partie intégration continue grâce aux GitHub Actions, vous pouvez récupérer le fichier `.github/workflows/tests.yml` de ce projet-ci. Modifiez-le si nécessaire.

S’il vous reste encore du temps, ajoutez le produit scalaire de deux vecteurs à votre bibliothèque. Mais n’oubliez pas d’ajouter les tests en priorité !
