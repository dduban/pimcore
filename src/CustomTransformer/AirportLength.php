<?php

namespace AppBundle\CustomTransformer;

use Pimcore\Tool\ImportExport\Data\Transformer\TransformerInterface;

class AirportLength implements TransformerInterface
{

    const MIN_SURFACE = 1312; // Minimalna wartość powierzchni
    const DEFAULT_SURFACE = 6000; // Domyślna wartość powierzchni w przypadku błędu

    public function transform($data, $options = []): int
    {

        if (is_numeric($data)) {
            $value = (int) $data;
        } else {
            return self::DEFAULT_SURFACE;
        }

        if ($value < self::MIN_SURFACE) {
            return self::DEFAULT_SURFACE;
        }

        return $value;
    }


}