<?php


    namespace OpStream\Interfaces;

    use OpStream\OpStream;

    /**
     * Interface SourceInterface
     * @package OpStream\Interfaces
     */
    interface SourceInterface
    {
        public function update(OpStream $opStream): array;

        public function getSourceName(): string;

        public function getSourceURL(): string;
    }