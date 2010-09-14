{include file="header.tpl"}

<div>

	<div class="sideblock-content"
		style="margin:5px; border-style: solid; border-width: 1px; padding: 5px; border-color: #CCCCCC; float:left;">
		{include(file="sideblocks/login_switch_unige.tpl")}
	</div>
	
	<div style=" margin:5px; border-style: solid; border-width: 1px; padding: 5px; border-color: #CCCCCC; float:left;"
		<h3 style="margin-top:5px;margin-bottom:5px;"  >{str tag="internal_login" section="auth.shibboleth"}</h3>
		<div id="loginform_container" >
			<noscript><p>{str tag="javascriptnotenabled"}</p></noscript>
		    {$login_form}
		</div>
	</div>
</div>
			
{include file="footer.tpl"}
