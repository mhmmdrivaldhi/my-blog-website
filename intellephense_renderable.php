<?php

namespace Illuminate\Contracts\View;
use Illuminate\Contracts\Support\Renderable;

interface View Extends Renderable
{
    /** @return static */

    public function extends();
    public function section();
    public function layoutData();
    public function layout($viewName);
}
