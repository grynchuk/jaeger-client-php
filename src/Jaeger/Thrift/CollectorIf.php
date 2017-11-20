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


interface CollectorIf {
  /**
   * @param \CodeTool\OpenTracing\Jaeger\Thrift\Batch[] $batches
   * @return \CodeTool\OpenTracing\Jaeger\Thrift\BatchSubmitResponse[]
   */
  public function submitBatches(array $batches);
}


