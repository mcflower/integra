<table border="0" cellpadding="0" cellspacing="0"
       class="ond-element ond-block ond-block-text ondElementCaller"
       style="width: 100%;">
    <tr>
        <td class="ond-element-content"
            style="padding: 20px 30px 10px;" align="left" valign="top">
            <p class="ond-paragraph"
               style="color: #000000; font-size: 16px; margin: 0px; font-family: Arial,Helvetica,sans-serif; text-indent: 0px; padding: 0px; line-height: 150%;">
                Здравствуйте, <?= $user->name ?>!
            </p>
        </td>
    </tr>
</table>
<table border="0" cellpadding="0" cellspacing="0"
       class="ond-element ond-block ond-block-text ondElementCaller"
       style="width: 100%;">
    <tr>
        <td class="ond-element-content"
            style="padding: 20px 30px 40px;" align="justify" valign="top">
            <p class="ond-paragraph" style="color: #000000; font-size: 16px; margin: 0px; font-family: Arial,Helvetica,sans-serif; text-indent: 0px; padding: 0px; line-height: 150%;">Доступна запись вебинара "<?=$activity->name?>" (до <?=date('d.m.Y', ($activity->expired - 24 * 60 * 60))?>).</p><br>
            <p style="text-align:center;" class="cwd"><a style="display: inline-block;cursor: pointer; font-size:14px;  text-decoration: none; padding:10px 20px; color:#ffffff; background-color:#7accee; border-radius:5px; border: 3px solid #7accee;" href='https://integraforlife.com/video/<?= $activity->vimeo ?>' target="_blank" class="cwda" title="Смотреть видео">Смотреть видео</a></p>
            <?php if($needCertLink): ?>
            <br/>
            <p style="text-align:center;" class="cwd"><a style="display: inline-block;cursor: pointer; font-size:14px;  text-decoration: none; padding:10px 20px; color:#ffffff; background-color:#c0dabc; border-radius:5px; border: 3px solid #c0dabc;" href='https://integraforlife.com/personal-certificate/<?= $user->hash ?>' target="_blank" class="cwda" title="Открыть сертификат">Открыть сертификат</a></p>
            <?php endif; ?>
            <hr>
            <p class="ond-paragraph" style="color: #000000; font-size: 16px; margin: 0px; font-family: Arial,Helvetica,sans-serif; text-indent: 0px; padding: 0px; line-height: 150%;">С уважением, Анна Холодова</p><br>
        </td>
    </tr>
</table>
