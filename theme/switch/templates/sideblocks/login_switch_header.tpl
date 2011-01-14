<img src="<?php echo get_config('wwwroot') . 'theme/switch/static/images/switch/switch-aai.gif'; ?>" width="139"
     height="16" alt="switch-aai-logo" class="switchaai"
     style="display:inline;" />
<br />

<?php
global $CFG;
$lang = $CFG->lang;
$lang = substr($lang, 0, 2);
$lang = ($lang == 'en') ?  '' : $lang . '/';
?>

<span class="switchaai"><a href="http://www.switch.ch/<?php echo $lang ?>aai/about/"
                           class="switchaai">{str tag="about_aai" section="auth.shibboleth"}</a>&nbsp;:&nbsp;<a
                           href="http://www.switch.ch/<?php echo $lang ?>aai/faq/" class="switchaai">{str tag="faq" section="auth.shibboleth"}</a>&nbsp;:&nbsp;<a
                           href="http://www.switch.ch/<?php echo $lang ?>aai/help/" class="switchaai">{str tag="help" section="auth.shibboleth"}</a>&nbsp;:&nbsp;<a
                           href="http://www.switch.ch/<?php echo $lang ?>aai/privacy/" class="switchaai">{str tag="privacy" section="auth.shibboleth"}</a>
</span>