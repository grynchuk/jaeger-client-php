<?php
namespace CodeTool\OpenTracing\Jaeger\Thrift\Agent;
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


class Agent_emitBatch_args {
  static $isValidate = false;

  static $_TSPEC = array(
    1 => array(
      'var' => 'batch',
      'isRequired' => false,
      'type' => TType::STRUCT,
      'class' => '\CodeTool\OpenTracing\Jaeger\Thrift\Batch',
      ),
    );

  /**
   * @var \CodeTool\OpenTracing\Jaeger\Thrift\Batch
   */
  public $batch = null;

  public function __construct($vals=null) {
    if (is_array($vals)) {
      if (isset($vals['batch'])) {
        $this->batch = $vals['batch'];
      }
    }
  }

  public function getName() {
    return 'Agent_emitBatch_args';
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
          if ($ftype == TType::STRUCT) {
            $this->batch = new \CodeTool\OpenTracing\Jaeger\Thrift\Batch();
            $xfer += $this->batch->read($input);
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
    $xfer += $output->writeStructBegin('Agent_emitBatch_args');
    if ($this->batch !== null) {
      if (!is_object($this->batch)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('batch', TType::STRUCT, 1);
      $xfer += $this->batch->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

