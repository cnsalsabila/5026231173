<!DOCTYPE html>
<head>
    <title>Image Styling</title>
    <style>
        .rounded {
            border-radius: 8px;
        }

        .circle {
            border-radius: 50%;
        }

        .thumbnail {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
            width: 150px;
        }

        .thumbnailLink {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
            width: 150px;
        }

        .thumbnailLink:hover {
            box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
        }

        .polaroid {
            width: 50%;
            background-color: white;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            margin-bottom: 25px;
        }

        .container{
            text-align: center;
            padding: 10px 20px;
        }

        .transparent {
            opacity: 0.8;
        }

        .flip:hover {
            transform: scaleX(-1);
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .gallery img {
            padding: 6px;
            width: 24.99999%;
        }

        @media only screen and (max-width: 700px) {
            .gallery img {
                width: 49.99999%;
                margin: 6px 0;
            }
        }

        @media only screen and (max-width: 500px) {
            .gallery img {
                width: 100%;
            }
        }

        img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <h2>Rounded and Circled Images</h2>
    <img src="gambarweb/paris.jpg" alt="Paris" class="rounded" width="150">
    <img src="gambarweb/paris.jpg" alt="Paris" class="circle" width="150">

    <h2>Thumbnail Image</h2>
    <img src="gambarweb/paris.jpg" alt="Paris" class="thumbnail">

    <h2>Thumbnail Image as Link</h2>
    <a target="_blank" href="paris.jpg">
        <img src="gambarweb/paris.jpg" alt="Paris" class="thumbnailLink">
    </a>

    <h2>Polaroid Image</h2>
    <div class="polaroid">
        <img src="gambarweb/paris.jpg" alt="Paris" style="width:100%">
        <div class="container">
        <p>Paris, France</p>
        </div>
    </div>

    <h2>Transparent Image</h2>
    <img src="gambarweb/paris.jpg" alt="Paris" class="transparent" width="150">

    <h2>Flip Image on Hover</h2>
    <img src="gambarweb/paris.jpg" alt="Paris" class="flip" width="150">

    <h2>Responsive Image Gallery</h2>
    <div class="gallery">
        <img src="gambarweb/image1.jpg" alt="Cinque Terre">
        <img src="gambarweb/image2.jpg" alt="Forest">
        <img src="gambarweb/image3.jpg" alt="Northern Lights">
        <img src="gambarweb/image4.jpg" alt="Mountains">
    </div>

    <h2>Responsive Image</h2>
    <img src="gambarweb/cinqueterre.jpg" alt="Cinque Terre" width="1000" height="300">
</body>
</html>