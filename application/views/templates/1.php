<h4>Записей за выбранный период: </h4>
<div class="delete-btn">
    <button class="btn btn-danger" id="del-selected">Удалить выбранные</button>
</div>
<table class="table result-table">
    <tr>
        <th style="width: 2%;"><input type="checkbox"  id="check-all"></th>
        <th style="width: 2%;">№</th>
        <th style="width: 85px;">Дата</th>
        <th style="width: 7%;">ФИО</th>
        <th style="width: 250px;">Е-mail</th>
        <th style="width: 125px;">Телефон</th>
        <th style="width: 10%;">Содержание</th>
        <th style="width: 80px;">Тип заявки</th>
        <th style="width: 80px;">Доп. инфо</th>
        <th style="width: 100px;">Источник</th>
        <th style="width: 100px;">Страница входа</th>
        <th style="width: 100px;">Страница отправки</th>
        <th style="width: 50px;">Поисковая система</th>
        <th style="width: 40px;">Тип траффика</th>
        <th style="width: 60px;">Рекламная компания</th>
        <th style="width: 100px;">Поисковый запрос</th>
        <th style="width: 30px;">Вебвизор </th>
        <th></th>
    </tr>

    <?foreach ($results as $item){
        if($item->type == 'order') $type = "Заявка";
        elseif($item->type == 'question') $type = "Вопрос";
        else $type = "Заявка на обратный звонок";
        switch ($item->user_ref){
            case -1:
                $ref = "Неизвестно"; break;
            case 0:
                $ref = "Прямой заход";break;
            case 1:
                $ref = "Поисковая система";break;
            case 2:
                $ref = "Яндекс-Директ";break;
            case 3:
                $ref = "Google-Adwords";break;
        }?>
        <?
        $dateArr = explode(" ", $item->date);
        $date = str_replace("-", "", $dateArr[0]);
        ?>
        <?$metrika_visor_link = "http://metrika.yandex.ru/stat/visor/?counter_id=".$item->YaCounter."&sort=stat_date&reverse=1&per_page=1000&filter=month&vfilter=[[%22VisitParams%22,[[%22userId%22,%22".$item->Ya_userId."%22]]]]&date1=".$date."&date2=".$date."&select_period=month"?>
        <tr class="elem-row" id="<?=$item->user_id?>">
            <th style="width: 2%;"><input type="checkbox" value="<?=$item->user_id?>"></th>
            <td><?=//$key+1?></td>
            <td><?=$item->date?></td>
            <td><?=$item->name?></td>
            <td><?=$item->email?></td>
            <td><?=$item->phone?></td>
            <td><?=$item->content?></td>
            <td><?=$type?></td>
            <td><?=$item->add_info?></td>
            <td><?=$ref?></td>
            <td><?=$item->enter_page?></td>
            <td><?=$item->send_page?></td>
            <td><?=$item->engine?></td>
            <td><?=$item->utm_type?></td>
            <td><?=$item->adv_comp?></td>
            <td><?=$item->keywords?></td>
            <td>
                <?if ($item->Ya_userId != 0):?>
                    <a class="metrika-link" href="<?=$metrika_visor_link?>" target="_blank"></a>
                <?endif?>
            </td>
            <td><span class="delete" onClick="removeItem(this, <?=$item->user_id?>)">?</span></td>
        </tr>
    <?}?>

</table>