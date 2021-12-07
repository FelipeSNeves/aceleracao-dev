<?php 

    class File {
        private $size;
    }

    class Image extends File {
        private $width;
        private $height;
    }

    class Audio extends File {
        private $codec;
        private $duration;
    }

    class Text extends File {
        private $fontSize;
    }

    class CompactaArquivo {
        
        public static function CompactaRar($file) {
            echo "Compactar RAR";
        }

        public static function CompactaZip($file) {
            echo "Compactar Zip";
        }

        public static function CompactaTar($file) {
            echo "Compactar TAR";
        }
    }

?>