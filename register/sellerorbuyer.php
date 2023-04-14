<head>
    <title>Choose your account type</title>
    <style>
        #all{
            text-align: center;
        }

        #items{
            text-align: center;
            height: 10%;
            width: 10%;
        }

        .buttons {
            backface-visibility: hidden;
            background-color: #405cf5;
            border-radius: 6px;
            border-width: 0;
            box-shadow: rgba(50, 50, 93, .1) 0 0 0 1px inset,rgba(50, 50, 93, .1) 0 2px 5px 0,rgba(0, 0, 0, .07) 0 1px 1px 0;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            font-family: -apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue",Ubuntu,sans-serif;
            font-size: 100%;
            height: 44px;
            line-height: 1.15;
            margin: 12px 0 0;
            outline: none;
            overflow: hidden;
            padding: 0 25px;
            position: relative;
            text-align: center;
            text-transform: none;
            transform: translateZ(0);
            transition: all .2s,box-shadow .08s ease-in;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            width: 100%;
        }

        .buttons:disabled {
            cursor: default;
        }

        .buttons:focus {
            box-shadow: rgba(50, 50, 93, .1) 0 0 0 1px inset, rgba(50, 50, 93, .2) 0 6px 15px 0, rgba(0, 0, 0, .1) 0 2px 2px 0, rgba(50, 151, 211, .3) 0 0 0 4px;
        }
    </style>
</head>
<div id="all">
    <h2>Pick your account type</h2>

    <div id="items">
        <a href="./seller/registerseller.php"><button class="buttons">Seller</button></a> <br>
        <a href="./buyer/registerbuyer.php"><button class="buttons">Buyer</button></a>
    </div>

</div>





