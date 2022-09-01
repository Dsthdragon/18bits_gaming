<?php $general = new general_model(); ?>
<div class="uk-container uk-margin-top">
    <h2 class="uk-heading-line uk-text-bold"><span>Our Games</span></h2>
    <div uk-filter="target: .game-filter">
        <?php if(!empty($this->platforms) || !empty($this->genres)): ?>
            <ul uk-tab>
                <li class="uk-active" uk-filter-control><a href="#">All</a></li>
                <?php foreach($this->platforms as $key => $value) : ?>
                    <li uk-filter-control=".<?= $value['link']; ?>"><a href="#"><?= $value['title']; ?></a></li>
                <?php endforeach; ?>
                <?php foreach($this->genres as $key => $value) : ?>
                    <li uk-filter-control=".<?= $value['link']; ?>"><a href="#"><?= $value['title']; ?></a></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    <div class="uk-grid game-filter uk-child-width-1-1 uk-child-width-1-4@m" uk-grid>
        <?php foreach($this->games as $key => $value): ?>
            <?php 
            
            
            $genres = "";
            foreach($general->gameGenres($value['id']) as $key => $val){
                $genres .= " ".$val['link'];
            }
            $platforms =  "";
            foreach($general->gamePlatforms($value['id']) as $key => $val){
                $platforms .= " ".$val['link'];
            }
            ?>
            <div class="<?= $platforms ?><?= $genres ?>">
                <div class="uk-grid uk-grid-medium uk-flex uk-flex-middle" data-uk-grid>
                    <div class="uk-width-1-1@s uk-width-1-1@m uk-height-1-1">
                        <div class="uk-inline uk-inline-clip uk-transition-toggle ">
                            <img uk-img data-src="<?= loadmedia::image($value['image'], "thumb") ?>" alt="">
                            <div class="uk-transition-slide-bottom uk-overlay uk-overlay-primary uk-position-bottom">
                                <p><?= $value['title']; ?></p>
                            </div>
                            <a href="<?= URL ."game/".$value['link']; ?>" class="uk-position-cover" data-type="image"></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</div>