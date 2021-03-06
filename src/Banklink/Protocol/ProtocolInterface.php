<?php

namespace Banklink\Protocol;

/**
 * Generic Protocol interface
 *
 * @author Roman Marintsenko <inoryy@gmail.com>
 * @since  11.01.2012
 */
interface ProtocolInterface
{
    /**
     * @param int $orderId
     * @param int $sum
     * @param string $message
     * @param string $language
     * @param string $currency
     *
     * @return array
     */
    function preparePaymentRequestData($orderId, $sum, $message, $outputEncoding, $language = 'EST', $currency = 'EUR');

    /**
     * Determine which response exactly by service id, if it's supported then call related internal method
     *
     * @param array $responseData
     *
     * @return \Banklink\Response\Response
     */
    function handleResponse(array $responseData, $inputEncoding);
}