<div class="uk-section">
    <div class="uk-container">
        <h2 class="uk-heading-line uk-text-bold"><span><?= $this->game['title']; ?></span></h2>
        <div class="uk-grid" data-uk-grid>
            <div class="uk-width-1-2@m">
                <div class="uk-sticky" data-uk-sticky="top: 20px">
                    <img src="<?= loadmedia::image($this->game['image'], "img") ?>" class="uk-align-center" alt="">
                </div>
            </div>
            <div class="uk-width-1-2@m uk-padding-remove">
                <div class="uk-section uk-section-muted uk-padding-small uk-text-center">
                    <h2><?= $this->game['title']; ?></h2>
                </div>
                <p>
                    <b>Description:</b> 
                    <?= $this->game['description']; ?>
                </p>
                <p>
                    <h4>Platform:</h4>
                    <?php foreach($this->platforms as $key => $value): ?>
                        <b><?= $value['platform_title']; ?>:</b>  <?= (strtotime($value['release_date']) == 0) ? "Coming Soon" : relative_time::wordmonth($value['release_date']) ; ?> <br />
                    <?php endforeach; ?>
                </p>
                <p>
                    <b>Genre:</b> 
                    <?php 
                    $genres = array_column($this->genres, "genre_title");
                    echo implode(", ", $genres);
                    ?>
                </p>
                <p>
                    <b>Langauges:</b> English
                </p>
                <h4>Links</h4>
                <p>
                 <?php foreach($this->stores as $key => $value): ?>
                    <b><?= $value['store_title']; ?>:</b> <a href="<?= $value['url'] ?>" target="_blank">Click Here</a>
                <?php endforeach; ?>
            </p>
            <h4>ScreenShots</h4>
            <div class="uk-grid-collapse uk-grid" data-uk-lightbox="toggle:a.uk-position-cover" data-uk-grid>
                <?php foreach($this->images as $key => $value): ?>
                    <div class="uk-width-1-1@s uk-width-1-4@m">
                        <div class="uk-grid-collapse uk-grid uk-grid-medium uk-flex uk-flex-middle" data-uk-grid>
                            <div class="uk-width-1-1@s uk-width-1-1@m uk-height-1-1">
                                <div class="uk-inline uk-inline-clip uk-transition-toggle ">
                                    <img src="<?= loadmedia::image($value['image'], "thumb") ?>" alt="">
                                    <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">
                                        <div class="uk-transition-fade uk-position-center">
                                            <span uk-overlay-icon></span>
                                        </div>
                                        <a href="<?= loadmedia::image($value['image'], "img") ?>" class="uk-position-cover" data-type="image"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <h4>Video</h4>
            <div class="uk-grid-collapse uk-grid" data-uk-lightbox="toggle:a.uk-position-cover" data-uk-grid>
                <?php foreach($this->videos as $key => $value): ?>
                    <div class="uk-width-1-1@s uk-width-1-4@m">
                        <div class="uk-grid-collapse uk-grid uk-grid-medium uk-flex uk-flex-middle" data-uk-grid>
                            <div class="uk-width-1-1@s uk-width-1-1@m uk-height-1-1">
                                <div class="uk-inline uk-inline-clip uk-transition-toggle uk-width-1-1 uk-height-1-1">
                                    <img src="<?= loadmedia::youtubeThumb($value['youtube_id']) ?>" class="uk-width-1-1 uk-height-1-1" alt="">
                                    <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">
                                        <div class="uk-transition-fade uk-position-center">
                                            <span uk-overlay-icon></span>
                                        </div>
                                        <a href="<?= loadmedia::youtubeEmbed($value['youtube_id']) ?>" class="uk-position-cover" data-type="iframe"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
</div>
