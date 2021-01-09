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
            <p class="ond-paragraph" style="color: #000000; font-size: 16px; margin: 0px; font-family: Arial,Helvetica,sans-serif; text-indent: 0px; padding: 0px; line-height: 150%;">Ранее вы подписывались на уведомление об открытии регистрации на вебинар "<?=$activity->name?>".</p><br>
            <p class="ond-paragraph" style="color: #000000; font-size: 16px; margin: 0px; font-family: Arial,Helvetica,sans-serif; text-indent: 0px; padding: 0px; line-height: 150%;">Регистрация открыта. Вебинар "<?=$activity->name?>" состоится <?=date('d.m.Y', $activity->xdate)?> в <?=$activity->xtime?> (МСК)</p><br>
            <p class="ond-paragraph" style="color: #000000; font-size: 16px; margin: 0px; font-family: Arial,Helvetica,sans-serif; text-indent: 0px; padding: 0px; line-height: 150%;"><strong>Вебинар ведет: </strong><?=$activity->about?></p><br>
            <p class="ond-paragraph" style="color: #000000; font-size: 16px; margin: 0px; font-family: Arial,Helvetica,sans-serif; text-indent: 0px; padding: 0px; line-height: 150%;"><a href='https://integraforlife.com/webinar/<?= $activity->activity ?>' target='_blank' style='text-decoration: none;color: rgb(141, 179, 147);font-weight:bold;text-decoration:underline;'>Подробнее о вебинаре...</a></p><br>
            <p class="ond-paragraph" style="color: #000000; font-size: 16px; margin: 0px; font-family: Arial,Helvetica,sans-serif; text-indent: 0px; padding: 0px; line-height: 150%;">Вы можете оплатить участие пройдя по ссылке: <a href='https://integraforlife.com/payment/<?= $user->hash ?>' target='_blank' style='text-decoration: none;color: rgb(141, 179, 147);font-weight:bold;text-decoration:underline;'>ПЕРЕЙТИ К ОПЛАТЕ</a></p>
            <hr>
            <p class="ond-paragraph" style="color: #000000; font-size: 16px; margin: 0px; font-family: Arial,Helvetica,sans-serif; text-indent: 0px; padding: 0px; line-height: 150%;">С уважением, Анна Холодова</p><br>
        </td>
    </tr>
</table>