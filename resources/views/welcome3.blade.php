<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Masonry</title>
    <style>
        .grid-item {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="grid">
        <div class="grid-item">
            <img src="https://i.imgur.com/9eHhuCK.jpg" alt="image">
        </div>
        <div class="grid-item">
            <img src="https://i.imgur.com/kwxMKGr.jpg" alt="image">
        </div>
        <div class="grid-item">
            <img src="https://i.imgur.com/fp6SDtQ.jpg" alt="image">
        </div>
        <div class="grid-item">
            <img src="https://i.imgur.com/INAj06W.jpg" alt="image">
        </div>
        <div class="grid-item">
            <img src="https://i.imgur.com/oLQ1tBD.jpg" alt="image">
        </div>
        <div class="grid-item">
            <img src="https://i.imgur.com/2izuAhd.jpg" alt="image">
        </div>
        <div class="grid-item">
            <img src="https://i.imgur.com/qoWEPJe.jpg" alt="image">
        </div>
        <div class="grid-item">
            <img src="https://i.imgur.com/Iqbgpv7.jpg" alt="image">
        </div>
        <div class="grid-item">
            <img src="https://i.imgur.com/PQh9aqW.jpg" alt="image">
        </div>
        <div class="grid-item">
            <img src="https://i.imgur.com/uhORS25.jpg" alt="image">
        </div>
        <div class="grid-item">
            <img src="https://i.imgur.com/QeN4jBt.jpg" alt="image">
        </div>
        <div class="grid-item">
            <img src="https://i.imgur.com/ahtrWkN.jpg" alt="image">
        </div>
        <div class="grid-item">
            <img src="https://i.imgur.com/fd1Mmhy.jpg" alt="image">
        </div>
        <div class="grid-item">
            <img src="https://i.imgur.com/AOgABvd.jpg" alt="image">
        </div>
        <div class="grid-item">
            <img src="https://i.imgur.com/ypd73RX.jpg" alt="image">
        </div>
    </div>

    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"></script>
    <script>
    var elem = document.querySelector('.grid');
    var msnry = new Masonry( elem, {
        itemSelector: '.grid-item',
        gutter: 10,
    });
    var elem2 = document.querySelector('.grid');
    var infScroll = new InfiniteScroll( elem2, {
        // options
        // path: '.pagination__next',
        // append: '.post',
        // history: false,
    });

</script>
</body>
</html>