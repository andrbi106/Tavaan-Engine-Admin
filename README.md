# Tavaan Engine — Admin

> **پیشخان و CRUD Generator** — موتور Admin در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.admin` |
| نام | `Admin` |
| عنوان فارسی | پیشخان و CRUD Generator |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\Admin` |
| نوع | `engine` |
| Facade | `Admin` (accessor: `admin`) |

## توضیحات

M8/TVN-0078: CRUD generator declarative (۲۷ نوع فیلد، validation خودکار، jalali_date دوطرفه، sanitizer برای richtext)، منوی پویا (manifest + permission filter)، ویجت/نمودار SVG داشبورد، RTL، theme override در resources/views/vendor/admin.

## Facadeها

- `Tavaan\Engine\Admin\Facades\Admin`

## کلاس‌های اصلی

- `src/Action.php`
- `src/Dashboard/Dashboard.php`
- `src/Form.php`
- `src/Form/Field.php`
- `src/Form/Repeater.php`
- `src/Http/AdminController.php`
- `src/Http/DashboardController.php`
- `src/Menu/Menu.php`
- `src/Menu/MenuItem.php`
- `src/Resource.php`
- `src/Show.php`
- `src/Support/ChartRenderer.php`
- `src/Support/ValueTransformer.php`
- `src/admin.php`

## Service Providerها

- `Tavaan\Engine\Admin\AdminManagerServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `view`
- `rbac`
- `orm`
- `validation`
- `http`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-Admin.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-Admin`** (این مخزن) | موتور Admin |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
