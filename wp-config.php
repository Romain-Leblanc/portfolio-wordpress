<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'portfolio-wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'acZDojM7Ihg{Qx{,>)z{|T?uVB4=(pSIyySACn$~I8^a4V4B1g&lAO7Hb~ycZIm8' );
define( 'SECURE_AUTH_KEY',  '3[HL$]u[vqSdSId:XrD;m|va6qx:fffHxCX6dS9V/tUVfV785uQ!^3KM^Y53LTnK' );
define( 'LOGGED_IN_KEY',    ')7Jo92pQ[_1:YrEmwnMQa%wbZ/2.$gEg-7 2vcc2P.Y MJ@]>dRKAZKL])y% :j-' );
define( 'NONCE_KEY',        'z4NSCVu*LVc;#!SkPquD1K3]vPw;~%S^nB-|^r`T5Yk[@v4Vi_h>AzQF4lRScUl8' );
define( 'AUTH_SALT',        '} Q{SpPSfwpMrS+q=dn@D3bMNl1$f0]rh5x3[.w0bzv{>h/;LSb!awLMw#>F_}pb' );
define( 'SECURE_AUTH_SALT', ';Q.~dv(g~V^xaHlJ;*nJb(XWGw*T!WA?b%{./Nn?!n@dR_Pu/(Clae0>zF^)ifqI' );
define( 'LOGGED_IN_SALT',   '80p_^utV/RLCti7 !>]:|@Rqe;vUE2Rr?XA5N~yP_NE=Vwh&A#x;<=#|E+P]FJ<f' );
define( 'NONCE_SALT',       'nOdH7c6c5: jI{JuyI2*[:c9Oz<C4DUE*;3AY59354`YKr3#v,FQND xjF&RGiD2' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'cv_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
