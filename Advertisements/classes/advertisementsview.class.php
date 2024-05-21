<?php

    class AdvertisementsView extends Advertisements {
        
        public function showAdvertisements() {
            $results = $this->getAdvertisements();
            
            return $results;
        }
    }

?>