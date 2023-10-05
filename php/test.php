<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <style type="text/css">
            .line{border:2px solid greenyellow}
            .bgaqua{background-color: aquamarine;}

        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>// document ready
        $(function(){// ajax
            
        })
        </script>
    </head>
    <body>
        <h1>coupon</h1>
        <button id="btn3">div3에 보여줘</button>
        <form id="form">
            <ul>
                <li><label>no</label>
                    <input name="no" id="no" placeholder="번호">
                </li>
                <li><label>사용자</label>
                    <input name="user" id="user"  placeholder="uid">
                </li>
                <li><label>금액</label>
                    <input name="price" id="price"  placeholder="금액">
                </li>
                <li><label>유효기간</label>
                    <input name="till" id="till"  placeholder="유효기간">
                </li>
            </ul>
        </form>
        <div id="div1">
            <table border=1 >
                <tr><th>No</th><th>번호</th><th>사용자</th><th>금액</th><th>유효기간</th></tr>
                <tr><td>1</td><td>#123465789</td><td>홍길동</td><td>1000</td><td>2023-01-01</td></tr>
            </table>
        </div>


    </body>

</html>