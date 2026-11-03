<?php

declare(strict_types=1);

namespace Tavaan\Engine\Admin\Contracts;

/**
 * قرارداد AdminManager.
 *
 * @see \Tavaan\Engine\Admin\AdminManager
 * @api 1.0
 */
interface AdminManagerInterface
{
    /**
     * متد resource.
     *
     * @return mixed
     */
    public function resource(/* ... */): mixed;

    /**
     * متد menu.
     *
     * @return mixed
     */
    public function menu(/* ... */): mixed;

    /**
     * متد dashboard.
     *
     * @return mixed
     */
    public function dashboard(/* ... */): mixed;

    /**
     * متد widget.
     *
     * @return mixed
     */
    public function widget(/* ... */): mixed;
}