<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'db_wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'user');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'password');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}lOOS|>]yBr$l8V[rna3<gVo$T>c3p]QM>M +yt?iGZ|7@2<7) )Y`l;IR?9]5m8');
define('SECURE_AUTH_KEY',  '<-@Cd6o*.qR4;RdrZW+R+|c+Rf@muyjw!,fs_t^[0+VMRZ*9Ubcx@f_lypP)}wHX');
define('LOGGED_IN_KEY',    'M+Of)Chd!U-0N7qXEA8Cn8z<?v`^fN>$tsRytrkQ *L95k3.OKTm^X}EufQs!gh;');
define('NONCE_KEY',        'QgCrA}GwrOo&tpf[3(5+b{t3`-=/KCacH{^P%xbv/4D?7qR# .*{(fTNr`p:ysVJ');
define('AUTH_SALT',        'Msj3MpZ)?+S1%??6`)kJN,:s(ce9kEg]+#*?joLL+kTJqjVXO#2zzf)iIcNO{Kz>');
define('SECURE_AUTH_SALT', 'G@e9_KMCPJk%R$a$.?:6Rg950<EF,5{?rrX&OFI,@}%A.t9SesbH,qzff:>6%JFd');
define('LOGGED_IN_SALT',   '{/Ld-vaCCc-Z-M,/<.A>)c;bna;>^6${Mn{8;K+=il~L)HXFCsC~{IS,DD>)[g6#');
define('NONCE_SALT',       '57-~D(t])pVD#5k7B_j=-bw>KlY>qrZWg 8k]7?1b%}@!pcFh)S&sGT#|?:kSt2K');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
