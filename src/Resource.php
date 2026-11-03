<?php

declare(strict_types=1);

namespace Tavaan\Engine\Admin;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * Resource — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Admin\Contracts\ResourceInterface
 */
final class Resource implements Contracts\ResourceInterface
{
    /**
     * @param Config $config پیکربندی موتور
     */
    public function __construct(
        private readonly Config $config,
    ) {
    }

    /**
     * {@inheritdoc}
     */
    public function title(/* ... */): mixed
    {
        // TODO: پیاده‌سازی title مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function columns(/* ... */): mixed
    {
        // TODO: پیاده‌سازی columns مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function searchable(/* ... */): mixed
    {
        // TODO: پیاده‌سازی searchable مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function filterable(/* ... */): mixed
    {
        // TODO: پیاده‌سازی filterable مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function sortable(/* ... */): mixed
    {
        // TODO: پیاده‌سازی sortable مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function form(/* ... */): mixed
    {
        // TODO: پیاده‌سازی form مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function actions(/* ... */): mixed
    {
        // TODO: پیاده‌سازی actions مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function show(/* ... */): mixed
    {
        // TODO: پیاده‌سازی show مطابق مستندات (سند §3 API).
        return null;
    }
}