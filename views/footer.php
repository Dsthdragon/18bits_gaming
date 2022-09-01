
<?php
    $active = "";
    if (!empty($this->activePage)) {
        $active = $this->activePage;
    }
 ?>

<!--FOOTER-->
<footer class="uk-section uk-section-small">
    <div class="uk-container">
        <hr />
        <p class="uk-text-small uk-text-center">Copyright 2018 - 18bits Gaming | Powered By <a href="https://rinnas.com" title="Visit Rinnas Tech site" target="_blank" data-uk-tooltip>Rinnas Tech</a></p>
    </div>
</footer>
<!--/FOOTER-->
<!-- OFFCANVAS -->
<div id="offcanvas-nav" data-uk-offcanvas="flip: true; overlay: true">
    <div class="uk-offcanvas-bar uk-offcanvas-bar-animation uk-offcanvas-slide">
        <button class="uk-offcanvas-close uk-close" type="button" data-uk-close></button>
        <ul class="uk-nav uk-nav-default">
            <li class="<?= ($active == "index") ? "uk-active" : "" ?>">
                <a href="<?= URL; ?>" title="Home">HOME</a>
            </li>
            <li class="<?= ($active == "games") ? "uk-active" : "" ?>">
                <a href="<?= URL; ?>games" title="Games">GAMES</a>
            </li>
            <li class="<?= ($active == "") ? "uk-active" : "" ?>">
                <a href="<?= URL; ?>news" title="News">NEWS</a>
            </li>
            <li class="<?= ($active == "gallery") ? "uk-active" : "" ?>">
                <a href="<?= URL; ?>gallery" title="Gallery">GALLERY</a>
            </li>
            <li class="<?= ($active == "videos") ? "uk-active" : "" ?>">
                <a href="<?= URL; ?>gallery/videos" title="Videos">VIDEOS</a>
            </li>
        </ul>
        <h3>About Us</h3>
        <p>We are an indie game company.</p>
        <a href="https://www.facebook.com/18bitsgaming" target="_blank" class="uk-visible@s" style="margin-right: 4px" href="#" data-uk-icon="facebook"></a>
        <a href="https://twitter.com/18bitsgaming" target="_blank" class="uk-visible@s" style="margin-right: 4px" href="#" data-uk-icon="twitter"></a>
        <a href="https://www.instagram.com/18bitsgaming" target="_blank" class="uk-visible@s" style="margin-right: 4px" href="#" data-uk-icon="instagram"></a>
    </div>
</div>
<!-- /OFFCANVAS -->
</div>
<script src="<?= URL; ?>public/js/jquery.js"></script>
<!-- JS FILES -->
<script src="<?= URL; ?>public/js/uikit.min.js"></script>
<script src="<?= URL; ?>public/js/uikit-icons.min.js"></script>

<script src="<?= URL; ?>public/js/default.js" type="text/javascript" ></script>

</body>
</html>