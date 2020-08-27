<?php /** @noinspection PhpUnused */


    namespace OpStream\Abstracts;

    /**
     * Class Codecs
     * @package OpStream\Abstracts
     */
    abstract class Codecs
    {
        const AdvancedAudioCoding = "AAC";

        const AdvancedAudioCodingPlus = "ACC+";

        const AdvancedAudioCodingCompressed = "AAC,H.264";

        const FlashVideo = "FLV";

        const MPEG_AudioLayer3 = "MP3";

        const MPEG_AudioLayer3Compressed = "MP3,H.264";

        const XiphOGG = "OGG";

        const Unknown = "UNKNOWN";

        const UnknownCompressed = "UNKNOWN,H.264";
    }