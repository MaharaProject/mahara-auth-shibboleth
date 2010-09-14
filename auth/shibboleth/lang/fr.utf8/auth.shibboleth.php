<?php

defined('INTERNAL') || die();
require_once dirname(__FILE__) . '/../../lib.php';

$string['about_aai'] = 'AAI';
$string['login_switchaai'] = 'Login SWITCHaai';
$string['switchaai_login'] = 'Se connecter avec SWITCHaai';
$string['hug'] = 'HUG - Hôpitaux Universitaires de Genève ';
$string['unige'] = 'Université de Genève';
$string['other_switch_members'] = 'Autres membres de Switch';

$string['title'] = 'Shibboleth';
$string['faq'] = 'Faq';
$string['help'] = 'Aide';
$string['privacy'] = 'Protection des données';
$string['internal_login'] = 'Se connecter avec un compte interne';

$string['description'] = 'S\'identifier avec Shibboleth';

$string['error_no_shibboleth_fields'] = 'Les données reçues ne contiennent pas de champs Shibboleth. La sécurité ne semble pas avoir été configurée.';
$string['error_internal_login_failed'] = 'La connection a échoué. Veuillez vérifier le log d\'erreur.';

$string['shibboleth_link_name'] = 'Nom du fournisseur d\'accès';
$string['shibboleth_username'] = 'Champs Shibboleth pour le nom de l\'utilisateur';
$string['shibboleth_firstname'] = 'Champs Shibboleth pour le prénom';
$string['shibboleth_lastname'] = 'Champs Shibboleth pour le nom de famille';
$string['shibboleth_email'] = 'Champs Shibboleth pour l\'adresse électronique';
$string['shibboleth_student_id'] = 'Champs Shibboleth pour le matricule étudiant';

$string[PluginAuthShibboleth::IS_ADMIN_FIELD . '_title'] = 'Administrateur du site';
$string[PluginAuthShibboleth::IS_ADMIN_FIELD] = 'Champs Shibboleth';
$string[PluginAuthShibboleth::IS_ADMIN_VALUE] = 'Valeur';
$string[PluginAuthShibboleth::IS_ADMIN_REGEX] = 'Expression régulière';

$string[PluginAuthShibboleth::IS_STAFF_FIELD . '_title'] = 'Personnel du site';
$string[PluginAuthShibboleth::IS_STAFF_FIELD] = 'Champs Shibboleth';
$string[PluginAuthShibboleth::IS_STAFF_VALUE] = 'Valeur';
$string[PluginAuthShibboleth::IS_STAFF_REGEX] = 'Expression régulière';

$string[PluginAuthShibboleth::INSTITUTION_IS_ADMIN_FIELD . '_title'] = 'Administrateur de l\'institution';
$string[PluginAuthShibboleth::INSTITUTION_IS_ADMIN_FIELD] = 'Champs Shibboleth';
$string[PluginAuthShibboleth::INSTITUTION_IS_ADMIN_VALUE] = 'Valeur';
$string[PluginAuthShibboleth::INSTITUTION_IS_ADMIN_REGEX] = 'Expression régulière';

$string[PluginAuthShibboleth::INSTITUTION_IS_STAFF_FIELD . '_title'] = 'Personnel du l\'institution';
$string[PluginAuthShibboleth::INSTITUTION_IS_STAFF_FIELD] = 'Champs Shibboleth';
$string[PluginAuthShibboleth::INSTITUTION_IS_STAFF_VALUE] = 'Valeur';
$string[PluginAuthShibboleth::INSTITUTION_IS_STAFF_REGEX] = 'Expression régulière';

$string[PluginAuthShibboleth::INSTITUTION_FIELD . '_title'] = 'Membre de l\'institution';
$string[PluginAuthShibboleth::INSTITUTION_FIELD] = 'Champs Shibboleth';
$string[PluginAuthShibboleth::INSTITUTION_VALUE] = 'Valeur';
$string[PluginAuthShibboleth::INSTITUTION_REGEX] = 'Expression régulière';

$string[PluginAuthShibboleth::UPDATE_USER_DATA] = 'Mise à jour des données utilisateur';
$string[PluginAuthShibboleth::REGISTRATION] = 'Enregistrement';
$string[PluginAuthShibboleth::NOTIFY_SITE_ADMIN] = 'Notifier les administrateurs du site';
$string[PluginAuthShibboleth::NOTIFY_INSTITUTION_ADMIN] = 'Notifier les administateurs de l\'institution';


$string['new_users'] = 'Nouveaux utilisateurs';

$string['firstname'] = 'Prénom';
$string['lastname'] = 'Nom de famille';
$string['email'] = 'Email';
$string['course'] = 'Cours';
$string['reason'] = 'Raison';
$string['send_request'] = 'Envoyé la demande';
$string['this_field_is_required'] = 'Ce champs est obligatoire';
$string['username'] = 'Nom d\'utilisateur';
$string['mahara_account_creation_request_for'] = 'Mahara: Demande de création de compte (%s)';
$string['your_request_has_been_sent_message'] = 'Votre demande d\'accès a été transmise à l\'administrateur. Vous recevrez un email de confirmation lors de l\'activation de votre compte.';
$string['creation_of_account'] = 'Création d\'un compte';
$string['date'] = 'Date';
$string['empty_registration'] = 'Vide';
$string['course_registration'] = 'Cours';
$string['account_inactive_message'] = 'Votre compte est désactivé';
$string['site_closed'] = 'Le site web est fermé';








?>