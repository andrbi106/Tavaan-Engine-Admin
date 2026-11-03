<?php

declare(strict_types=1);

namespace Tavaan\Engine\Admin;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\Admin\Contracts\AdminManagerInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * AdminManagerServiceProvider — ثبت سرویس‌های موتور AdminManager.
 */
final class AdminManagerServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(AdminManagerInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new AdminManager($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // ثبت Facade
        $this->app->instance('admin', $this->app->get(AdminManagerInterface::class));

    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            AdminManagerInterface::class,
            'admin',
        ];
    }
}