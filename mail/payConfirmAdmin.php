<table border="0" cellpadding="0" cellspacing="0"
    class="ond-element ond-block ond-block-text ondElementCaller"
    style="width: 100%;">
    <tr>
        <td class="ond-element-content"
            style="padding: 20px 30px 10px;" align="left" valign="top">
            <p class="ond-paragraph"
                style="color: #000000; font-size: 16px; margin: 0px; font-family: Arial,Helvetica,sans-serif; text-indent: 0px; padding: 0px; line-height: 150%;">
                Данные оплаты:
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
            <p class="ond-paragraph" style="color: #000000; font-size: 16px; margin: 0px; font-family: Arial,Helvetica,sans-serif; text-indent: 0px; padding: 0px; line-height: 150%;">Клиент: <?= $user->name ?></p>
            <p class="ond-paragraph" style="color: #000000; font-size: 16px; margin: 0px; font-family: Arial,Helvetica,sans-serif; text-indent: 0px; padding: 0px; line-height: 150%;">ID: <?= $user->id ?></p>
            <p class="ond-paragraph" style="color: #000000; font-size: 16px; margin: 0px; font-family: Arial,Helvetica,sans-serif; text-indent: 0px; padding: 0px; line-height: 150%;">Email: <?= $user->email ?></p>
            <p class="ond-paragraph" style="color: #000000; font-size: 16px; margin: 0px; font-family: Arial,Helvetica,sans-serif; text-indent: 0px; padding: 0px; line-height: 150%;">Телефон: <?= $user->phone ?></p>
            <p class="ond-paragraph" style="color: #000000; font-size: 16px; margin: 0px; font-family: Arial,Helvetica,sans-serif; text-indent: 0px; padding: 0px; line-height: 150%;">Проект: <?= $activity->name ?></p>
            <p class="ond-paragraph" style="color: #000000; font-size: 16px; margin: 0px; font-family: Arial,Helvetica,sans-serif; text-indent: 0px; padding: 0px; line-height: 150%;">Дата начала: <?= date('d.m.Y', $activity->xdate) ?></p>
        </td>
    </tr>
</table>