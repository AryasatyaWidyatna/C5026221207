<style>
    body{
        font-family: 'Courier New', Courier, monospace;
        background-color: #005215;
    }
    p{
        border: 5px #8a8585;
    }

    div {
        margin: auto;
        background-color: #920606;
        color: #ff9cd1;
    }
    .salam{
        font-size: larger;
        text-align: right;
        font-weight: bold;
        text-transform: uppercase;
    }
    .garisbaawah{
        text-decoration: underline;
    }
</style>

<html>
    <head>
        <title>CSS</title>
    </head>

    <body>
        <!-- Inline CSS, digunakan jika hanya 1 bagian di 1 halaman yang berbeda-->
        <div class="salam garisbaawah">Halo apa kabar ?</div>
        <h1>Halo <b style="color: darkturquoise;text-decoration: underline;" >apa</b> kabar ?</h1>
        <!-- Inpage CSS, digunakan jika yang berbeda hanya di 1 halaman-->

        <!-- External File, digunakan untuk global 1 situs-->
        <span>Halo apa kabar ?</span>
        <p>Halo apa kabar ?</p>
    </body>
</html>
