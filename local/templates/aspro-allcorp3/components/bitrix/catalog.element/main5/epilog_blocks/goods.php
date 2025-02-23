<?
use \Bitrix\Main\Localization\Loc;

$bTab = isset($tabCode) && $tabCode === 'goods';
?>
<?//show goods block?>
<?if($templateData['GOODS']['VALUE']):?>
    <?if(!isset($html_goods)):?>
        <?
        $GLOBALS['arrGoodsFilter'] = array('ID' => $templateData['GOODS']['VALUE']);
        $GLOBALS['arrGoodsFilter'] = array_merge($GLOBALS['arrGoodsFilter'], (array)$GLOBALS['arRegionLink']);
        
        $bCheckAjaxBlock = CAllcorp3::checkRequestBlock("goods-list-inner");
        $isAjax = (CAllcorp3::checkAjaxRequest() && $bCheckAjaxBlock ) ? 'Y' : 'N';
        ?>
        <?ob_start();?>
            <?TSolution\Functions::showBlockHtml([
                'FILE' => '/detail_linked_goods.php',
                'PARAMS' => array_merge(
                    $arParams,
                    array(
                        'ORDER_VIEW' => $bOrderViewBasket,
                        'ITEM_1200' => '3',
                        'CHECK_REQUEST_BLOCK' => $bCheckAjaxBlock,
					    'IS_AJAX' => $isAjax,
                    )
                )
            ]);?>
        <?$html_goods = trim(ob_get_clean());?>
    <?endif;?>

    <?if($html_goods && strpos($html_goods, 'error') === false):?>
        <?if($bTab):?>
            <?if(!isset($bShow_goods)):?>
                <?$bShow_goods = true;?>
            <?else:?>
                <div class="tab-pane <?=(!($iTab++) ? 'active' : '')?>" id="goods">
                    <div class="ordered-block__title switcher-title font_22"><?=$arParams["T_GOODS"]?></div>
                    <div class="ajax-pagination-wrapper" data-class="goods-list-inner">
                        <?if ($isAjax === 'Y'):?>
                            <?$APPLICATION->RestartBuffer();?>
                        <?endif;?>
                            <?=$html_goods?>
                        <?if ($isAjax === 'Y'):?>
                            <?die();?>
                        <?endif;?>
                    </div>
                </div>
            <?endif;?>
        <?else:?>
            <div class="detail-block ordered-block goods">
                <div class="ordered-block__title switcher-title font_22"><?=$arParams["T_GOODS"]?></div>
                <div class="ajax-pagination-wrapper" data-class="goods-list-inner">
                    <?if ($isAjax === 'Y'):?>
                        <?$APPLICATION->RestartBuffer();?>
                    <?endif;?>
                        <?=$html_goods?>
                    <?if ($isAjax === 'Y'):?>
                        <?die();?>
                    <?endif;?>
                </div>
            </div>
        <?endif;?>
    <?endif;?>
<?endif;?>