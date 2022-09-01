<div class="uk-container uk-margin-top">
    <h2 class="uk-heading-line uk-text-bold"><span>Videos</span></h2>
    <div class="uk-grid" data-uk-lightbox="toggle:a.uk-position-cover" data-uk-grid>
        <?php foreach($this->videos as $key => $value): ?>
            <div class="uk-width-1-1@s uk-width-1-4@m">
                <div class="uk-grid-collapse uk-grid uk-grid-medium uk-flex uk-flex-middle" data-uk-grid>
                    <div class="uk-width-1-1@s uk-width-1-1@m uk-height-1-1">
                        <div class="uk-inline uk-inline-clip uk-transition-toggle uk-width-1-1 uk-height-1-1">
                            <img data-src="<?= loadmedia::youtubeThumb($value['youtube_id']) ?>" uk-img class="uk-width-1-1 uk-height-1-1" alt="">
                            <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">
                                <div class="uk-transition-fade uk-position-center">
                                    <span uk-overlay-icon></span>
                                </div>
                                <p class="uk-position-bottom-center"><?= $value['title']; ?></p>
                                <a href="<?= loadmedia::youtubeEmbed($value['youtube_id']) ?>" class="uk-position-cover" data-type="iframe"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>