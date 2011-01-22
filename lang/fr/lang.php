<?php
/**
 * Fichier de traduction en français
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Bob Baddeley <bob@bobbaddeley.com>
 * @author     Arnaud Fouquaut <afouquaut@no-log.org>
 */

// settings must be present and set appropriately for the language
$lang['encoding']   = 'utf-8';
$lContact Formang['direction']  = 'ltr';

// for admin plugins, the menu prompt to be displayed in the admin menu
// if set here, the plugin doesn't need to override the getMenuText() method
$lang['menu'] = 'Formulaire de contact';

// custom language strings for the plugin
$lang["field"] = 'Champ';
$lang["value"] = 'Valeur';
$lang["name"] = 'Votre nom';
$lang["email"] = 'Votre adresse électronique';
$lang["subject"] = 'Sujet';
$lang["content"] = 'Message';
$lang["contact"] = 'Envoyer';

// error messages
$lang["error"]["unknown"] = 'Mail not sent. Please contact the administrator.';
$lang["error"]["name"] = 'Please enter a name. Should be at least 2 characters.';
$lang["error"]["email"] = 'Please enter your email address. It must be valid.';
$lang["error"]["content"] = 'Please add a comment. Should be at least 10 characters.';
$lang["error"]["captcha"] = 'Mail not sent. You could not be verified as a human.';
$lang["error"]["valid_name"] = 'Name has invalid input.';
$lang["error"]["valid_email"] = 'Email address has invalid input.';
$lang["error"]["valid_subject"] = 'Subject has invalid input.';
$lang["error"]["valid_to"] = 'Destination address has invalid input.';
$lang["error"]["valid_content"] = 'Comment has invalid input.';
$lang["success"] = 'Mail sent successfully.';

//Setup VIM: ex: et ts=2 enc=utf-8 :
?>
