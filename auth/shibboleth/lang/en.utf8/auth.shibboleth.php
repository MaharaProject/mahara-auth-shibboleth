<?php

defined('INTERNAL') || die();
require_once dirname(__FILE__) . '/../../lib.php';

$string['about_aai'] = 'About AAI';
$string['login_switchaai'] = 'Login SWITCHaai';
$string['switchaai_login'] = 'SWITCHaai Login';
$string['hug'] = 'HUG - University Hospitals of Geneva';
$string['unige'] = 'University of Geneva';
$string['other_switch_members'] = 'Other members of Switch';

$string['title'] = 'Shibboleth';
$string['faq'] = 'Faq';
$string['help'] = 'Help';
$string['privacy'] = 'Privacy';
$string['internal_login'] = 'Internal Login';

$string['description'] = 'Authenticate with Shibboleth';

$string['error_no_shibboleth_fields'] = 'Posted data do not contain Shibboleth fields. Security configuration seems to be missing.';
$string['error_internal_login_failed'] = 'Internal login failed. Please check the error log.';

$string['shibboleth_link_name'] = 'Identity provider name';
$string['shibboleth_username'] = 'Shibboleth field for User Name';
$string['shibboleth_firstname'] = 'Shibboleth field for First Name';
$string['shibboleth_lastname'] = 'Shibboleth field for Last Name';
$string['shibboleth_email'] = 'Shibboleth field for Email';
$string['shibboleth_student_id'] = 'Shibboleth field for Student Id';

$string[PluginAuthShibboleth::CREATE_ACTIVE] = 'Activate new accounts';

$string[PluginAuthShibboleth::IS_ADMIN_FIELD . '_title'] = 'Site Admin Membership';
$string[PluginAuthShibboleth::IS_ADMIN_FIELD] = 'Shibboleth field';
$string[PluginAuthShibboleth::IS_ADMIN_VALUE] = 'Value';
$string[PluginAuthShibboleth::IS_ADMIN_REGEX] = 'Is value a regex';

$string[PluginAuthShibboleth::IS_STAFF_FIELD . '_title'] = 'Site Staff Membership';
$string[PluginAuthShibboleth::IS_STAFF_FIELD] = 'Shibboleth field';
$string[PluginAuthShibboleth::IS_STAFF_VALUE] = 'Value';
$string[PluginAuthShibboleth::IS_STAFF_REGEX] = 'Is value a regex';

$string[PluginAuthShibboleth::INSTITUTION_IS_ADMIN_FIELD . '_title'] = 'Institution Admin Membership';
$string[PluginAuthShibboleth::INSTITUTION_IS_ADMIN_FIELD] = 'Shibboleth field';
$string[PluginAuthShibboleth::INSTITUTION_IS_ADMIN_VALUE] = 'Value';
$string[PluginAuthShibboleth::INSTITUTION_IS_ADMIN_REGEX] = 'Is value a regex';

$string[PluginAuthShibboleth::INSTITUTION_IS_STAFF_FIELD . '_title'] = 'Institution Staff Membership';
$string[PluginAuthShibboleth::INSTITUTION_IS_STAFF_FIELD] = 'Shibboleth field';
$string[PluginAuthShibboleth::INSTITUTION_IS_STAFF_VALUE] = 'Value';
$string[PluginAuthShibboleth::INSTITUTION_IS_STAFF_REGEX] = 'Is value a regex';

$string[PluginAuthShibboleth::INSTITUTION_FIELD . '_title'] = 'Institution Membership';
$string[PluginAuthShibboleth::INSTITUTION_FIELD] = 'Shibboleth field';
$string[PluginAuthShibboleth::INSTITUTION_VALUE] = 'Value';
$string[PluginAuthShibboleth::INSTITUTION_REGEX] = 'Is value a regex';

$string[PluginAuthShibboleth::UPDATE_USER_DATA] = 'Update user data';
$string[PluginAuthShibboleth::REGISTRATION] = 'Registration';
$string[PluginAuthShibboleth::NOTIFY_SITE_ADMIN] = 'Notify site administrators';
$string[PluginAuthShibboleth::NOTIFY_INSTITUTION_ADMIN] = 'Notify institution administrators';

$string['new_users'] = 'New users';

$string['firstname'] = 'First name';
$string['lastname'] = 'Last name';
$string['email'] = 'Email';
$string['course'] = 'Course';
$string['reason'] = 'Reason';
$string['send_request'] = 'Send request';
$string['this_field_is_required'] = 'This field is required';
$string['username'] = 'User name';
$string['your_request_has_been_sent_message'] = 'Your request has been sent to the administrator. You will receive an email when you account is activated.';
$string['mahara_account_creation_request_for'] = 'Mahara: Account creation request (%s)';
$string['creation_of_account'] = 'Creation of an account';
$string['date'] = 'Date';
$string['empty_registration'] = 'Empty';
$string['course_registration'] = 'Course';
$string['account_inactive_message'] = 'Your account is not active';
$string['site_closed'] = 'The site is closed';




?>