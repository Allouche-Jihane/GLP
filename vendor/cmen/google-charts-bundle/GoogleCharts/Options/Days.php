<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class Days
{
    /**
     * @var string
     */
    protected $format;

    /**
     * @param string $format
     *
     * @return $this
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }
}
