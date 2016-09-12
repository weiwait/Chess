<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnlineChess</title>
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
    <script type="text/javascript" src="{{ url('/js/jquery-3.1.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/js/ajaxForm.js') }}"></script>
</head>
<body>
<div class="chess-wrap">
    <table cellpadding="0" cellspacing="0" class="chess">
        <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
    <table cellpadding="0" cellspacing="0" class="broad">
        <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>
<button class="registerButton">register</button>
<button class="loginButton">login</button>
<script>
    (function ($) {
        var user = 'blue';
        var chess = 'red';
        var winCount = 1;
        var chessStatus = [];
        var wins = [];
        var blue = [];
        var red = [];
        var over = false;
        var me = true;
        var opponent = false;
        (function initialize()
        {
            resetView();

            //标记棋盘 初始化所有格仔为true，可下棋状态 以坐标i为行j为列交点就是每个格仔;
            //同时声明赢法数组
            for (var i = 1; i < 16; i++) {
                chessStatus[i] = [];
                wins[i] = [];
                for (var j = 1;  j < 16; j++) {
                    chessStatus[i][j] = true;
                    wins[i][j] = [];
                }
            }

            //每行的赢法
            for (var l = 1; l < 16; l++) {
                for (var m = 1; m < 12; m++) {
                    for (var k = 0; k < 5; k++) {
                        wins[l][m + k][winCount] = true;
                    }
                    winCount++;
                }
            }
            //每列的赢法
            for (var o = 1; o < 16; o++) {
                for (var p = 1; p < 12; p++) {
                    for (var r = 0; r < 5; r++) {
                        wins[p + r][o][winCount] = true;
                    }
                    winCount++;
                }
            }

            //左斜线的赢法
            for (var s = 1; s < 12; s++) {
                for (var t = 1; t < 12; t++) {
                    for (var u = 0; u < 5; u++) {
                        wins[s + u][t + u][winCount] = true;
                    }
                    winCount++;
                }
            }

            //右斜线的赢法
            for (var v = 1; v < 12; v++) {
                for (var w = 15; w > 4; w--) {
                    for (var x = 0; x < 5; x++) {
                        wins[v + x][w - x][winCount] = true;
                    }
                    winCount++;
                }
            }

            //初始化每种赢法的可能性为0
            for (var n = 1; n <= winCount; n++) {
                blue[n] = 0;
                red[n] = 0;
            }
        })();

        $('.broad td').click(function (e) {
            if (!me && opponent) {
                return;
            }
            me = false;
            opponent = true;
            var x = e.target.cellIndex + 1;
            var y = e.target.parentElement.rowIndex + 1;
            putChess(x, y);
        });

        function remotePutChess(x, y)
        {
            if (me && !opponent) {
                return;
            }
            me = true;
            opponent = false;
            putChess(x, y);
        }

        function putChess(x, y)
        {
            if (over) {
                return;
            }
            if (chessStatus[y][x]) {
                chessStatus[y][x] = false;
            } else {
                warning();
            }
            var chess = chessFactory();
            //noinspection JSValidateTypes
            var curr = $(".broad tbody tr:nth-child("+ y +")").children("td:nth-child("+ x +")");
            curr.css('background', chess);

            //在当前棋子所属赢法中为真的赢法加1个可能性；五个可能性为赢；
            for (var i = 1; i <= winCount; i++) {
                if (wins[y][x][i]) {
                    if (user == 'blue') {
                        blue[i]++;
                        red[i] = 6;
                        if (blue[i] == 5) {
                            over = true;
                            alert('blue win');
                        }
                    } else {
                        red[i]++;
                        blue[i] = 6;
                        if (red[i] == 5) {
                            over = true;
                            alert('red win');
                        }
                    }
                }
            }
            user = user == 'blue' ? 'red' : 'blue';
        }

        function chessFactory()
        {
            chess = chess == 'red' ? 'blue' : 'red';
            return chess;
        }

        function warning()
        {
            alert('can not put down here');
        }

        function resetView()
        {
            var chess = $('.chess');
            var chessWrap = $('.chess-wrap');
            chessWrap.css('width', '94%');
            chessWrap.css('height', '94%');
            var widthSize = parseInt(chessWrap.css('width'));
            var heightSize = parseInt(chessWrap.css('height'));
            var size = widthSize > heightSize ? heightSize : widthSize;
            var tdSize = parseInt(size / 15);
            tdSize = tdSize % 2 == 0 ? tdSize : tdSize - 1;
            $('.chess-wrap td').css({'width': tdSize, 'height': tdSize});
            var chessWrapSize = tdSize * 15 + 30;
            $('.chess-wrap, .broad').css({
                'width': chessWrapSize,
                'height': chessWrapSize
            });
            chessWrap.css({
                'margin-top': -chessWrapSize / 2,
                'margin-left': -chessWrapSize / 2
            });
            var chessSize = tdSize * 14 + 28;
            chess.css({
                'width': chessSize,
                'height': chessSize,
                'top': tdSize / 2 + 1,
                'left': tdSize / 2 + 1
            });

        }

        $(window).resize(function () {
            resetView();
        });

        $('.registerButton').click(function () {
            {{--$('body').append(--}}
                    {{--"<iframe src=\"{{ url('auth/register') }}\" frameborder=\"0\"></iframe>"--}}
            {{--);--}}
            $.get("{{ url('auth/register') }}", function (page) {
                $('body').append(page);
            });
        });

        $('.loginButton').click(function () {
            $.get("{{ url('auth/login') }}", function (page) {
                $('body').append(page);
            });
        });
    })(jQuery);
</script>
</body>
</html>