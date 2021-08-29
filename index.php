<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="datepicker-ru.js"></script>
    <script>
        $(function() {
          $("#datepicker").datepicker();
        });
        </script>
    <script type="text/javascript">
        $(function(){
            $('.postForm').submit(function(e){
                e.preventDefault();
                let data =$(this).serialize();
                $.ajax({
                    url: 'calc.php',
                    type: 'POST',
                    data: data,
                    success: function(result){
                        $('.result').html(result)
                    }
                });
            });
        }); 
    </script>       
    <title>Вклады</title>
</head>

<body>
    <div class="page">
        <header class="header">
            <div class="header_t">
                <div class="header_logo">
                    <img class="logo" src="img/icon.jpg" alt="WORLD BANK PUblication">
                </div> 
                <div class="header_info">
                    <p>8-800-100-5005<br>
                        +7(3452)522-000
                    </p>
                </div>
            </div>
            <div class="menu-main">
                <ul>
                    <li>
                        <a href="#">Кредитные карты</a>
                    </li>
                    <li>
                        <a href="#">Вклады</a>
                    </li>
                    <li>
                        <a href="#">Дебетовая карта</a>
                    </li>
                    <li>
                        <a href="#">Страхование</a>
                    </li>
                    <li>
                        <a href="#">Друзья</a>
                    </li>
                    <li>
                        <a href="#">Интернет-банк</a>
                    </li>
                </ul>
            </div>
            <ul class="breadcrumbs">
                <li><a href="#">Главная </a></li>
                <li><a href="#">Вклады </a></li>
                <li>Калькулятор </li>
            </ul>
        </header>
        <main class="main">
            <h1>Калькулятор</h1>
            <form  method="POST" class="postForm">
                <table>
                    <tr>
                        <td>
                            <label>Дата оформления вклада</label>
                        </td>
                        <td>
                            <input name='data' type="text" id="datepicker" placeholder="дд.мм.гггг">
                        </td>
                    </tr>
                    <tr>
                            <td>
                                <label>Сумма вклада</label>
                            </td>
                            <td>
                                <input id="i1"  name="sum_dep" type="number" placeholder="10 000" min="1000" max="3000000">
                            </td>
    
                            <td >
                                <input id="r1" type="range" min="1000" max="3000000" oninput="fun1()">
                                <p id="dep_1" class="">1 тыс.руб.</p>
                                <p id="dep_3">3 000 000</p> 
                            </td>
                    </tr>
                    <tr>
                        <td>
                            <label >Срок вклада</label>
                        </td>
                        <td>
                            <select name="term_dep">
                                <option>1 год</option>
                                <option>2 года</option>
                                <option>3 года</option>
                                <option>4 года</option>
                                <option>5 лет</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Пополнение вклада</label>
                        </td>
                        <td>
                            <label  class="r_dep" for="no"><input type="radio" name="vklad" value="no" checked="checked">Нет</label>
                            <label class="r_dep" for="yes"><input type="radio" name="vklad" value="yes">Да</label><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Сумма пополнения вклада</label>
                        </td>
                        <td>
                            <input name="dep_repl" id="i2" type="number" placeholder="10 000" min="1000" max="3000000">
                        </td>
                        <td>
                            <input id="r2" type="range" min="1000" max="3000000" class="slider" oninput="fun2()">
                            <p id="repl_dep_1">1 тыс.руб.</p>
                            <p id="repl_dep_3">3 000 000</p> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="submit" class="button">Расcчитать</button>
                            
                        </td>
                        <td>
                            <span>Результат: </span>
                            
                        </td>
                        <td>
                            <div class="result"></div>
                        </td>
                    </tr>    
                </table>                
            </form>
            
        </main>
        <footer>
            <div class="footer">
                <ul>
                    <li>
                        <a href="#">Кредитные карты</a>
                    </li>
                    <li>
                        <a href="#">Вклады</a>
                    </li>
                    <li>
                        <a href="#">Дебетовая карта</a>
                    </li>
                    <li>
                        <a href="#">Страхование</a>
                    </li>
                    <li>
                        <a href="#">Друзья</a>
                    </li>
                    <li>
                        <a href="#">Интернет-банк</a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>
    
</body>

</html>