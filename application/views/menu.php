<div id="topBar">
	<ul id="tabs">
	</ul>
<? if($this->user->isLogged()){?>
	<div id="topMenu">
		<a href="/#user/profile"><?=$this->user->name?></a>
		<a href="/logout" target="_top">退出</a>
	</div>
<?}?>
</div>
