


function Game(ArrSrc,ArrNameOfImg) {


    var count = 0;
    var backCount = 2;


    function actionBackCount(sec) { //обратный отсчет 2 сек


        actionGame(sec);

        var timerId = setInterval(function () {
            document.getElementById('backCount').innerHTML = backCount--;
        }, 1000);

        setTimeout(function () {
            clearInterval(timerId);
            document.getElementById('backCount').style.display = 'none';
        }, 3000);

    }

    function actionChange() { //меняем картинку по таймеру
        document.getElementById('img').style.display = 'block';
        document.getElementById('img').src = '<?=$baseUrl?>' + ArrSrc[count];
        document.getElementById('nameOfImg').innerHTML = ArrNameOfImg[count];
        count++;
    }

    function actionGame(sec) {


        document.getElementById('nameOfImg').style.display = 'block';

        var timerId1 = setInterval(actionChange, sec); //смена картинки

        setTimeout(function () { //после просмотра - img открыть ответы
            clearInterval(timerId1);
            document.getElementById('img').style.display = "none";
            document.getElementById('nameOfImg').style.display = "none";
            actionShow();


        }, sec * 11);

    }

    function actionShow() {
        document.getElementById('form').style.display = 'block';
    }

    this.run = function (sec) {
        document.getElementsByClassName('buttons')[0].style.display = "none";
        actionBackCount(sec);
        console.log(sec);
    };

    this.check = function () { //показать ответы.Таблица

        countOfRightAnswers = 0;

        console.log(ArrNameOfImg);

        var AnswersArr = [];


        for (var i = 0; i < 10; i++) {
            AnswersArr.push(document.getElementById('id_' + i).value);

            if (AnswersArr[i].toUpperCase() == ArrNameOfImg[i].toUpperCase()) { // переводим в верхний регистр, чтобы
                countOfRightAnswers++;
            }
        }
        console.log(AnswersArr);

        for (var j = 0; j < 10; j++) {

            document.getElementsByClassName('myVal')[j].innerHTML = AnswersArr[j];
            document.getElementsByClassName('rightVal')[j].innerHTML = ArrNameOfImg[j];
        }
        document.getElementById('form').style.display = 'none';
        document.getElementById('reload').style.display = 'block';
        document.getElementById('amount').style.display = 'block';
        document.getElementsByClassName('table')[0].style.display = 'table';
        document.getElementById('amountOfRightAnswer').innerHTML = countOfRightAnswers;
    };

}

