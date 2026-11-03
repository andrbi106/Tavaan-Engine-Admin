<?php

declare(strict_types=1);

namespace Tavaan\Engine\Admin;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * Form — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Admin\Contracts\FormInterface
 */
final class Form implements Contracts\FormInterface
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
    public function text(/* ... */): mixed
    {
        // TODO: پیاده‌سازی text مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function textarea(/* ... */): mixed
    {
        // TODO: پیاده‌سازی textarea مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function number(/* ... */): mixed
    {
        // TODO: پیاده‌سازی number مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function money(/* ... */): mixed
    {
        // TODO: پیاده‌سازی money مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function select(/* ... */): mixed
    {
        // TODO: پیاده‌سازی select مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function relation(/* ... */): mixed
    {
        // TODO: پیاده‌سازی relation مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function media(/* ... */): mixed
    {
        // TODO: پیاده‌سازی media مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function richtext(/* ... */): mixed
    {
        // TODO: پیاده‌سازی richtext مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function jalaliDate(/* ... */): mixed
    {
        // TODO: پیاده‌سازی jalaliDate مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function repeater(/* ... */): mixed
    {
        // TODO: پیاده‌سازی repeater مطابق مستندات (سند §3 API).
        return null;
    }
}