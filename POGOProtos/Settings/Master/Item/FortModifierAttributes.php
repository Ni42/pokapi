<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Settings/Master/Item/FortModifierAttributes.php');

namespace POGOProtos\Settings\Master\Item {

  use Protobuf;
  use ProtobufIO;
  use ProtobufMessage;

  // message POGOProtos.Settings.Master.Item.FortModifierAttributes
  final class FortModifierAttributes extends ProtobufMessage {

    private $_unknown;
    private $modifierLifetimeSeconds = 0; // optional int32 modifier_lifetime_seconds = 1
    private $troyDiskNumPokemonSpawned = 0; // optional int32 troy_disk_num_pokemon_spawned = 2

    public function __construct($in = null, &$limit = PHP_INT_MAX) {
      parent::__construct($in, $limit);
    }

    public function read($fp, &$limit = PHP_INT_MAX) {
      $fp = ProtobufIO::toStream($fp, $limit);
      while(!feof($fp) && $limit > 0) {
        $tag = Protobuf::read_varint($fp, $limit);
        if ($tag === false) break;
        $wire  = $tag & 0x07;
        $field = $tag >> 3;
        switch($field) {
          case 1: // optional int32 modifier_lifetime_seconds = 1
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->modifierLifetimeSeconds = $tmp;

            break;
          case 2: // optional int32 troy_disk_num_pokemon_spawned = 2
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->troyDiskNumPokemonSpawned = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->modifierLifetimeSeconds !== 0) {
        fwrite($fp, "\x08", 1);
        Protobuf::write_varint($fp, $this->modifierLifetimeSeconds);
      }
      if ($this->troyDiskNumPokemonSpawned !== 0) {
        fwrite($fp, "\x10", 1);
        Protobuf::write_varint($fp, $this->troyDiskNumPokemonSpawned);
      }
    }

    public function size() {
      $size = 0;
      if ($this->modifierLifetimeSeconds !== 0) {
        $size += 1 + Protobuf::size_varint($this->modifierLifetimeSeconds);
      }
      if ($this->troyDiskNumPokemonSpawned !== 0) {
        $size += 1 + Protobuf::size_varint($this->troyDiskNumPokemonSpawned);
      }
      return $size;
    }

    public function clearModifierLifetimeSeconds() { $this->modifierLifetimeSeconds = 0; }
    public function getModifierLifetimeSeconds() { return $this->modifierLifetimeSeconds;}
    public function setModifierLifetimeSeconds($value) { $this->modifierLifetimeSeconds = $value; }

    public function clearTroyDiskNumPokemonSpawned() { $this->troyDiskNumPokemonSpawned = 0; }
    public function getTroyDiskNumPokemonSpawned() { return $this->troyDiskNumPokemonSpawned;}
    public function setTroyDiskNumPokemonSpawned($value) { $this->troyDiskNumPokemonSpawned = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('modifier_lifetime_seconds', $this->modifierLifetimeSeconds, 0)
           . Protobuf::toString('troy_disk_num_pokemon_spawned', $this->troyDiskNumPokemonSpawned, 0);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Settings.Master.Item.FortModifierAttributes)
  }

}