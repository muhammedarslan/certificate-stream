<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $data['headerText'].' - '. $data['name'] }}</title>
    <style>
    * {
        margin: 0;
        padding: 0;
    }

    @font-face {
        font-family: 'Montserrat';
        font-weight: normal;
        font-style: normal;
        font-variant: normal;
        src: url('assets/fonts/montserrat/static/Montserrat-Medium.ttf') format('truetype');
    }

    @font-face {
        font-family: 'Parisienne';
        font-weight: normal;
        font-style: normal;
        font-variant: normal;
        src: url('assets/fonts/parisienne/Parisienne-Regular.ttf') format('truetype');
    }

    @font-face {
        font-family: 'LibreBaskervilleItalic';
        font-weight: normal;
        font-style: normal;
        font-variant: normal;
        src: url('assets/fonts/LibreBaskerville/LibreBaskerville-Italic.ttf') format('truetype');
    }

    body {
        background: url("{{ $template }}") no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        font-family: 'Montserrat', sans-serif;
        color: #375376;
    }

    @page {
        margin: 0px 0px 0px 0px !important;
        padding: 0px 0px 0px 0px !important;
    }

    .headerText {
        font-family: 'Parisienne', cursive;
        position: absolute;
        left: 150px;
        top: 110px;
        width: 820px;
        text-align: center;
        font-size: 50px;
    }

    .name {
        font-family: 'LibreBaskervilleItalic', cursive;
        position: absolute;
        line-height: 40px;
        left: 150px;
        top: 290px;
        width: 820px;
        text-align: center;
        font-size: 50px;
    }

    .title {
        margin-top: -10px;
        font-family: 'Montserrat', cursive;
        position: relative;
        text-align: center;
        font-size: 16px;
    }

    .description {
        font-family: 'Montserrat', cursive;
        position: absolute;
        left: 210px;
        top: 460px;
        width: 720px;
        text-align: center;
        font-size: 16px;
    }

    .signerName {
        font-family: 'Montserrat', cursive;
        position: absolute;
        left: 352px;
        top: 610px;
        width: 420px;
        text-align: center;
        font-size: 18px;
    }

    .signerTitle {
        font-family: 'Montserrat', cursive;
        position: relative;
        text-align: center;
        font-size: 18px;
    }
    </style>
</head>

<body>

    <div class="headerText">
        <span>{{ $data['headerText'] }}</span>
    </div>

    <div class="name">
        <span>{{ $data['name'] }}</span>
        <div class="title">
            <span>{{ $data['title'] }}</span>
        </div>
    </div>

    <div class="description">
        <span>{{ $data['description'] }}</span>
    </div>

    <div class="signerName">
        <span>{{ $data['signerName'] }}</span>
        <div class="signerTitle">
            <span>{{ $data['signerTitle'] }}</span>
        </div>
    </div>



</body>

</html>