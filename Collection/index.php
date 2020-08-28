<!DOCTYPE html>
<html>
    <head>
        <title>inqueryForm</title>
        <link rel="stylesheet" href="index.css" type="text/css" />
    </head>
    <body>
        <div class="header">header</div>
        <div class="contetnts">
            <div class="contetnts-title">title</div>
            <div class="survey-area">
                <div class="survey"><div class="question-1">
                    <div class="q-title-1">Sample</div>
                    <div class="q-list">
                        <ul>
                            <li><input id="input_text" class="text-form" type="text" name="str"></li>
                            <li id="input_result" class="result">RESULT:</li>
                        <div class="select-item">
                            <li>
                                <select name="selectItem" size="3" id="select_item"><option>red</option><option>blue</option><option>green</option></select>
                            </li>
                            <li class="select-item-result" id="select_item_result">RESULT:COLOR</li>
                        </div>
                        </ul>
                    </div>
                </div>
                <div class="question-2"></div><div class="question-1"></div><div class="question-2"></div></div>
                <div class="survey"><div class="question-2"></div><div class="question-1"></div><div class="question-2"></div><div class="question-1"></div></div>
                <div class="survey"><div class="question-1"></div><div class="question-2"></div><div class="question-1"></div><div class="question-2"></div></div>
            </div>
        </div>
        <div class=footer>footer</div>
        <script type="text/javascript" src="/index.js"></script>
    </body>
</html>