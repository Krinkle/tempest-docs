<?php

declare(strict_types=1);

namespace App\Highlight\Injections;

use App\Highlight\IsTagInjection;
use Tempest\Highlight\Escape;
use Tempest\Highlight\Injection;
use Tempest\Highlight\Themes\TerminalStyle;

final readonly class EmphasizeInjection implements Injection
{
    use IsTagInjection;

    public function getTag(): string
    {
        return 'em';
    }

    public function style(string $content): string
    {
        return sprintf(
            '%s%s%s',
            Escape::tokens('<span class="hl-console-em">'),
            $content,
            Escape::tokens('</span>'),
        );
    }
}
