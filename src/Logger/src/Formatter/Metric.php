<?php
declare(strict_types=1);

namespace rollun\logger\Formatter;

use DateTime;
use DateTimeZone;
use Zend\Log\Formatter\Db;

/**
 * Class Metric
 *
 * @author r.ratsun <r.ratsun.rollun@gmail.com>
 */
class Metric extends Db
{
    /**
     * @inheritDoc
     */
    public function format($event)
    {
        $newEvent = [
            'value' => isset($event['context']['value']) ? $event['context']['value'] : null,
            'timestamp' => (new DateTime('now', new DateTimeZone('UTC')))->getTimestamp()
        ];

        if(isset($event['context']['info'])) {
            $newEvent['info'] = $event['context']['info'];
        }

        return $newEvent;
    }
}
