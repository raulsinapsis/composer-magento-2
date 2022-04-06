<?php

namespace Paycomet\Payment\Model\Apm\Klarna;

class PaymentMethod extends \Paycomet\Payment\Model\Apm\PaymentMethod
{
    const METHOD_ID = 13;
    const METHOD_CODE = 'paycomet_klarna';

    protected $_code = self::METHOD_CODE;

    protected $_canAuthorize = false;
    protected $_canCapture = false;
    protected $_canCapturePartial = false;
    protected $_canCaptureOnce = false;
    protected $_canRefund = true;
    protected $_canRefundInvoicePartial = true;
    protected $_isGateway = true;
    protected $_isInitializeNeeded = true;
    protected $_canUseInternal = false;
    protected $_canVoid = false;
    protected $_canReviewPayment = true;

}
