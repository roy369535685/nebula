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

class InternalTxnRequest
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'txn_id',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        2 => array(
            'var' => 'term_of_parts',
            'isRequired' => false,
            'type' => TType::MAP,
            'ktype' => TType::I32,
            'vtype' => TType::I64,
            'key' => array(
                'type' => TType::I32,
            ),
            'val' => array(
                'type' => TType::I64,
                ),
        ),
        3 => array(
            'var' => 'add_edge_req',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Nebula\Storage\AddEdgesRequest',
        ),
        4 => array(
            'var' => 'upd_edge_req',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Nebula\Storage\UpdateEdgeRequest',
        ),
        5 => array(
            'var' => 'edge_ver',
            'isRequired' => false,
            'type' => TType::MAP,
            'ktype' => TType::I32,
            'vtype' => TType::LST,
            'key' => array(
                'type' => TType::I32,
            ),
            'val' => array(
                'type' => TType::LST,
                'etype' => TType::I64,
                'elem' => array(
                    'type' => TType::I64,
                    ),
                ),
        ),
    );

    /**
     * @var int
     */
    public $txn_id = null;
    /**
     * @var array
     */
    public $term_of_parts = null;
    /**
     * @var \Nebula\Storage\AddEdgesRequest
     */
    public $add_edge_req = null;
    /**
     * @var \Nebula\Storage\UpdateEdgeRequest
     */
    public $upd_edge_req = null;
    /**
     * @var array
     */
    public $edge_ver = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['txn_id'])) {
                $this->txn_id = $vals['txn_id'];
            }
            if (isset($vals['term_of_parts'])) {
                $this->term_of_parts = $vals['term_of_parts'];
            }
            if (isset($vals['add_edge_req'])) {
                $this->add_edge_req = $vals['add_edge_req'];
            }
            if (isset($vals['upd_edge_req'])) {
                $this->upd_edge_req = $vals['upd_edge_req'];
            }
            if (isset($vals['edge_ver'])) {
                $this->edge_ver = $vals['edge_ver'];
            }
        }
    }

    public function getName()
    {
        return 'InternalTxnRequest';
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
                        $xfer += $input->readI64($this->txn_id);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::MAP) {
                        $this->term_of_parts = array();
                        $_size448 = 0;
                        $_ktype449 = 0;
                        $_vtype450 = 0;
                        $xfer += $input->readMapBegin($_ktype449, $_vtype450, $_size448);
                        for ($_i452 = 0; $_i452 < $_size448; ++$_i452) {
                            $key453 = 0;
                            $val454 = 0;
                            $xfer += $input->readI32($key453);
                            $xfer += $input->readI64($val454);
                            $this->term_of_parts[$key453] = $val454;
                        }
                        $xfer += $input->readMapEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRUCT) {
                        $this->add_edge_req = new \Nebula\Storage\AddEdgesRequest();
                        $xfer += $this->add_edge_req->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::STRUCT) {
                        $this->upd_edge_req = new \Nebula\Storage\UpdateEdgeRequest();
                        $xfer += $this->upd_edge_req->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::MAP) {
                        $this->edge_ver = array();
                        $_size455 = 0;
                        $_ktype456 = 0;
                        $_vtype457 = 0;
                        $xfer += $input->readMapBegin($_ktype456, $_vtype457, $_size455);
                        for ($_i459 = 0; $_i459 < $_size455; ++$_i459) {
                            $key460 = 0;
                            $val461 = array();
                            $xfer += $input->readI32($key460);
                            $val461 = array();
                            $_size462 = 0;
                            $_etype465 = 0;
                            $xfer += $input->readListBegin($_etype465, $_size462);
                            for ($_i466 = 0; $_i466 < $_size462; ++$_i466) {
                                $elem467 = null;
                                $xfer += $input->readI64($elem467);
                                $val461 []= $elem467;
                            }
                            $xfer += $input->readListEnd();
                            $this->edge_ver[$key460] = $val461;
                        }
                        $xfer += $input->readMapEnd();
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
        $xfer += $output->writeStructBegin('InternalTxnRequest');
        if ($this->txn_id !== null) {
            $xfer += $output->writeFieldBegin('txn_id', TType::I64, 1);
            $xfer += $output->writeI64($this->txn_id);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->term_of_parts !== null) {
            if (!is_array($this->term_of_parts)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('term_of_parts', TType::MAP, 2);
            $output->writeMapBegin(TType::I32, TType::I64, count($this->term_of_parts));
            foreach ($this->term_of_parts as $kiter468 => $viter469) {
                $xfer += $output->writeI32($kiter468);
                $xfer += $output->writeI64($viter469);
            }
            $output->writeMapEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->add_edge_req !== null) {
            if (!is_object($this->add_edge_req)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('add_edge_req', TType::STRUCT, 3);
            $xfer += $this->add_edge_req->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->upd_edge_req !== null) {
            if (!is_object($this->upd_edge_req)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('upd_edge_req', TType::STRUCT, 4);
            $xfer += $this->upd_edge_req->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->edge_ver !== null) {
            if (!is_array($this->edge_ver)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('edge_ver', TType::MAP, 5);
            $output->writeMapBegin(TType::I32, TType::LST, count($this->edge_ver));
            foreach ($this->edge_ver as $kiter470 => $viter471) {
                $xfer += $output->writeI32($kiter470);
                $output->writeListBegin(TType::I64, count($viter471));
                foreach ($viter471 as $iter472) {
                    $xfer += $output->writeI64($iter472);
                }
                $output->writeListEnd();
            }
            $output->writeMapEnd();
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
