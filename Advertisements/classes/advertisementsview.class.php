<?php

    class AdvertisementsView extends Advertisements {
        
        public function showAdvertisements() {
            $results = $this->getAdvertisements();
            foreach ($results as $row) {
                echo "User name: " . $row["name"] . "; " . "adv title: " . $row["title"] . "<br>";
            }
        }
    }

?>