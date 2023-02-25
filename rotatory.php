<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Image Rotator</title>
<style>
    body{
        background-image: ;
        background: cover;
    }

    .hi-slide{
        position: relative;
        width: 754px;
        height: 292px;
        border-radius: 50px;
        margin: 115px auto 0;
    }

    .hi-slide .hi-next,
    .hi-slide .hi-prev{
        position: absolute;
        top: 50%;
        width: 40px;
        height: 40px;
        margin-top: -20px;
        border-radius: 50px;
        line-height: 40px;
        text-align: center;
        cursor: pointer;
        background-color: white;
        color: black;
        transition: all 0.7s;
        font-size: 20px;
        font-weight: bold;
    }

    .hi-slide .hi-next:hover,
    .hi-slide .hi-prev:hover{
        opacity: 1;
        background-color: white;
    }

    .hi-slide .hi-prev{left: -60px;}

    .hi-slide .hi-prev::before{
        content: '<';
    }

    .hi-slide .hi-next{
        right: -60px;
    }

    .hi-slide .hi-next::before{
        content: '>';
    }

    .hi-slide > ul{
        list-style: none;
        position: relative;
        width: 754px;
        height: 292px;
        margin: 0;
        padding: 0;
    }

    .hi-slide > ul > li{
        overflow: hidden;
        position: absolute;
        z-index: 0;
        left: 377px;
        top: 147px;
        width: 0;
        height: 0;
        margin: 0;
        padding: 0;
        border: 3px solid white;
        cursor: pointer;
        background-color: #333;
    }

    .hi-slide > ul > li > img{
        width: 100%;
        height: 100%;
        background-position: center;
    }
</style>
</head>
<body>
    <div class="slide hi-slide">
        <div class="hi-prev"></div>
        <div class="hi-next"></div>
        <ul>
            <li><img src="" alt=""></li>
            <li><img src="" alt=""></li>
            <li><img src="" alt=""></li>
            <li><img src="" alt=""></li>
            <li><img src="" alt=""></li>
            <li><img src="" alt=""></li>
            <li><img src="" alt=""></li>
            <li><img src="" alt=""></li>
            <li><img src="" alt=""></li>
        </ul>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="js/jquery.hislide.js"></script>
    <script>
        $('.slide').hislide();
    </script>
</body>
</html>