<?php
declare(strict_types=1);

namespace Jaeger\Tag;

class SpanKindProducerTag extends AbstractSpanKindTag
{
    public function __construct()
    {
        parent::__construct('producer');
    }
}
