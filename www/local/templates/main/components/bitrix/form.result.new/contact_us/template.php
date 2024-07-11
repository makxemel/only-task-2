<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if ($arResult["isFormErrors"] == "Y"):?><?endif;?>
<?=$arResult["FORM_NOTE"]?>
<?if ($arResult["isFormNote"] != "Y")
{
    ?>
    <div class="contact-form">
    <div class="contact-form__head">
        <div class="contact-form__head-title"><?=$arResult["FORM_TITLE"]?></div>
        <div class="contact-form__head-text"><?=$arResult["FORM_DESCRIPTION"]?></div>
    </div>
    <?= str_replace('<form', '<form class="contact-form__form"', $arResult["FORM_HEADER"]) ?>
        <?php $classParent = 'contact-form__form-inputs'; ?>
        <?php $classChild = 'input contact-form__input'; ?>
        <div class="<?php echo $classParent ?>">
        <?
        foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion)
        {
            if ($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'hidden')
            {
                echo $arQuestion["HTML_CODE"];
            }
            else
            {
                if ($arQuestion['STRUCTURE'][0]['ID'] <= 4) {
                    $classParent = 'contact-form__form-inputs';
                    $classChild = 'input contact-form__input';
                    ?>
                    <div class="<?= $classChild ?>">
                        <label class="input__label" for="medicine_name">
                            <div class="input__label-text"><?=$arQuestion["CAPTION"]?><?if ($arQuestion["REQUIRED"] == "Y"):?><?=$arResult["REQUIRED_SIGN"];?><?endif;?></div>
                            <?= str_replace('class="inputtext"', 'class="input__input"', $arQuestion["HTML_CODE"])?>
                            <?php if ($arResult["isFormErrors"] === "Y"): ?>
                                <div class="errors">
                                    <?=$arResult["FORM_ERRORS"][$FIELD_SID]?>
                                </div>
                            <? endif; ?>
                        </label>
                    </div>
                    <?
                }
                if ($arQuestion['STRUCTURE'][0]['ID'] == 5) {
                    $classParent = 'contact-form__form-message';
                    $classChild = 'input';
                    ?>
                    </div>
                    <div class="<?= $classParent ?>">
                        <div class="<?= $classChild ?>">
                            <label class="input__label" for="medicine_message">
                                <div class="input__label-text"><?= $arQuestion["CAPTION"]?><?if ($arQuestion["REQUIRED"] == "Y"):?><?=$arResult["REQUIRED_SIGN"];?><?endif;?></div>
                                <?= str_replace('class="inputtextarea"', 'class="input__input"', $arQuestion["HTML_CODE"])?>
                                <div class="input__notification"></div>
                            </label>
                        </div>
                    </div>
                <?php
                }
                if ($arQuestion['STRUCTURE'][0]['ID'] == 6) { ?>
                    <div class="contact-form__bottom">
                        <div class="contact-form__bottom-policy"><?=$arQuestion["CAPTION"]?></div>
                        <input class="form-button contact-form__bottom-button" type="submit" name="web_form_submit" value="Оставить заявку" />
                    </div>
                    <?
                }
                ?>
        <?
            }
        } //endwhile
        ?>
    <?=$arResult["FORM_FOOTER"]?>
<?
}//endif (isFormNote)