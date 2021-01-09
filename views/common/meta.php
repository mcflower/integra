<?php

use app\models\Xcontent;
use yii\helpers\Html;
use yii\helpers\Url;

$url = explode("?", Url::current());
$link = $url[0];
$path = explode("/", $link);
//print_r($path);
$img = '/img/logo-bg.jpg';
if ($path[count($path)-2] == 'webinar') {
    $content = Xcontent::findOne(['activity' => $path[count($path)-1]]);
    $img = $content->img;
}

 ?>

<meta property="og:locale" content="ru_RU" />
<meta property="og:type" content="article" />
<meta property="og:title" content="<?=Html::encode($this->title) ?>" />
<meta property="og:description" content="Врач эндокринолог, андролог, нутрициолог, 'Д-доктор'. Автор научных статей, посвящённых изучению инсулинорезистентности, кардиометаболических заболеваний, витамину Д, и т д. Специалист по лечению ожирения и сохранению здоровья и долголетия семейной пары. Специалист по реабилитации микробиоты кишечника. Основатель ООО 'Клиника Интегра'." />
<meta property="og:url" content="integraforlife.com/<?=Url::current()?>" />
<meta property="og:site_name" content="IntegraForLife" />
<meta property="og:image" content="https://integraforlife.com<?=$img?>">

<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="IntegraForLife">
<meta name="twitter:title" content="<?=Html::encode($this->title) ?>">
<meta name="twitter:description" content="Врач эндокринолог, андролог, нутрициолог, 'Д-доктор'. Автор научных статей, посвящённых изучению инсулинорезистентности, кардиометаболических заболеваний, витамину Д, и т д. Специалист по лечению ожирения и сохранению здоровья и долголетия семейной пары. Специалист по реабилитации микробиоты кишечника. Основатель ООО 'Клиника Интегра'." />
<meta name="twitter:domain" content="integraforlife.com" />
<meta name="twitter:image" content="https://integraforlife.com<?=$img?>">
<link rel="image_src" href="https://integraforlife.com<?=$img?>">

<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
<meta name="description" content="Врач эндокринолог, андролог, нутрициолог, 'Д-доктор'. Автор научных статей, посвящённых изучению инсулинорезистентности, кардиометаболических заболеваний, витамину Д, и т д. Специалист по лечению ожирения и сохранению здоровья и долголетия семейной пары. Специалист по реабилитации микробиоты кишечника. Основатель ООО 'Клиника Интегра'." />
