<?php
namespace CodeTool\OpenTracing\Jaeger\Thrift;

/**
 * Autogenerated by Thrift Compiler (1.0.0-dev)
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


class Log {
  static $isValidate = false;

  static $_TSPEC = array(
    1 => array(
      'var' => 'timestamp',
      'isRequired' => true,
      'type' => TType::I64,
      ),
    2 => array(
      'var' => 'fields',
      'isRequired' => true,
      'type' => TType::LST,
      'etype' => TType::STRUCT,
      'elem' => array(
        'type' => TType::STRUCT,
        'class' => '\CodeTool\OpenTracing\Jaeger\Thrift\Tag',
        ),
      ),
    );

  /**
   * @var int
   */
  public $timestamp = null;
  /**
   * @var \CodeTool\OpenTracing\Jaeger\Thrift\Tag[]
   */
  public $fields = null;

  public function __construct($vals=null) {
    if (is_array($vals)) {
      if (isset($vals['timestamp'])) {
        $this->timestamp = $vals['timestamp'];
      }
      if (isset($vals['fields'])) {
        $this->fields = $vals['fields'];
      }
    }
  }

  public function getName() {
    return 'Log';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->timestamp);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::LST) {
            $this->fields = array();
            $_size0 = 0;
            $_etype3 = 0;
            $xfer += $input->readListBegin($_etype3, $_size0);
            for ($_i4 = 0; $_i4 < $_size0; ++$_i4)
            {
              $elem5 = null;
              $elem5 = new \CodeTool\OpenTracing\Jaeger\Thrift\Tag();
              $xfer += $elem5->read($input);
              $this->fields []= $elem5;
            }
            $xfer += $input->readListEnd();
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

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('Log');
    if ($this->timestamp !== null) {
      $xfer += $output->writeFieldBegin('timestamp', TType::I64, 1);
      $xfer += $output->writeI64($this->timestamp);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->fields !== null) {
      if (!is_array($this->fields)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('fields', TType::LST, 2);
      {
        $output->writeListBegin(TType::STRUCT, count($this->fields));
        {
          foreach ($this->fields as $iter6)
          {
            $xfer += $iter6->write($output);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

