<?php
namespace Kbank\Struct;

abstract class Constant {
    /**
     * -Initialize : Payment transaction initialized (process)
     * -Pre-Authorized : Payment need to do authentication 3D secure (process)
     * -Authorized : Authorized success-Declined : Reject payment from host (process)
     * -Reversed : Payment failed from system reject (error)
     * -Voided : Void transaction complete (cancel)
     * -Captured : Settle transaction success (wait for complete in  next day) (success)
     * -Settled : Payment transaction settled-Refund Sent : Successfully refund (wait for completion the next day) (cancel)
     * -Refunded : Payment transaction refunded (cancel)
     * -Partial Refund : Some of amount refunded (cancel)
     */

    const INQUIRY_STATUS_SETTLED = 'Captured';

    const TRANSACTION_STATE_AUTHORIZED = 'Authorized'; // Authorized success

    const TRANSACTION_STATE_INITIALIZE = 'Initialize'; // Payment transaction initialized
    const TRANSACTION_STATE_PRE_AUTHORIZED = 'Pre-Authorized'; // Payment need to do authentication 3D secure
    const TRANSACTION_STATE_DECLINED = 'Declined'; // Reject payment from host
    const TRANSACTION_STATE_REVERSED = 'Reversed'; // Payment failed from system reject
    const TRANSACTION_STATE_VOIDED = 'Voided';
    const TRANSACTION_STATE_SETTLED = 'Settled';
    const TRANSACTION_STATE_REFUNDED = 'Refunded';
    const TRANSACTION_STATE_PARTIAL_REFUND = 'Partial Refund';

    
}