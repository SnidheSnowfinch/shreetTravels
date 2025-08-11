<?php include 'includes/header.php' ?>
<section class="banner-top">
  <h1>Gallery</h1>
</section>
<div class="div-container ">
<div class="custom-gallery-container">
    <div class="custom-gallery-item" onclick="openCustomLightbox('bootstrap/images/travel-urbania.avif')">
        <img src="bootstrap/images/travel-urbania.avif" alt="Gallery 1">
        <div class="custom-gallery-overlay">
            <div class="custom-plus-icon">+</div>
        </div>
    </div>
    <div class="custom-gallery-item" onclick="openCustomLightbox('bootstrap/images/tempo.webp')">
        <img src="bootstrap/images/tempo.webp" alt="Gallery 2">
        <div class="custom-gallery-overlay">
            <div class="custom-plus-icon">+</div>
        </div>
    </div>
    <div class="custom-gallery-item" onclick="openCustomLightbox('bootstrap/images/travel-17seater.webp')">
        <img src="bootstrap/images/travel-17seater.webp" alt="Gallery 3">
        <div class="custom-gallery-overlay">
            <div class="custom-plus-icon">+</div>
        </div>
    </div>
    <div class="custom-gallery-item" onclick="openCustomLightbox('bootstrap/images/tempo-20.webp')">
        <img src="bootstrap/images/tempo-20.webp" alt="Gallery 4">
        <div class="custom-gallery-overlay">
            <div class="custom-plus-icon">+</div>
        </div>
    </div>
    <div class="custom-gallery-item" onclick="openCustomLightbox('bootstrap/images/10-seater-full.jpg')">
        <img src="bootstrap/images/10-seater-full.jpg" alt="Gallery 5">
        <div class="custom-gallery-overlay">
            <div class="custom-plus-icon">+</div>
        </div>
    </div>
    <div class="custom-gallery-item" onclick="openCustomLightbox('bootstrap/images/travel-20seater.webp')">
        <img src="bootstrap/images/travel-20seater.webp" alt="Gallery 6">
        <div class="custom-gallery-overlay">
            <div class="custom-plus-icon">+</div>
        </div>
    </div>
    <div class="custom-gallery-item" onclick="openCustomLightbox('bootstrap/images/minibus.webp')">
        <img src="bootstrap/images/minibus.webp" alt="Gallery 7">
        <div class="custom-gallery-overlay">
            <div class="custom-plus-icon">+</div>
        </div>
    </div>
    <div class="custom-gallery-item" onclick="openCustomLightbox('bootstrap/images/luxury-bus.jpg')">
        <img src="bootstrap/images/luxury-bus.jpg" alt="Gallery 8">
        <div class="custom-gallery-overlay">
            <div class="custom-plus-icon">+</div>
        </div>
    </div>
    <div class="custom-gallery-item" onclick="openCustomLightbox('bootstrap/images/travel-32seater.webp')">
        <img src="bootstrap/images/travel-32seater.webp" alt="Gallery 9">
        <div class="custom-gallery-overlay">
            <div class="custom-plus-icon">+</div>
        </div>
    </div>
    <div class="custom-gallery-item" onclick="openCustomLightbox('bootstrap/images/tempo-outstation.jpg')">
        <img src="bootstrap/images/tempo-outstation.jpg" alt="Gallery 10">
        <div class="custom-gallery-overlay">
            <div class="custom-plus-icon">+</div>
        </div>
    </div>
    <div class="custom-gallery-item" onclick="openCustomLightbox('bootstrap/images/urbania-rent.jpg')">
        <img src="bootstrap/images/urbania-rent.jpg" alt="Gallery 11">
        <div class="custom-gallery-overlay">
            <div class="custom-plus-icon">+</div>
        </div>
    </div>
    <div class="custom-gallery-item" onclick="openCustomLightbox('bootstrap/images/innova-crysta.png')">
        <img src="bootstrap/images/innova-crysta.png" alt="Gallery 12">
        <div class="custom-gallery-overlay">
            <div class="custom-plus-icon">+</div>
        </div>
    </div>
</div>

<!-- Lightbox -->
<div class="custom-lightbox" id="customLightbox">
    <span class="custom-lightbox-close" onclick="closeCustomLightbox()">&times;</span>
    <img id="customLightboxImg" src="" alt="Full Screen">
</div>
</div>
<?php include 'includes/footer.php' ?>
