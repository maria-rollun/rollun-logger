<?php

namespace rollun\logger\Transport;

/**
 * Enum class of transport layer protocols
 * @package rollun\logger\Transport
 */
class Protocol
{
    private const TCP = 'tcp';
    private const UDP = 'udp';

    /**
     * @var string
     */
    private $value;

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public static function TCP(): self
    {
        return new self(self::TCP);
    }

    public static function UDP(): self
    {
        return new self(self::UDP);
    }
}