<?php

declare(strict_types=1);

namespace Tavaan\Engine\Admin\Contracts;

/**
 * قرارداد Resource.
 *
 * @see \Tavaan\Engine\Admin\Resource
 * @api 1.0
 */
interface ResourceInterface
{
    /**
     * متد title.
     *
     * @return mixed
     */
    public function title(/* ... */): mixed;

    /**
     * متد columns.
     *
     * @return mixed
     */
    public function columns(/* ... */): mixed;

    /**
     * متد searchable.
     *
     * @return mixed
     */
    public function searchable(/* ... */): mixed;

    /**
     * متد filterable.
     *
     * @return mixed
     */
    public function filterable(/* ... */): mixed;

    /**
     * متد sortable.
     *
     * @return mixed
     */
    public function sortable(/* ... */): mixed;

    /**
     * متد form.
     *
     * @return mixed
     */
    public function form(/* ... */): mixed;

    /**
     * متد actions.
     *
     * @return mixed
     */
    public function actions(/* ... */): mixed;

    /**
     * متد show.
     *
     * @return mixed
     */
    public function show(/* ... */): mixed;
}