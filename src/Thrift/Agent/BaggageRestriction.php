<?php
namespace Jaeger\Thrift\Agent;

/**
 * Autogenerated by Thrift Compiler (0.15.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class BaggageRestriction
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'baggageKey',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'maxValueLength',
            'isRequired' => true,
            'type' => TType::I32,
        ),
    );

    /**
     * @var string
     */
    public $baggageKey = null;
    /**
     * @var int
     */
    public $maxValueLength = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['baggageKey'])) {
                $this->baggageKey = $vals['baggageKey'];
            }
            if (isset($vals['maxValueLength'])) {
                $this->maxValueLength = $vals['maxValueLength'];
            }
        }
    }

    public function getName()
    {
        return 'BaggageRestriction';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->baggageKey);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->maxValueLength);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                default:
                    $xfer += $input->skip($ftype);
                    break;
            }
            $xfer += $input->readFieldEnd();
        }
        $xfer += $input->readStructEnd();
        return $xfer;
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('BaggageRestriction');
        if ($this->baggageKey !== null) {
            $xfer += $output->writeFieldBegin('baggageKey', TType::STRING, 1);
            $xfer += $output->writeString($this->baggageKey);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->maxValueLength !== null) {
            $xfer += $output->writeFieldBegin('maxValueLength', TType::I32, 2);
            $xfer += $output->writeI32($this->maxValueLength);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
