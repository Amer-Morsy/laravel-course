<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SearchForm extends Component
{
    /**
     * @var string
     */
    public $action;
    public $method;

    /**
     * Create a new component instance.
     * @param string $action
     * @param string $method
     */
    public function __construct($action='/search', $method='GET')
    {
        $this->action = $action;
        $this->method = $method;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.search-form');
    }

    public function test()
    {
        return 'If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius';
    }

}
