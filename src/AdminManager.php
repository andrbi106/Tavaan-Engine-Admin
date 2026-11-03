<?php

declare(strict_types=1);

namespace Tavaan\Engine\Admin;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * AdminManager — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Admin\Contracts\AdminManagerInterface
 */
final class AdminManager implements Contracts\AdminManagerInterface
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
    public function resource(/* ... */): mixed
    {
        // TODO: پیاده‌سازی resource مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function menu(/* ... */): mixed
    {
        // TODO: پیاده‌سازی menu مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function dashboard(/* ... */): mixed
    {
        // TODO: پیاده‌سازی dashboard مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function widget(/* ... */): mixed
    {
        // TODO: پیاده‌سازی widget مطابق مستندات (سند §3 API).
        return null;
    }
}