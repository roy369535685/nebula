<?php
namespace Nebula\Storage;

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

class EdgeKey
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'src',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Nebula\Common\Value',
        ),
        2 => array(
            'var' => 'edge_type',
            'isRequired' => false,
            'type' => TType::I32,
        ),
        3 => array(
            'var' => 'ranking',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        4 => array(
            'var' => 'dst',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Nebula\Common\Value',
        ),
    );

    /**
     * @var \Nebula\Common\Value
     */
    public $src = null;
    /**
     * @var int
     */
    public $edge_type = null;
    /**
     * @var int
     */
    public $ranking = null;
    /**
     * @var \Nebula\Common\Value
     */
    public $dst = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['src'])) {
                $this->src = $vals['src'];
            }
            if (isset($vals['edge_type'])) {
                $this->edge_type = $vals['edge_type'];
            }
            if (isset($vals['ranking'])) {
                $this->ranking = $vals['ranking'];
            }
            if (isset($vals['dst'])) {
                $this->dst = $vals['dst'];
            }
        }
    }

    public function getName()
    {
        return 'EdgeKey';
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
                    if ($ftype == TType::STRUCT) {
                        $this->src = new \Nebula\Common\Value();
                        $xfer += $this->src->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->edge_type);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->ranking);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::STRUCT) {
                        $this->dst = new \Nebula\Common\Value();
                        $xfer += $this->dst->read($input);
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
        $xfer += $output->writeStructBegin('EdgeKey');
        if ($this->src !== null) {
            if (!is_object($this->src)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('src', TType::STRUCT, 1);
            $xfer += $this->src->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->edge_type !== null) {
            $xfer += $output->writeFieldBegin('edge_type', TType::I32, 2);
            $xfer += $output->writeI32($this->edge_type);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->ranking !== null) {
            $xfer += $output->writeFieldBegin('ranking', TType::I64, 3);
            $xfer += $output->writeI64($this->ranking);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->dst !== null) {
            if (!is_object($this->dst)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('dst', TType::STRUCT, 4);
            $xfer += $this->dst->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
