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
            <p class="ond-paragraph" style="color: #000000; font-size: 16px; margin: 0px; font-family: Arial,Helvetica,sans-serif; text-indent: 0px; padding: 0px; line-height: 150%;">Напоминаю вам о предстоящем мероприятии "<?=$activity->name?>" который состоится <?=date('d.m.Y', $activity->xdate)?> в <?=$activity->xtime?> (МСК).</p><br>
            <p class="ond-paragraph" style="color: #000000; font-size: 16px; margin: 0px; font-family: Arial,Helvetica,sans-serif; text-indent: 0px; padding: 0px; line-height: 150%;"><?=$activity->about?></p><br>
            <hr>
            <p class="ond-paragraph" style="color: #000000; font-size: 16px; margin: 0px; font-family: Arial,Helvetica,sans-serif; text-indent: 0px; padding: 0px; line-height: 150%;">С уважением, Анна Холодова</p><br>
        </td>
    </tr>
</table>
