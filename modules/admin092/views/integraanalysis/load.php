<?php

$this->title = 'Загрузка анализов файлом';
$this->params['breadcrumbs'][] = ['label' => 'Анализы клиники', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="integra-analysis-create">

    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <input type="checkbox" name="full" id="chbk"> <label for="chbk">Полная загрузка</label>
        </div>
        <div class="form-group">
            <input type="file" name="csv" accept=".csv">
        </div>
        <input type="hidden" name="<?= Yii::$app->request->csrfParam ?>"
               value="<?= Yii::$app->request->getCsrfToken() ?>"/>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Загрузить</button>
        </div>
    </form>
    <p>
        <strong>Важно!</strong> Не используйте параметр «Полная загрузка» для группового обновления цен. <br>
        При включенной галочке «Полная загрузка» все анализы скрываются и раскрываются только те что есть в файле.
    </p>
    <p>Состав csv файла:</p>
    <ul>
        <li>0 - Название</li>
        <li>1 - Цена</li>
        <li>2 - Артикул</li>
    </ul>

</div>
