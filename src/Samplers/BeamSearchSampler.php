<?php

declare(strict_types=1);


namespace Codewithkyrian\Transformers\Samplers;

use Codewithkyrian\Transformers\Utils\Tensor;

class BeamSearchSampler extends Sampler
{

    /**
     * @param GenerationConfig $generationConfig
     */
    public function __construct(\Codewithkyrian\Transformers\Utils\GenerationConfig $generationConfig)
    {
    }

    public function sample(Tensor $logits, int $index)
    {
        // TODO: Implement sample() method.
    }
}