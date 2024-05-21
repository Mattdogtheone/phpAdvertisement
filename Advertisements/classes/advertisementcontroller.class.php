<?php

    class AdvertisementController extends Advertisements {

        public function createAdvertisement($userid, $title) {
            $this->setAdvertisement($userid, $title);
        }
        
    }

?>