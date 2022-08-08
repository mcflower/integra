<style>
    #widget-container {
        width: 100%;
        max-width: 1024px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
    }

    #catalog {
        display: flex;
        flex-direction: row;
        margin: 15px 0;
        height: 800px;
    }

    #selector-box {
        display: none;
        width: 100%;
        margin-top: 15px;
    }

    #select-groups {
        width: 100%;
        font-size: 18px;
        padding: 8px;
    }

    #catalog-left {
        display: flex;
        flex-direction: column;
        width: 35%;
        margin-right: 2%;
        border: 1px solid gray;
        padding: 10px 20px;
        border-radius: 10px;
        background: #f9fbfb;
        height: 100%;
    }

    #catalog-right {
        display: flex;
        flex-direction: column;
        height: 100%;
        border: 1px solid gray;
        padding: 10px 20px;
        border-radius: 10px;
        background: #f9fbfb;
        overflow-x: scroll;
        width: 63%;
    }

    .group-one {
        font-size: 14px;
        padding-bottom: 5px;
        padding-top: 5px;
        cursor: pointer;
    }

    .group-one a {
        color: gray;
        font-weight: bold;
        text-decoration: none;
    }

    .group-one.active a{
        color: black;
    }

    .group-one a:hover {
        color: #f0e228;
    }

    .analysis-one {
        display: flex;
        flex-direction: row;
        border-bottom: 1px dotted gray;
        padding-bottom: 5px;
        padding-top: 5px;
        cursor: default;
    }

    .analysis-one:hover {
      color: #666;
    }

    #catalog-right .analysis-one:last-child {
        border-bottom: none;
    }

    .art {
        width: 10%;
    }

    .name {
        width: 75%;
        padding-left: 15px;
        padding-right: 15px;
    }

    .price {
        width: 15%;
        text-align: right;
    }

    * {box-sizing: border-box;}

    form {
      position: relative;
      width: 100%;
      margin: 0 auto;
    }

    #search-box {
        margin-top: 10px;
    }

    #search-box input {
        width: 100%;
        height: 42px;
        padding-left: 10px;
        border: 2px solid #808080;
        border-radius: 5px;
        outline: none;
        background: #F9FBFB;
        color: #9E9C9C;
    }

    #search-box button {
      position: absolute;
      top: 0;
      right: 0px;
      width: 42px;
      height: 42px;
      border: none;
      background: #808080;
      border-radius: 0 5px 5px 0;
      cursor: pointer;
    }

    #search-box button:before {
      content: "\1F50D";
      font-size: 16px;
      color: #F9F0DA;
    }

    .search-notification {
        margin-bottom: 10px;
        font-weight: bold;
    }

    @media only screen and (max-width: 900px) {
        #catalog-left {
            display: none;
        }

        #catalog {
            height: 100%;
        }

        #catalog-right {
            width: 100%;
        }

        #selector-box {
            display: flex;
        }

        @media only screen and (max-width: 600px) {
            .art, .name, .price {
                width: 100%;
            }

            .analysis-one {
              flex-direction: column;
            }

            .name {
              padding-left: 0;
              padding-right: 0;
            }
        }
    }

</style>
    <div id="search-box">
      <form id="searchfrom">
          <input name="s" id="autoComplete" type="search" dir="ltr" spellcheck=false autocorrect="off" autocomplete="off" autocapitalize="off">
          <button type="submit"></button>
      </form>
    </div>
    <div id="selector-box">
        <select onchange="reload()" name="groups" id="select-groups">
            <option value="0" <?=($groupCode == 0) ? 'selected' : ''?> disabled>Выберите подраздел</option>
            <?php foreach($group as $one):?>
                <option <?=($one->id == $groupCode)? 'selected' : ''?> value="<?=$one->id?>">
                    <?=$one->name?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div id="catalog">
        <div id="catalog-left">
            <?php foreach($group as $one):?>
                <div class="group-one <?=($one->id == $groupCode)? 'active' : ''?>">
                    <a id="cat<?=$one->id?>" href="clinic-widget?group=<?=$one->id?>"><?=$one->name?></a>
                </div>
            <?php endforeach; ?>
        </div>
        <div id="catalog-right">
            <?php if(is_null($search)):?>
                <?php foreach ($analysis as $one): ?>
                    <?php if(!empty($one->analysis)):?>
                        <div class="analysis-one">
                            <div class="art"><?=$one->art?></div>
                            <div class="name"><?=$one->analysis->name?></div>
                            <div class="price"><?=number_format($one->analysis->price, 0, ' ', ' ')?> руб.</div>
                        </div>
                    <?php endif;?>
                <?php endforeach; ?>
            <?php else: ?>
                <?php if(empty($search)):?>
                    <div class="analysis-one">
                        <div class="search-notification">Поиск по словосочетанию «<?=$searchString?>» не дал результатов</div>
                    </div>
                <?php else: ?>
                    <p class="search-notification">Результат поиска по словосочетанию «<?=$searchString?>»</p>
                    <?php foreach ($search as $one): ?>
                        <div class="analysis-one">
                            <div class="art"><?=$one->art?></div>
                            <div class="name"><?=$one->name?></div>
                            <div class="price"><?=number_format($one->price, 0, ' ', ' ')?> руб.</div>
                        </div>
                    <?php endforeach; ?>
                <?php endif;?>
            <?php endif;?>
        </div>
    </div>
</div>
<script>
    var analysis = [<?=$analysisSearchOption;?>];
</script>
