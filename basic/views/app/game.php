<?php

$random_keys = array_rand($AllImg, 10);
shuffle($random_keys);
//var_dump($random_keys);
//echo Html::img(Yii::$app->request->baseUrl.'/img/img.jpg'); ?>
<? $baseUrl = Yii::$app->request->baseUrl.'/img/' ?>

<!--<script src=--><?php //echo Yii::$app->request->baseUrl; ?><!--/web/js/JavaScript.js"></script>-->

<img id="img" src=""  class="center-block" width="350px" height="350px" >

<figcaption id="nameOfImg" >name</figcaption>

<div id="backCount">back count</div>


<div class="buttons">
    <button value='3000' onclick="game.run(this.value)">Сложная</button>
    <button value="5000" onclick="game.run(this.value)">Средняя</button>
    <button value="6000" onclick="game.run(this.value)">Легкая</button>
</div>

<form class="text-center form-control" id="form">
    <label for="id_0">1 картинка</label>
    <input id="id_0" required>
    <br>
    <label for="id_1">2 картинка</label>
    <input id="id_1" required>
    <br><label for="id_2">3 картинка</label>
    <input id="id_2" required>
    <br><label for="id_3">4 картинка</label>
    <input id="id_3" required>
    <br><label for="id_4">5 картинка</label>
    <input id="id_4" required>
    <br><label for="id_5">6 картинка</label>
    <input id="id_5" required>
    <br><label for="id_6">7 картинка</label>
    <input id="id_6" required>
    <br><label for="id_7">8 картинка</label>
    <input id="id_7" required>
    <br><label for="id_8">9 картинка</label>
    <input id="id_8" required>

    <br><label for="id_9">10 картинка</label>
    <input id="id_9" required>
    <br>
    <br>
    <button class="btn btn-primary" type="button" id="save" value="check" onclick="game.check()">Save</button>
</form>


<div class="container-fluid" >
    <table class="col-md-3  table text-center" >
        <tr>
            <th>мои значения1</th>
            <th>Правильные значения</th>
        </tr>
        <tr>
            <td class="myVal">Мои значения1</td>
            <td class="rightVal">Правильные значения</td>
        </tr>
        <tr>
            <td class="myVal">мои значения1</td>
            <td class="rightVal">Правильные значения</td>
        </tr>
        <tr>
            <td class="myVal">мои значения1</td>
            <td class="rightVal">Правильные значения</td>
        </tr>
        <tr>
            <td class="myVal">мои значения1</td>
            <td class="rightVal">Правильные значения</td>
        </tr>
        <tr>
            <td class="myVal">мои значения1</td>
            <td class="rightVal">Правильные значения</td>
        </tr>
        <tr>
            <td class="myVal">мои значения1</td>
            <td class="rightVal">Правильные значения</td>
        </tr>
        <tr>
            <td class="myVal">мои значения1</td>
            <td class="rightVal">Правильные значения</td>
        </tr>
        <tr>
            <td class="myVal">мои значения1</td>
            <td class="rightVal">Правильные значения</td>
        </tr>
        <tr>
            <td class="myVal">мои значения1</td>
            <td class="rightVal">Правильные значения</td>
        </tr>
        <tr>
            <td class="myVal">мои значения1</td>
            <td class="rightVal">Правильные значения</td>
        </tr>

    </table>
</div>
<div class="row">
</div>

<button id="reload"  onclick="{location.reload();}">Перезагрузить</button>

<span id="amount"> Кол-во правильных ответов :
    <span id="amountOfRightAnswer"></span>
</span>

<script type="text/javascript">
    var ArrSrc = [];
    var ArrNameOfImg = [];


    <?for ($i = 0;$i < 10  ;$i++) {?> //заполняем массив картинками и названиями
    ArrSrc.push('<?=$AllImg[$random_keys[$i]]['src']?>');
    ArrNameOfImg.push('<?=$AllImg[$random_keys[$i]]['nameOfImg']?>');
    <?
    }


    ?>
    var game = new Game(ArrSrc,ArrNameOfImg);


</script>





