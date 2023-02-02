<?php
namespace Nebula\Meta;

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

class QueryDesc
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'start_time',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        2 => array(
            'var' => 'status',
            'isRequired' => false,
            'type' => TType::I32,
            'class' => '\Nebula\Meta\QueryStatus',
        ),
        3 => array(
            'var' => 'duration',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        4 => array(
            'var' => 'query',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        5 => array(
            'var' => 'graph_addr',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Nebula\Common\HostAddr',
        ),
    );

    /**
     * @var int
     */
    public $start_time = null;
    /**
     * @var int
     */
    public $status = null;
    /**
     * @var int
     */
    public $duration = null;
    /**
     * @var string
     */
    public $query = null;
    /**
     * @var \Nebula\Common\HostAddr
     */
    public $graph_addr = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['start_time'])) {
                $this->start_time = $vals['start_time'];
            }
            if (isset($vals['status'])) {
                $this->status = $vals['status'];
            }
            if (isset($vals['duration'])) {
                $this->duration = $vals['duration'];
            }
            if (isset($vals['query'])) {
                $this->query = $vals['query'];
            }
            if (isset($vals['graph_addr'])) {
                $this->graph_addr = $vals['graph_addr'];
            }
        }
    }

    public function getName()
    {
        return 'QueryDesc';
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
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->start_time);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->status);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->duration);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->query);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::STRUCT) {
                        $this->graph_addr = new \Nebula\Common\HostAddr();
                        $xfer += $this->graph_addr->read($input);
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
        $xfer += $output->writeStructBegin('QueryDesc');
        if ($this->start_time !== null) {
            $xfer += $output->writeFieldBegin('start_time', TType::I64, 1);
            $xfer += $output->writeI64($this->start_time);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->status !== null) {
            $xfer += $output->writeFieldBegin('status', TType::I32, 2);
            $xfer += $output->writeI32($this->status);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->duration !== null) {
            $xfer += $output->writeFieldBegin('duration', TType::I64, 3);
            $xfer += $output->writeI64($this->duration);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->query !== null) {
            $xfer += $output->writeFieldBegin('query', TType::STRING, 4);
            $xfer += $output->writeString($this->query);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->graph_addr !== null) {
            if (!is_object($this->graph_addr)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('graph_addr', TType::STRUCT, 5);
            $xfer += $this->graph_addr->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}