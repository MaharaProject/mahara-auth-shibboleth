<?php
$host = $_SERVER['HTTP_HOST'];

$sso = "https://$host/Shibboleth.sso/Login";
$target = urlencode (get_config('wwwroot') . 'auth/shibboleth/login/login.php');

$entity_id = urlencode('https://idp.unige.ch/idp/shibboleth');
$unige = $sso . '?entityID=' . $entity_id . '&target=' . $target;

$entity_id = 'https%3A%2F%2Faai.hcuge.ch%2Fidp%2Fshibboleth';
$hug = $sso . '?entityID=' . $entity_id . '&target=' . $target;

$switch = get_config('wwwroot') . 'auth/shibboleth/login/login.php';
?>

<ul>
    <li>
        <a href="<?php echo $unige; ?>">
				{str tag="unige" section="auth.shibboleth"}
        </a>
    </li>
    <li>
        <a href="<?php echo $hug; ?>">
				{str tag="hug" section="auth.shibboleth"}
        </a>
    </li>
    <li>
        <a href="<?php echo $switch; ?>">
				{str tag="other_switch_members" section="auth.shibboleth"}
        </a>
    </li>
</ul>