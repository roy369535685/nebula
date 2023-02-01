<?php
namespace Nebula\Raftex;

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

interface RaftexServiceIf
{
    /**
     * @param \Nebula\Raftex\AskForVoteRequest $req
     * @return \Nebula\Raftex\AskForVoteResponse
     */
    public function askForVote(\Nebula\Raftex\AskForVoteRequest $req);
    /**
     * @param \Nebula\Raftex\AppendLogRequest $req
     * @return \Nebula\Raftex\AppendLogResponse
     */
    public function appendLog(\Nebula\Raftex\AppendLogRequest $req);
    /**
     * @param \Nebula\Raftex\SendSnapshotRequest $req
     * @return \Nebula\Raftex\SendSnapshotResponse
     */
    public function sendSnapshot(\Nebula\Raftex\SendSnapshotRequest $req);
    /**
     * @param \Nebula\Raftex\HeartbeatRequest $req
     * @return \Nebula\Raftex\HeartbeatResponse
     */
    public function heartbeat(\Nebula\Raftex\HeartbeatRequest $req);
}
