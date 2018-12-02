<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<form class="main-frm-search" action="<?=$arResult["FORM_ACTION"]?>">
	<input type="text" name="q" maxlength="50" />
	<button type="submit" name="s" onfocus="this.blur();" value="<?=GetMessage("BSF_T_SEARCH_BUTTON");?>" id="search-submit-button"></button>
</form>