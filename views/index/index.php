<section class="">
    <div class="uk-height-large uk-cover-container uk-border-rounded">
        <img src="<?= loadmedia::image($this->config['banner'], "img") ?>" alt="Alt img" data-uk-cover>
        <!-- HERO -->
    </div>
</section>
<!-- HERO -->
<!-- FEATURED -->
<div class="uk-container uk-margin-top">
    <h4 class="uk-heading-line uk-text-bold"><span>Featured</span></h4>
    <div data-uk-slider="velocity: 5">
        <div class="uk-position-relative">
            <div class="uk-slider-container">
                <ul class="uk-slider-items uk-child-width-1-5@m uk-grid uk-grid-medium news-slide">
                    <?php foreach($this->games as $key => $value): ?>
                        <li>
                            <a class="uk-flex uk-flex-middle uk-border-rounded" href="<?= URL ?>game/<?= $value['link']; ?>">
                                <div class="uk-grid uk-grid-medium uk-flex uk-flex-middle" data-uk-grid>
                                    <div class="uk-width-1-1@s uk-width-1-1@m uk-height-1-1">
                                        <div class="uk-inline uk-inline-clip uk-transition-toggle ">
                                            <img src="<?= loadmedia::image($value['image'], "thumb") ?>" alt="">

                                            <div class="uk-transition-slide-bottom uk-overlay uk-overlay-primary uk-position-bottom">
                                                <p><?= $value['title']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="uk-hidden@l uk-light">
                <a class="uk-position-center-left uk-position-small" href="#" data-uk-slidenav-previous data-uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small" href="#" data-uk-slidenav-next data-uk-slider-item="next"></a>
            </div>
            <div class="uk-visible@l">
                <a class="uk-position-center-left-out uk-position-small" href="#" data-uk-slidenav-previous data-uk-slider-item="previous"></a>
                <a class="uk-position-center-right-out uk-position-small" href="#" data-uk-slidenav-next data-uk-slider-item="next"></a>
            </div>
        </div>
        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
    </div>
</div>
<!-- /FEATURED -->

<div class="uk-container uk-margin-top">
    <h4 class="uk-heading-line uk-text-bold"><span>Featured Video</span></h4>
    <div class="videoContainer">
        <iframe width="560" height="349" src="<?= loadmedia::youtubeEmbed($this->config['youtube_id']) ?>"  frameborder="0" allowfullscreen class="videoPlayer"></iframe>
    </div>
</div>
<!--CONTENT-->
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid" uk-grid>
            <div class="uk-width-2-3@m">
                <h4 class="uk-heading-line uk-text-bold"><span>Latest News</span></h4>
                <?php foreach($this->articles as $key => $value): ?>
                    <article class="uk-section uk-section-small uk-padding-remove-top uk-padding-remove-bottom white uk-margin">
                        <div class="uk-grid uk-flex-middle" uk-grid>

                            <div class="uk-width-1-1@s uk-width-1-3@m">
                                <figure>
                                    <img src="<?= loadmedia::image($value['image'], "thumb") ?>" alt="Alt text">
                                </figure>
                            </div>
                            <div class="uk-width-1-1@s uk-width-2-3@m uk-padding-top">
                                <header>
                                    <h3 class="uk-text-bold"><a title=<?= $value['title'] ?>" class="uk-link-reset" href="<?= URL ?>post/<?= $value['link']; ?>"><?= $value['title'] ?></a></h3>
                                </header>
                                <p class="uk-article-meta"><?= relative_time::wordmonth($value['created_at']) ?></p>
                                <hr />
                                <p><?= $value['abstract'] ?>.</p>
                                <a href="<?= URL ?>post/<?= $value['link']; ?>" title="Read More" class="uk-button uk-button-default uk-button-small">READ MORE</a>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
            <div class="uk-width-1-3@m">
                <h4 class="uk-heading-line uk-text-bold"><span>Twitter</span></h4>
                <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/18bitsgaming?ref_src=twsrc%5Etfw">Tweets by 18bitsgaming</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
    </div>
</div>

<div class="uk-container">
    <h2 class="uk-heading-line uk-text-bold"><span>Gallery</span></h2>
    <div class="uk-grid" uk-grid data-uk-lightbox="toggle:a.uk-position-cover">
        <?php foreach ($this->gallery as $key => $value): ?>
            <div class="uk-width-1-1@s uk-width-1-5@m">
                <div class="uk-grid uk-grid-medium uk-flex uk-flex-middle" data-uk-grid>
                    <div class="uk-width-1-1@s uk-width-1-1@m uk-height-1-1">
                        <div class="uk-inline uk-inline-clip uk-transition-toggle ">
                            <img src="<?= loadmedia::image($value['id'], "thumb") ?>" alt="">
                            <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">
                                <div class="uk-transition-fade uk-position-center">
                                    <span uk-overlay-icon></span>
                                </div>
                                <p class="uk-position-bottom-center"><?= $value['title']; ?></p>
                                <a href="<?= loadmedia::image($value['id'], "img") ?>" class="uk-position-cover" data-caption="<?= $value['title']; ?>" data-type="image"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>