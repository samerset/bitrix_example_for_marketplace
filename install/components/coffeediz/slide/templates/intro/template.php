<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);
?>

<div class="<?=$arParams['CONTEINER_CLASS'];?>" style="
	padding-top: 50px; padding-bottom: 50px;
	text-align: <?=$arParams['TEXTALIGN'];?>;
	color: <?=$arParams['TEXT_COLOR'];?>;
	background: url(<?=$arParams['BACKGRAUND_IMG'];?>) no-repeat center center;
	background-size: cover;
">

	<a <?if (!empty($arParams["SLIDE_LINK_ID"])):?>id="<?=$arParams['SLIDE_LINK_ID'];?>"<?endif?>></a>

	<div class="container">

		<div class="row">
			<div class="col-lg-12">
				<div class="intro-message">

				<?if ($arParams["BLOCK_1_TYPE"]=="H" or $arParams["BLOCK_1_TYPE"]=="H+"):?>
					<?if (!empty($arParams["STRING_1_TEXT"])):?>
						<<?=$arParams['STRING_1_TYPE'];?> style="font-size: <?=$arParams['STRING_1_SIZE'];?>em;">
							<?=$arParams['~STRING_1_TEXT'];?>
						</<?=$arParams['STRING_1_TYPE'];?>>
					<?endif?>
				<?elseif ($arParams["BLOCK_1_TYPE"]=="MENU"):?>
					<?$APPLICATION->IncludeComponent(
						"bitrix:menu", 
						$arParams['BLOCK_1_MENU_TEMPLATE'], 
						array(
							"ROOT_MENU_TYPE" => $arParams['BLOCK_1_MENU_TYPE'],
							"MENU_CACHE_TYPE" => "A",
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"MENU_CACHE_GET_VARS" => array(
							),
							"MAX_LEVEL" => $arParams['BLOCK_1_MENU_MAX_LEVEL'],
							"CHILD_MENU_TYPE" => $arParams['BLOCK_1_MENU_CHILD_MENU_TYPE'],
							"USE_EXT" => "N",
							"DELAY" => "N",
							"ALLOW_MULTI_SELECT" => "N"
						),
						false
					);?>
				<?elseif ($arParams["BLOCK_1_TYPE"]=="HTML"):?>
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => $arParams['BLOCK_1_AREA_FILE_SHOW'],
							"EDIT_TEMPLATE" => $arParams['BLOCK_1_AREA_EDIT_TEMPLATE'],
							"AREA_FILE_SUFFIX" => $arParams['BLOCK_1_AREA_FILE_SUFFIX'],
							"AREA_FILE_RECURSIVE" => $arParams['BLOCK_1_AREA_FILE_RECURSIVE'],
							"PATH" => $arParams['BLOCK_1_AREA_PATH'],
						)
					);?>
				<?elseif ($arParams["BLOCK_1_TYPE"]=="IMG"):?>
					<?if (!empty($arParams["BLOCK_1_IMG_LINK"])):?><a href="<?=$arParams['BLOCK_1_IMG_LINK'];?>"><?endif?>
					<img class="img-responsive" src="<?=$arParams['BLOCK_1_IMG_URL'];?>" alt="<?=$arParams['BLOCK_1_IMG_ALT'];?>" title="<?=$arParams['BLOCK_1_IMG_TITLE'];?>">
					<?if (!empty($arParams["BLOCK_1_IMG_LINK"])):?></a><?endif?>
				<?endif?>
				<?if ($arParams["BLOCK_1_HR"]=="Y"):?>
					<hr class="intro-divider">
				<?endif?>
				
				<!-- BLOCK -->
				
				<?if ($arParams["BLOCK_2_TYPE"]=="H" or $arParams["BLOCK_2_TYPE"]=="H+"):?>
					<?if (!empty($arParams["STRING_2_TEXT"])):?>
						<<?=$arParams['STRING_2_TYPE'];?> style="font-size: <?=$arParams['STRING_2_SIZE'];?>em;">
							<?=$arParams['~STRING_2_TEXT'];?>
						</<?=$arParams['STRING_2_TYPE'];?>>
					<?endif?>
				<?elseif ($arParams["BLOCK_2_TYPE"]=="MENU"):?>
					<?$APPLICATION->IncludeComponent(
						"bitrix:menu", 
						$arParams['BLOCK_2_MENU_TEMPLATE'], 
						array(
							"ROOT_MENU_TYPE" => $arParams['BLOCK_2_MENU_TYPE'],
							"MENU_CACHE_TYPE" => "A",
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"MENU_CACHE_GET_VARS" => array(
							),
							"MAX_LEVEL" => $arParams['BLOCK_2_MENU_MAX_LEVEL'],
							"CHILD_MENU_TYPE" => $arParams['BLOCK_2_MENU_CHILD_MENU_TYPE'],
							"USE_EXT" => "N",
							"DELAY" => "N",
							"ALLOW_MULTI_SELECT" => "N"
						),
						false
					);?>
				<?elseif ($arParams["BLOCK_2_TYPE"]=="HTML"):?>
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => $arParams['BLOCK_2_AREA_FILE_SHOW'],
							"EDIT_TEMPLATE" => $arParams['BLOCK_2_AREA_EDIT_TEMPLATE'],
							"AREA_FILE_SUFFIX" => $arParams['BLOCK_2_AREA_FILE_SUFFIX'],
							"AREA_FILE_RECURSIVE" => $arParams['BLOCK_2_AREA_FILE_RECURSIVE'],
							"PATH" => $arParams['BLOCK_2_AREA_PATH'],
						)
					);?>
				<?elseif ($arParams["BLOCK_2_TYPE"]=="IMG"):?>
					<?if (!empty($arParams["BLOCK_2_IMG_LINK"])):?><a href="<?=$arParams['BLOCK_2_IMG_LINK'];?>"><?endif?>
					<img class="img-responsive" src="<?=$arParams['BLOCK_2_IMG_URL'];?>" alt="<?=$arParams['BLOCK_2_IMG_ALT'];?>" title="<?=$arParams['BLOCK_2_IMG_TITLE'];?>">
					<?if (!empty($arParams["BLOCK_2_IMG_LINK"])):?></a><?endif?>
				<?endif?>
				<?if ($arParams["BLOCK_2_HR"]=="Y"):?>
					<hr class="intro-divider">
				<?endif?>
				
				<!-- BLOCK -->
				
				<?if ($arParams["BLOCK_3_TYPE"]=="H" or $arParams["BLOCK_3_TYPE"]=="H+"):?>
					<?if (!empty($arParams["STRING_3_TEXT"])):?>
						<<?=$arParams['STRING_3_TYPE'];?> style="font-size: <?=$arParams['STRING_3_SIZE'];?>em;">
							<?=$arParams['~STRING_3_TEXT'];?>
						</<?=$arParams['STRING_3_TYPE'];?>>
					<?endif?>
				<?elseif ($arParams["BLOCK_3_TYPE"]=="MENU"):?>
					<?$APPLICATION->IncludeComponent(
						"bitrix:menu", 
						$arParams['BLOCK_3_MENU_TEMPLATE'], 
						array(
							"ROOT_MENU_TYPE" => $arParams['BLOCK_3_MENU_TYPE'],
							"MENU_CACHE_TYPE" => "A",
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"MENU_CACHE_GET_VARS" => array(
							),
							"MAX_LEVEL" => $arParams['BLOCK_3_MENU_MAX_LEVEL'],
							"CHILD_MENU_TYPE" => $arParams['BLOCK_3_MENU_CHILD_MENU_TYPE'],
							"USE_EXT" => "N",
							"DELAY" => "N",
							"ALLOW_MULTI_SELECT" => "N"
						),
						false
					);?>
				<?elseif ($arParams["BLOCK_3_TYPE"]=="HTML"):?>
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => $arParams['BLOCK_3_AREA_FILE_SHOW'],
							"EDIT_TEMPLATE" => $arParams['BLOCK_3_AREA_EDIT_TEMPLATE'],
							"AREA_FILE_SUFFIX" => $arParams['BLOCK_3_AREA_FILE_SUFFIX'],
							"AREA_FILE_RECURSIVE" => $arParams['BLOCK_3_AREA_FILE_RECURSIVE'],
							"PATH" => $arParams['BLOCK_3_AREA_PATH'],
						)
					);?>
				<?elseif ($arParams["BLOCK_3_TYPE"]=="IMG"):?>
					<?if (!empty($arParams["BLOCK_3_IMG_LINK"])):?><a href="<?=$arParams['BLOCK_3_IMG_LINK'];?>"><?endif?>
					<img class="img-responsive" src="<?=$arParams['BLOCK_3_IMG_URL'];?>" alt="<?=$arParams['BLOCK_3_IMG_ALT'];?>" title="<?=$arParams['BLOCK_3_IMG_TITLE'];?>">
					<?if (!empty($arParams["BLOCK_3_IMG_LINK"])):?></a><?endif?>
				<?endif?>
				<?if ($arParams["BLOCK_3_HR"]=="Y"):?>
					<hr class="intro-divider">
				<?endif?>
				
				<!-- BLOCK -->
				
				<?if ($arParams["BLOCK_4_TYPE"]=="H" or $arParams["BLOCK_4_TYPE"]=="H+"):?>
					<?if (!empty($arParams["STRING_4_TEXT"])):?>
						<<?=$arParams['STRING_4_TYPE'];?> style="font-size: <?=$arParams['STRING_4_SIZE'];?>em;">
							<?=$arParams['~STRING_4_TEXT'];?>
						</<?=$arParams['STRING_4_TYPE'];?>>
					<?endif?>
				<?elseif ($arParams["BLOCK_4_TYPE"]=="MENU"):?>
					<?$APPLICATION->IncludeComponent(
						"bitrix:menu", 
						$arParams['BLOCK_4_MENU_TEMPLATE'], 
						array(
							"ROOT_MENU_TYPE" => $arParams['BLOCK_4_MENU_TYPE'],
							"MENU_CACHE_TYPE" => "A",
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"MENU_CACHE_GET_VARS" => array(
							),
							"MAX_LEVEL" => $arParams['BLOCK_4_MENU_MAX_LEVEL'],
							"CHILD_MENU_TYPE" => $arParams['BLOCK_4_MENU_CHILD_MENU_TYPE'],
							"USE_EXT" => "N",
							"DELAY" => "N",
							"ALLOW_MULTI_SELECT" => "N"
						),
						false
					);?>
				<?elseif ($arParams["BLOCK_4_TYPE"]=="HTML"):?>
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => $arParams['BLOCK_4_AREA_FILE_SHOW'],
							"EDIT_TEMPLATE" => $arParams['BLOCK_4_AREA_EDIT_TEMPLATE'],
							"AREA_FILE_SUFFIX" => $arParams['BLOCK_4_AREA_FILE_SUFFIX'],
							"AREA_FILE_RECURSIVE" => $arParams['BLOCK_4_AREA_FILE_RECURSIVE'],
							"PATH" => $arParams['BLOCK_4_AREA_PATH'],
						)
					);?>
				<?elseif ($arParams["BLOCK_4_TYPE"]=="IMG"):?>
					<?if (!empty($arParams["BLOCK_4_IMG_LINK"])):?><a href="<?=$arParams['BLOCK_4_IMG_LINK'];?>"><?endif?>
					<img class="img-responsive" src="<?=$arParams['BLOCK_4_IMG_URL'];?>" alt="<?=$arParams['BLOCK_4_IMG_ALT'];?>" title="<?=$arParams['BLOCK_4_IMG_TITLE'];?>">
					<?if (!empty($arParams["BLOCK_4_IMG_LINK"])):?></a><?endif?>
				<?endif?>
				<?if ($arParams["BLOCK_4_HR"]=="Y"):?>
					<hr class="intro-divider">
				<?endif?>
				
				<!-- BLOCK -->
				
				<?if ($arParams["BLOCK_5_TYPE"]=="H" or $arParams["BLOCK_5_TYPE"]=="H+"):?>
					<?if (!empty($arParams["STRING_5_TEXT"])):?>
						<<?=$arParams['STRING_5_TYPE'];?> style="font-size: <?=$arParams['STRING_5_SIZE'];?>em;">
							<?=$arParams['~STRING_5_TEXT'];?>
						</<?=$arParams['STRING_5_TYPE'];?>>
					<?endif?>
				<?elseif ($arParams["BLOCK_5_TYPE"]=="MENU"):?>
					<?$APPLICATION->IncludeComponent(
						"bitrix:menu", 
						$arParams['BLOCK_5_MENU_TEMPLATE'], 
						array(
							"ROOT_MENU_TYPE" => $arParams['BLOCK_5_MENU_TYPE'],
							"MENU_CACHE_TYPE" => "A",
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"MENU_CACHE_GET_VARS" => array(
							),
							"MAX_LEVEL" => $arParams['BLOCK_5_MENU_MAX_LEVEL'],
							"CHILD_MENU_TYPE" => $arParams['BLOCK_5_MENU_CHILD_MENU_TYPE'],
							"USE_EXT" => "N",
							"DELAY" => "N",
							"ALLOW_MULTI_SELECT" => "N"
						),
						false
					);?>
				<?elseif ($arParams["BLOCK_5_TYPE"]=="HTML"):?>
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => $arParams['BLOCK_5_AREA_FILE_SHOW'],
							"EDIT_TEMPLATE" => $arParams['BLOCK_5_AREA_EDIT_TEMPLATE'],
							"AREA_FILE_SUFFIX" => $arParams['BLOCK_5_AREA_FILE_SUFFIX'],
							"AREA_FILE_RECURSIVE" => $arParams['BLOCK_5_AREA_FILE_RECURSIVE'],
							"PATH" => $arParams['BLOCK_5_AREA_PATH'],
						)
					);?>
				<?elseif ($arParams["BLOCK_5_TYPE"]=="IMG"):?>
					<?if (!empty($arParams["BLOCK_5_IMG_LINK"])):?><a href="<?=$arParams['BLOCK_5_IMG_LINK'];?>"><?endif?>
					<img class="img-responsive" src="<?=$arParams['BLOCK_5_IMG_URL'];?>" alt="<?=$arParams['BLOCK_5_IMG_ALT'];?>" title="<?=$arParams['BLOCK_5_IMG_TITLE'];?>">
					<?if (!empty($arParams["BLOCK_5_IMG_LINK"])):?></a><?endif?>
				<?endif?>
				<?if ($arParams["BLOCK_5_HR"]=="Y"):?>
					<hr class="intro-divider">
				<?endif?>
				
				




				</div>
			</div>
		</div>

	</div>
	<!-- /.container -->

</div>