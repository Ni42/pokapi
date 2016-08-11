<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos.Networking.Envelopes.proto
 */


namespace POGOProtos\Networking\Envelopes;

/**
 * Protobuf message : POGOProtos.Networking.Envelopes.Signature
 */
class Signature extends \Protobuf\AbstractMessage
{

    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;

    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;

    /**
     * timestamp_since_start optional uint64 = 2
     *
     * @var int
     */
    protected $timestamp_since_start = null;

    /**
     * location_fix repeated message = 4
     *
     * @var \Protobuf\Collection<\POGOProtos\Networking\Envelopes\Signature\LocationFix>
     */
    protected $location_fix = null;

    /**
     * gps_info optional message = 5
     *
     * @var \POGOProtos\Networking\Envelopes\Signature\AndroidGpsInfo
     */
    protected $gps_info = null;

    /**
     * sensor_info optional message = 7
     *
     * @var \POGOProtos\Networking\Envelopes\Signature\SensorInfo
     */
    protected $sensor_info = null;

    /**
     * device_info optional message = 8
     *
     * @var \POGOProtos\Networking\Envelopes\Signature\DeviceInfo
     */
    protected $device_info = null;

    /**
     * activity_status optional message = 9
     *
     * @var \POGOProtos\Networking\Envelopes\Signature\ActivityStatus
     */
    protected $activity_status = null;

    /**
     * location_hash1 optional uint64 = 10
     *
     * @var int
     */
    protected $location_hash1 = null;

    /**
     * location_hash2 optional uint64 = 20
     *
     * @var int
     */
    protected $location_hash2 = null;

    /**
     * session_hash optional bytes = 22
     *
     * @var \Protobuf\Stream
     */
    protected $session_hash = null;

    /**
     * timestamp optional uint64 = 23
     *
     * @var int
     */
    protected $timestamp = null;

    /**
     * request_hash repeated int64 = 24
     *
     * @var \Protobuf\Collection
     */
    protected $request_hash = null;

    /**
     * unknown25 optional int64 = 25
     *
     * @var int
     */
    protected $unknown25 = null;

    /**
     * Check if 'timestamp_since_start' has a value
     *
     * @return bool
     */
    public function hasTimestampSinceStart()
    {
        return $this->timestamp_since_start !== null;
    }

    /**
     * Get 'timestamp_since_start' value
     *
     * @return int
     */
    public function getTimestampSinceStart()
    {
        return $this->timestamp_since_start;
    }

    /**
     * Set 'timestamp_since_start' value
     *
     * @param int $value
     */
    public function setTimestampSinceStart($value = null)
    {
        $this->timestamp_since_start = $value;
    }

    /**
     * Check if 'location_fix' has a value
     *
     * @return bool
     */
    public function hasLocationFixList()
    {
        return $this->location_fix !== null;
    }

    /**
     * Get 'location_fix' value
     *
     * @return \Protobuf\Collection<\POGOProtos\Networking\Envelopes\Signature\LocationFix>
     */
    public function getLocationFixList()
    {
        return $this->location_fix;
    }

    /**
     * Set 'location_fix' value
     *
     * @param \Protobuf\Collection<\POGOProtos\Networking\Envelopes\Signature\LocationFix> $value
     */
    public function setLocationFixList(\Protobuf\Collection $value = null)
    {
        $this->location_fix = $value;
    }

    /**
     * Add a new element to 'location_fix'
     *
     * @param \POGOProtos\Networking\Envelopes\Signature\LocationFix $value
     */
    public function addLocationFix(\POGOProtos\Networking\Envelopes\Signature\LocationFix $value)
    {
        if ($this->location_fix === null) {
            $this->location_fix = new \Protobuf\MessageCollection();
        }

        $this->location_fix->add($value);
    }

    /**
     * Check if 'gps_info' has a value
     *
     * @return bool
     */
    public function hasGpsInfo()
    {
        return $this->gps_info !== null;
    }

    /**
     * Get 'gps_info' value
     *
     * @return \POGOProtos\Networking\Envelopes\Signature\AndroidGpsInfo
     */
    public function getGpsInfo()
    {
        return $this->gps_info;
    }

    /**
     * Set 'gps_info' value
     *
     * @param \POGOProtos\Networking\Envelopes\Signature\AndroidGpsInfo $value
     */
    public function setGpsInfo(\POGOProtos\Networking\Envelopes\Signature\AndroidGpsInfo $value = null)
    {
        $this->gps_info = $value;
    }

    /**
     * Check if 'sensor_info' has a value
     *
     * @return bool
     */
    public function hasSensorInfo()
    {
        return $this->sensor_info !== null;
    }

    /**
     * Get 'sensor_info' value
     *
     * @return \POGOProtos\Networking\Envelopes\Signature\SensorInfo
     */
    public function getSensorInfo()
    {
        return $this->sensor_info;
    }

    /**
     * Set 'sensor_info' value
     *
     * @param \POGOProtos\Networking\Envelopes\Signature\SensorInfo $value
     */
    public function setSensorInfo(\POGOProtos\Networking\Envelopes\Signature\SensorInfo $value = null)
    {
        $this->sensor_info = $value;
    }

    /**
     * Check if 'device_info' has a value
     *
     * @return bool
     */
    public function hasDeviceInfo()
    {
        return $this->device_info !== null;
    }

    /**
     * Get 'device_info' value
     *
     * @return \POGOProtos\Networking\Envelopes\Signature\DeviceInfo
     */
    public function getDeviceInfo()
    {
        return $this->device_info;
    }

    /**
     * Set 'device_info' value
     *
     * @param \POGOProtos\Networking\Envelopes\Signature\DeviceInfo $value
     */
    public function setDeviceInfo(\POGOProtos\Networking\Envelopes\Signature\DeviceInfo $value = null)
    {
        $this->device_info = $value;
    }

    /**
     * Check if 'activity_status' has a value
     *
     * @return bool
     */
    public function hasActivityStatus()
    {
        return $this->activity_status !== null;
    }

    /**
     * Get 'activity_status' value
     *
     * @return \POGOProtos\Networking\Envelopes\Signature\ActivityStatus
     */
    public function getActivityStatus()
    {
        return $this->activity_status;
    }

    /**
     * Set 'activity_status' value
     *
     * @param \POGOProtos\Networking\Envelopes\Signature\ActivityStatus $value
     */
    public function setActivityStatus(\POGOProtos\Networking\Envelopes\Signature\ActivityStatus $value = null)
    {
        $this->activity_status = $value;
    }

    /**
     * Check if 'location_hash1' has a value
     *
     * @return bool
     */
    public function hasLocationHash1()
    {
        return $this->location_hash1 !== null;
    }

    /**
     * Get 'location_hash1' value
     *
     * @return int
     */
    public function getLocationHash1()
    {
        return $this->location_hash1;
    }

    /**
     * Set 'location_hash1' value
     *
     * @param int $value
     */
    public function setLocationHash1($value = null)
    {
        $this->location_hash1 = $value;
    }

    /**
     * Check if 'location_hash2' has a value
     *
     * @return bool
     */
    public function hasLocationHash2()
    {
        return $this->location_hash2 !== null;
    }

    /**
     * Get 'location_hash2' value
     *
     * @return int
     */
    public function getLocationHash2()
    {
        return $this->location_hash2;
    }

    /**
     * Set 'location_hash2' value
     *
     * @param int $value
     */
    public function setLocationHash2($value = null)
    {
        $this->location_hash2 = $value;
    }

    /**
     * Check if 'session_hash' has a value
     *
     * @return bool
     */
    public function hasSessionHash()
    {
        return $this->session_hash !== null;
    }

    /**
     * Get 'session_hash' value
     *
     * @return \Protobuf\Stream
     */
    public function getSessionHash()
    {
        return $this->session_hash;
    }

    /**
     * Set 'session_hash' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setSessionHash($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->session_hash = $value;
    }

    /**
     * Check if 'timestamp' has a value
     *
     * @return bool
     */
    public function hasTimestamp()
    {
        return $this->timestamp !== null;
    }

    /**
     * Get 'timestamp' value
     *
     * @return int
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set 'timestamp' value
     *
     * @param int $value
     */
    public function setTimestamp($value = null)
    {
        $this->timestamp = $value;
    }

    /**
     * Check if 'request_hash' has a value
     *
     * @return bool
     */
    public function hasRequestHashList()
    {
        return $this->request_hash !== null;
    }

    /**
     * Get 'request_hash' value
     *
     * @return \Protobuf\Collection
     */
    public function getRequestHashList()
    {
        return $this->request_hash;
    }

    /**
     * Set 'request_hash' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setRequestHashList(\Protobuf\Collection $value = null)
    {
        $this->request_hash = $value;
    }

    /**
     * Add a new element to 'request_hash'
     *
     * @param int $value
     */
    public function addRequestHash($value)
    {
        if ($this->request_hash === null) {
            $this->request_hash = new \Protobuf\ScalarCollection();
        }

        $this->request_hash->add($value);
    }

    /**
     * Check if 'unknown25' has a value
     *
     * @return bool
     */
    public function hasUnknown25()
    {
        return $this->unknown25 !== null;
    }

    /**
     * Get 'unknown25' value
     *
     * @return int
     */
    public function getUnknown25()
    {
        return $this->unknown25;
    }

    /**
     * Set 'unknown25' value
     *
     * @param int $value
     */
    public function setUnknown25($value = null)
    {
        $this->unknown25 = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
        if ( $this->extensions !== null) {
            return $this->extensions;
        }

        return $this->extensions = new \Protobuf\Extension\ExtensionFieldMap(__CLASS__);
    }

    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
        return $this->unknownFieldSet;
    }

    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
        return new self($stream, $configuration);
    }

    /**
     * {@inheritdoc}
     */
    public static function fromArray(array $values)
    {
        $message = new self();
        $values  = array_merge([
            'timestamp_since_start' => null,
            'location_fix' => [],
            'gps_info' => null,
            'sensor_info' => null,
            'device_info' => null,
            'activity_status' => null,
            'location_hash1' => null,
            'location_hash2' => null,
            'session_hash' => null,
            'timestamp' => null,
            'request_hash' => [],
            'unknown25' => null
        ], $values);

        $message->setTimestampSinceStart($values['timestamp_since_start']);
        $message->setGpsInfo($values['gps_info']);
        $message->setSensorInfo($values['sensor_info']);
        $message->setDeviceInfo($values['device_info']);
        $message->setActivityStatus($values['activity_status']);
        $message->setLocationHash1($values['location_hash1']);
        $message->setLocationHash2($values['location_hash2']);
        $message->setSessionHash($values['session_hash']);
        $message->setTimestamp($values['timestamp']);
        $message->setUnknown25($values['unknown25']);

        foreach ($values['location_fix'] as $item) {
            $message->addLocationFix($item);
        }

        foreach ($values['request_hash'] as $item) {
            $message->addRequestHash($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'Signature',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'timestamp_since_start',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'location_fix',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.POGOProtos.Networking.Envelopes.Signature.LocationFix'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'gps_info',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Networking.Envelopes.Signature.AndroidGpsInfo'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'sensor_info',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Networking.Envelopes.Signature.SensorInfo'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'device_info',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Networking.Envelopes.Signature.DeviceInfo'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'activity_status',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Networking.Envelopes.Signature.ActivityStatus'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 10,
                    'name' => 'location_hash1',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 20,
                    'name' => 'location_hash2',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 22,
                    'name' => 'session_hash',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 23,
                    'name' => 'timestamp',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 24,
                    'name' => 'request_hash',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 25,
                    'name' => 'unknown25',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function toStream(\Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createWriteContext();
        $stream  = $context->getStream();

        $this->writeTo($context);
        $stream->seek(0);

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
        $stream      = $context->getStream();
        $writer      = $context->getWriter();
        $sizeContext = $context->getComputeSizeContext();

        if ($this->timestamp_since_start !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->timestamp_since_start);
        }

        if ($this->location_fix !== null) {
            foreach ($this->location_fix as $val) {
                $writer->writeVarint($stream, 34);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->gps_info !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeVarint($stream, $this->gps_info->serializedSize($sizeContext));
            $this->gps_info->writeTo($context);
        }

        if ($this->sensor_info !== null) {
            $writer->writeVarint($stream, 58);
            $writer->writeVarint($stream, $this->sensor_info->serializedSize($sizeContext));
            $this->sensor_info->writeTo($context);
        }

        if ($this->device_info !== null) {
            $writer->writeVarint($stream, 66);
            $writer->writeVarint($stream, $this->device_info->serializedSize($sizeContext));
            $this->device_info->writeTo($context);
        }

        if ($this->activity_status !== null) {
            $writer->writeVarint($stream, 74);
            $writer->writeVarint($stream, $this->activity_status->serializedSize($sizeContext));
            $this->activity_status->writeTo($context);
        }

        if ($this->location_hash1 !== null) {
            $writer->writeVarint($stream, 80);
            $writer->writeVarint($stream, $this->location_hash1);
        }

        if ($this->location_hash2 !== null) {
            $writer->writeVarint($stream, 160);
            $writer->writeVarint($stream, $this->location_hash2);
        }

        if ($this->session_hash !== null) {
            $writer->writeVarint($stream, 178);
            $writer->writeByteStream($stream, $this->session_hash);
        }

        if ($this->timestamp !== null) {
            $writer->writeVarint($stream, 184);
            $writer->writeVarint($stream, $this->timestamp);
        }

        if ($this->request_hash !== null) {
            foreach ($this->request_hash as $val) {
                $writer->writeVarint($stream, 192);
                $writer->writeVarint($stream, $val);
            }
        }

        if ($this->unknown25 !== null) {
            $writer->writeVarint($stream, 200);
            $writer->writeVarint($stream, $this->unknown25);
        }

        if ($this->extensions !== null) {
            $this->extensions->writeTo($context);
        }

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
        $reader = $context->getReader();
        $length = $context->getLength();
        $stream = $context->getStream();

        $limit = ($length !== null)
            ? ($stream->tell() + $length)
            : null;

        while ($limit === null || $stream->tell() < $limit) {

            if ($stream->eof()) {
                break;
            }

            $key  = $reader->readVarint($stream);
            $wire = \Protobuf\WireFormat::getTagWireType($key);
            $tag  = \Protobuf\WireFormat::getTagFieldNumber($key);

            if ($stream->eof()) {
                break;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->timestamp_since_start = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Networking\Envelopes\Signature\LocationFix();

                if ($this->location_fix === null) {
                    $this->location_fix = new \Protobuf\MessageCollection();
                }

                $this->location_fix->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Networking\Envelopes\Signature\AndroidGpsInfo();

                $this->gps_info = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Networking\Envelopes\Signature\SensorInfo();

                $this->sensor_info = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Networking\Envelopes\Signature\DeviceInfo();

                $this->device_info = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Networking\Envelopes\Signature\ActivityStatus();

                $this->activity_status = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 10) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->location_hash1 = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 20) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->location_hash2 = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 22) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->session_hash = $reader->readByteStream($stream);

                continue;
            }

            if ($tag === 23) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->timestamp = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 24) {
                \Protobuf\WireFormat::assertWireType($wire, 3);

                if ($this->request_hash === null) {
                    $this->request_hash = new \Protobuf\ScalarCollection();
                }

                $this->request_hash->add($reader->readVarint($stream));

                continue;
            }

            if ($tag === 25) {
                \Protobuf\WireFormat::assertWireType($wire, 3);

                $this->unknown25 = $reader->readVarint($stream);

                continue;
            }

            $extensions = $context->getExtensionRegistry();
            $extension  = $extensions ? $extensions->findByNumber(__CLASS__, $tag) : null;

            if ($extension !== null) {
                $this->extensions()->add($extension, $extension->readFrom($context, $wire));

                continue;
            }

            if ($this->unknownFieldSet === null) {
                $this->unknownFieldSet = new \Protobuf\UnknownFieldSet();
            }

            $data    = $reader->readUnknown($stream, $wire);
            $unknown = new \Protobuf\Unknown($tag, $wire, $data);

            $this->unknownFieldSet->add($unknown);

        }
    }

    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size       = 0;

        if ($this->timestamp_since_start !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->timestamp_since_start);
        }

        if ($this->location_fix !== null) {
            foreach ($this->location_fix as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->gps_info !== null) {
            $innerSize = $this->gps_info->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->sensor_info !== null) {
            $innerSize = $this->sensor_info->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->device_info !== null) {
            $innerSize = $this->device_info->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->activity_status !== null) {
            $innerSize = $this->activity_status->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->location_hash1 !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->location_hash1);
        }

        if ($this->location_hash2 !== null) {
            $size += 2;
            $size += $calculator->computeVarintSize($this->location_hash2);
        }

        if ($this->session_hash !== null) {
            $size += 2;
            $size += $calculator->computeByteStreamSize($this->session_hash);
        }

        if ($this->timestamp !== null) {
            $size += 2;
            $size += $calculator->computeVarintSize($this->timestamp);
        }

        if ($this->request_hash !== null) {
            foreach ($this->request_hash as $val) {
                $size += 2;
                $size += $calculator->computeVarintSize($val);
            }
        }

        if ($this->unknown25 !== null) {
            $size += 2;
            $size += $calculator->computeVarintSize($this->unknown25);
        }

        if ($this->extensions !== null) {
            $size += $this->extensions->serializedSize($context);
        }

        return $size;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $this->timestamp_since_start = null;
        $this->location_fix = null;
        $this->gps_info = null;
        $this->sensor_info = null;
        $this->device_info = null;
        $this->activity_status = null;
        $this->location_hash1 = null;
        $this->location_hash2 = null;
        $this->session_hash = null;
        $this->timestamp = null;
        $this->request_hash = null;
        $this->unknown25 = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Networking\Envelopes\Signature) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->timestamp_since_start = ($message->timestamp_since_start !== null) ? $message->timestamp_since_start : $this->timestamp_since_start;
        $this->location_fix = ($message->location_fix !== null) ? $message->location_fix : $this->location_fix;
        $this->gps_info = ($message->gps_info !== null) ? $message->gps_info : $this->gps_info;
        $this->sensor_info = ($message->sensor_info !== null) ? $message->sensor_info : $this->sensor_info;
        $this->device_info = ($message->device_info !== null) ? $message->device_info : $this->device_info;
        $this->activity_status = ($message->activity_status !== null) ? $message->activity_status : $this->activity_status;
        $this->location_hash1 = ($message->location_hash1 !== null) ? $message->location_hash1 : $this->location_hash1;
        $this->location_hash2 = ($message->location_hash2 !== null) ? $message->location_hash2 : $this->location_hash2;
        $this->session_hash = ($message->session_hash !== null) ? $message->session_hash : $this->session_hash;
        $this->timestamp = ($message->timestamp !== null) ? $message->timestamp : $this->timestamp;
        $this->request_hash = ($message->request_hash !== null) ? $message->request_hash : $this->request_hash;
        $this->unknown25 = ($message->unknown25 !== null) ? $message->unknown25 : $this->unknown25;
    }


}

