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
        @foreach ($images as $image)
            <div class="grid-item">
                <img src="{{ $image->url }}" alt="image">
            </div>
        @endforeach

        {{-- <div class="grid-item">
            <img src="https://i.imgur.com/EpYbuG7.jpg" alt="image">
        </div>
        <div class="grid-item">
            <img src="https://i.imgur.com/kXUHDn5.jpg" alt="image">
        </div>
        <div class="grid-item">
            <img src="https://i.imgur.com/Qmz61wo.jpg" alt="image">
        </div>
        <div class="grid-item">
            <img src="https://i.imgur.com/aPia86B.jpg" alt="image">
        </div>
        <div class="grid-item">
            <img src="https://i.imgur.com/iQRKg2a.jpg" alt="image">
        </div>
        <div class="grid-item">
            <img src="https://i.imgur.com/XREWwIc.jpg" alt="image">
        </div>
        <div class="grid-item">
            <img src="https://i.imgur.com/MV9SvaP.jpg" alt="image">
        </div>
        <div class="grid-item">
            <img src="https://i.imgur.com/qjQ9XWl.jpg" alt="image">
        </div>
        <div class="grid-item">
            <img src="https://i.imgur.com/ZJ088Tk.jpg" alt="image">
        </div>
        <div class="grid-item">
            <img src="https://i.imgur.com/SuZLV2U.jpg" alt="image">
        </div>
        <div class="grid-item">
            <img src="https://i.imgur.com/71H2B0k.jpg" alt="image">
        </div>
        <div class="grid-item">
            <img src="https://i.imgur.com/vxOA4hg.jpg" alt="image">
        </div>
        <div class="grid-item">
            <img src="https://i.imgur.com/8kLXqdP.jpg" alt="image">
        </div> --}}
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
        path: '?page=@{{#}}',
        append: '.grid-item',
        outlayer: msnry,
        history: false,
    });

</script>
</body>
</html>