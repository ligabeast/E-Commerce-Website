<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/homepage.sass'])
</head>
<body>
    <header>
        <div>Abalo</div>
        <div>
            <a class="header__navigation--showing" href="Homepage">Homepage</a>
            <a class="header__navigation--hidden" href="Homepage">Warenkorb</a>
            <a class="header__navigation--showing" href="Homepage">Konto</a>
        </div>
    </header>
    <body>
        <table>
            <thead>
                <tr>
                    <td class="table__header--color table__header--size">Nr</td>
                    <td class="table__header--color table__header--size">Name</td>
                    <td class="table__header--color table__header--size price">Preis</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="table__body--color">1</td>
                    <td class="table__body--color">Auto</td>
                    <td class="table__body--color">100 Euro</td>
                </tr>
                <tr>
                    <td class="table__body--color">2</td>
                    <td class="table__body--color">Auto2</td>
                    <td class="table__body--color">102 Euro</td>
                </tr>
            </tbody>
        </table>
    </body>

</body>
</html>
