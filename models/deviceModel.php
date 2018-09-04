<?php

class DeviceModel
{
    private $ip = null;
    private $hostname = null;
    private $tipo = null;
    private $fabricante = null;

    public function getIp() {
        return $this->ip;
    }

    public function setIp($ip) {
        $this->ip = $ip;
    }

    public function getHostname() {
        return $this->hostname;
    }

    public function setHostname($hostname) {
        $this->hostname = $hostname;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getFabricante() {
        return $this->fabricante;
    }

    public function setFabricante($fabricante) {
        $this->fabricante = $fabricante;
    }

    public function toJson() {
        return json_encode([
            'ip' => $this->getIp(),
            'hostname' => $this->getHostname(),
            'tipo' => $this->getTipo(),
            'fabricante' => $this->getFabricante()
        ]);
    }
}