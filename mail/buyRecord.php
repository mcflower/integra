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
            <p class="ond-paragraph" style="color: #000000; font-size: 16px; margin: 0px; font-family: Arial,Helvetica,sans-serif; text-indent: 0px; padding: 0px; line-height: 150%;">Мы благодарим вас за проявленный интерес к вебинару.</p><br>
            <p class="ond-paragraph" style="color: #000000; font-size: 16px; margin: 0px; font-family: Arial,Helvetica,sans-serif; text-indent: 0px; padding: 0px; line-height: 150%;">После оплаты, на данный email адрес, мы отправим ссылку на запись и сертификат (если он был предусмотрен).</p><br>
            <p class="ond-paragraph" style="color: #000000; font-size: 16px; margin: 0px; font-family: Arial,Helvetica,sans-serif; text-indent: 0px; padding: 0px; line-height: 150%;">Доступ к записи до <?=date('d.m.Y', ($activity->expired - 24 * 60 * 60))?>.</p><br>
            <p class="ond-paragraph" style="color: #000000; font-size: 16px; margin: 0px; font-family: Arial,Helvetica,sans-serif; text-indent: 0px; padding: 0px; line-height: 150%;"><a href='https://integraforlife.com/yandex/record-payment?orderId=<?= $user->id ?>' target='_blank' style='text-decoration: none;color: rgb(141, 179, 147);font-weight:bold;text-decoration:underline;'>ПЕРЕЙТИ К ОПЛАТЕ</a></p><hr>
            <p class="ond-paragraph" style="color: #000000; font-size: 16px; margin: 0px; font-family: Arial,Helvetica,sans-serif; text-indent: 0px; padding: 0px; line-height: 150%;">С уважением, Анна Холодова</p><br>
        </td>
    </tr>
</table>
