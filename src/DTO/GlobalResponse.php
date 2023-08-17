<?php

declare(strict_types=1);

namespace Hyperf\ApiDocs\DTO;

use Hyperf\ApiDocs\Annotation\ApiVariable;

class GlobalResponse
{
    public string $code = '200';

    #[ApiVariable]
    public mixed $data;

    public string $message = '';

    public function __construct(mixed $data)
    {
        $this->data = $data;
    }
}
