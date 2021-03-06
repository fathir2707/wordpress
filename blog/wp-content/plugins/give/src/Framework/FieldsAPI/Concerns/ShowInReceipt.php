<?php

namespace Give\Framework\FieldsAPI\Concerns;

/**
 * @since 2.10.2
 */
trait ShowInReceipt
{

    /**
     * @since 2.10.2
     * @var bool
     */
    protected $showInReceipt = false;

    /**
     * @since 2.10.2
     * @return $this
     */
    public function showInReceipt($showInReceipt = true)
    {
        $this->showInReceipt = $showInReceipt;

        return $this;
    }

    /**
     * @since 2.10.2
     * @return bool
     */
    public function shouldShowInReceipt()
    {
        return $this->showInReceipt;
    }
}
