<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<div class="article-card">
	<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
        <div class="article-card__title"><?=$arResult["NAME"]?></div>
    <?endif;?>
    <?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
		<div class="article-card__date"><?echo $arResult["DISPLAY_ACTIVE_FROM"]?></div>
	<?endif?>
	<div class="article-card__content">
	<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
		<div class="article-card__image sticky">
			<img
				class="card-img-top"
				src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
				alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
				title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
			/>
		</div>
	<?endif?>
	<?if($arResult["NAV_RESULT"]):?>
        <?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
        <?echo $arResult["NAV_TEXT"];?>
        <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
    	<?elseif(strlen($arResult["DETAIL_TEXT"])>0):?>
        <div class="article-card__text">
            <div class="block-content" data-anim="anim-3">
        		<?echo $arResult["DETAIL_TEXT"];?>
    		</div>
    	<?else:?>
    	    <?echo $arResult["PREVIEW_TEXT"];?>
  		<?endif?>
		<a class="article-card__button" href="<?=$arResult["LIST_PAGE_URL"]?>">Назад к новостям</a>
</div>
</div>