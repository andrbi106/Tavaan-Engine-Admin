<?php

declare(strict_types=1);

namespace Tavaan\Engine\Admin\Contracts;

/**
 * قرارداد Form.
 *
 * @see \Tavaan\Engine\Admin\Form
 * @api 1.0
 */
interface FormInterface
{
    /**
     * متد text.
     *
     * @return mixed
     */
    public function text(/* ... */): mixed;

    /**
     * متد textarea.
     *
     * @return mixed
     */
    public function textarea(/* ... */): mixed;

    /**
     * متد number.
     *
     * @return mixed
     */
    public function number(/* ... */): mixed;

    /**
     * متد money.
     *
     * @return mixed
     */
    public function money(/* ... */): mixed;

    /**
     * متد select.
     *
     * @return mixed
     */
    public function select(/* ... */): mixed;

    /**
     * متد relation.
     *
     * @return mixed
     */
    public function relation(/* ... */): mixed;

    /**
     * متد media.
     *
     * @return mixed
     */
    public function media(/* ... */): mixed;

    /**
     * متد richtext.
     *
     * @return mixed
     */
    public function richtext(/* ... */): mixed;

    /**
     * متد jalaliDate.
     *
     * @return mixed
     */
    public function jalaliDate(/* ... */): mixed;

    /**
     * متد repeater.
     *
     * @return mixed
     */
    public function repeater(/* ... */): mixed;
}