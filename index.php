<!DOCTYPE html>

<html>
<head>

    <title>Text to Emoji</title>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type" />

    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="node_modules/clipboard-js/clipboard.js"></script>

    <style type="text/css">

        html {
            background-color: #6377b1;
        }

        body {
            text-align: center;
        }
        textarea {
            margin: 0px 216.5px 0px 224.5px;
            height: 142px;
            width: 50%;
            margin-left: 25%;
            background-color: #465379;
            color: white;
        }
        p {
            color: #2f3b61;
        }
        button {
            display: block;
            width: 30%;
            margin-left: 35%;
            padding: 19px 39px 18px 39px;
            color: #FFF;
            margin: 0 auto;
            background: #1abc9c;
            font-size: 18px;
            text-align: center;
            font-style: normal;
            border: 1px solid #16a085;
            border-width: 1px 1px 3px;
            cursor: pointer;
            margin-top: 23px;
        }

        button:hover {
            background: #109177;
        }

        ::-webkit-input-placeholder { /* WebKit, Blink, Edge */
            color:    #C7C7C7;
        }
        :-moz-placeholder { /* Mozilla Firefox 4 to 18 */
           color:    #C7C7C7;
           opacity:  1;
        }
        ::-moz-placeholder { /* Mozilla Firefox 19+ */
           color:    #C7C7C7;
           opacity:  1;
        }
        :-ms-input-placeholder { /* Internet Explorer 10-11 */
           color:    #C7C7C7;
        }
        ::-ms-input-placeholder { /* Microsoft Edge */
           color:    #C7C7C7;
        }

        #footer {
            background-color: #39456b;
            color: white;
            height: 32px;
            padding-top: 12px;
            border: solid 1px white;
            margin-top: 19px;
        }

        @media (max-width: 600px) {
            button {
                width: 50%;
                margin-left: 25%;
            }
        }
    </style>

</head>

<script>
    $(document).ready(function() {
        $('#btnSubmit').on('click', function(){
            $.ajax({
                url: "text-to-emoji.php?text=" + $('#input').val(),
                type: "GET",
                success: function(response){
                    $('#response').html(response);
                    $('#btnCopy').show();
                }
            })
        });

        $('#btnCopy').on('click', function(){
            clipboard.copy($('#response').text());
            $('#response').text("Emojis copied successfully!");
        });
    });
</script>

<body>
    <textarea id="input" placeholder="Your text goes here"></textarea>
    <button id="btnSubmit">Translate</button>
    <p id="response"></p>
    <button id="btnCopy" style="display: none">Copy To Clipboard</button>

    <div id="footer">Made by Franco Ferraguti - Code @ github.com/francoFerraguti/text-to-emoji</div>
</body>
</html>

