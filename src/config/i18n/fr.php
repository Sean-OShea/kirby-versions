<?php

return [
	'view.versions' => 'Versions',

	'error.versions.git.nonzero' => 'Une erreur Git s\'est produite: { message }',
	'error.versions.git.version' => 'Le plugin Versions nécessite Git 2.5+, vous avez Git { version }',
	'error.versions.internal' => 'Erreur interne dans le plugin Versions (code d\'erreur { code })',
	'error.versions.instance.noRepo' => 'Le répertoire de contenu de l\'instance { instance } n\'est pas connectée à un dépôt Git, merci d\'initialiser
  un nouveau dépôt où connectez le à un arbre de travail (worktree)',
	'error.versions.instance.noWorktree' => 'Le répertoire de contenu de l\'instance { instance } n\'est pas un arbre de travail (worktree) du répertoire de contenu de ce site actuel, merci de connecter les deux instances en tant qu\'arbre de travail (worktree)',
	'error.versions.instance.onBranch' => 'Le répertoire de contenu de l\'instance { instance } a toujours une branche \'checked out\', merci d\'exécuter un `git checkout` avec son dernier nom (tag) Git',
	'error.versions.lockFiles' => 'Une version ne peut pas être créée car des pages ou des fichiers ont des modifications non sauvegardées:',
	'error.versions.noChanges' => 'Il n\'y a pas de changements à partir duquel créer une version',
	'error.versions.notPrepared' => 'La version n\'a pas encore été préparée',
	'error.versions.notFound.instance' => 'L\'instance { name } n\'existe pas',
	'error.versions.notFound.version' => 'La version { name } n\'existe pas',
	'error.versions.permission' => 'Vous n\'êtes pas autorisés à faire celà (permission { permission } manquante)',
	'error.versions.version.inUse' => 'Cette version est actuellement utilisée',

	'versions.button.copyLink' => 'Copier le lien',
	'versions.button.create' => 'Créer une version',
	'versions.button.delete' => 'Supprimer',
	'versions.button.deploy' => 'Déployer',
	'versions.button.download' => 'Télécharger',
	'versions.button.export' => 'Exporter',

	'versions.label.changes' => 'Changements',
	'versions.label.creation' => 'Création',
	'versions.label.creationData' => '{created} ({creator})',
	'versions.label.current' => 'actuelle',
	'versions.label.empty' => 'Pas encore de version',
	'versions.label.fileSize' => 'Taille du fichier',
	'versions.label.instances' => 'Instances',
	'versions.label.label' => 'Label',
	'versions.label.originInstance' => 'Instance d\'origine',
	'versions.label.status.+' => 'statut: créé',
	'versions.label.status.-' => 'statut: supprimé',
	'versions.label.status.C' => 'statut: copié',
	'versions.label.status.M' => 'statut: modifié',
	'versions.label.status.R' => 'statut: renommé',
	'versions.label.targetInstance' => 'Instance cible',
	'versions.label.versionName' => 'Nom de la version',
	'versions.label.versions' => 'Versions',

	'versions.message.delete' => 'Voulez-vous vraiment supprimer cette version?',
	'versions.message.exporting' => 'Export de la version...',

	'versions.name.autosave' => 'Instantané automatique (snapshot)',
	'versions.name.local' => 'Local',
];