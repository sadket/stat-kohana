<form class="form-inline" id="req-form" method="POST" action="">
    <label for="sitename">Выберите сайт:</label>
    <select name="site_id" id="sitename">
        <?foreach ($sites as $site):?>
            <option value="<?=$site->id?>"><?=$site->sitename?></option>
        <?endforeach?>
    </select>
    <label class="time-period">Выберите период:</label>
    <div class="input-append">
        <label>c <input type="text" value="" name="date_lm" class="datepicker span2">
            <span class="add-on"><i class="icon-calendar"></i></span>
        </label>
    </div>
    <div class="input-append">
        <label>по <input type="text" value="" name="date_rm" class="datepicker span2">
            <span class="add-on"><i class="icon-calendar"></i></span>
        </label>
    </div>
    <input class="btn btn-primary btn-search" type="submit" value="Искать">
    <div class="radio-btns">
        <label><input type="radio" value="all" name="type" checked>&nbsp;Все</label>
        <label id="q_r"><input type="radio" value="question" name="type"><span>&nbsp;Вопросы</span></label>
        <label><input type="radio" value="order" name="type">&nbsp;Заявки</label>
        <label><input type="radio" value="recall" name="type">&nbsp;Заявки на обратный звонок</label>
        <label><strong>Источник захода</strong>
            <select name="source-type">
                <option value="all">Все</option>
                <option value="0">Прямой заход</option>
                <option value="1">Поисковая система</option>
                <option value="2">Яндекс-Директ</option>
                <option value="3">Google-Adwords</option>
            </select>
        </label>
    </div>
</form>
<div class="results"></div>