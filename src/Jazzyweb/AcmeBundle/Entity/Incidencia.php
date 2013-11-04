<?php

namespace Jazzyweb\AcmeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Incidencia
 */
class Incidencia
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $observaciones;

    /**
     * @var string
     */
    private $estado;

    /**
     * @var string
     */
    private $prioridad;

    /**
     * @var string
     */
    private $importancia;

    /**
     * @var boolean
     */
    private $reincidente;

    /**
     * @var \DateTime
     */
    private $fechaApertura;

    /**
     * @var \DateTime
     */
    private $fechaCierre;

    /**
     * @var \Jazzyweb\UserBundle\Entity\Group
     */
    private $departamento;

    /**
     * @var \Jazzyweb\UserBundle\Entity\User
     */
    private $usuario;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Incidencia
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Incidencia
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;
    
        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Incidencia
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set prioridad
     *
     * @param string $prioridad
     * @return Incidencia
     */
    public function setPrioridad($prioridad)
    {
        $this->prioridad = $prioridad;
    
        return $this;
    }

    /**
     * Get prioridad
     *
     * @return string 
     */
    public function getPrioridad()
    {
        return $this->prioridad;
    }

    /**
     * Set importancia
     *
     * @param string $importancia
     * @return Incidencia
     */
    public function setImportancia($importancia)
    {
        $this->importancia = $importancia;
    
        return $this;
    }

    /**
     * Get importancia
     *
     * @return string 
     */
    public function getImportancia()
    {
        return $this->importancia;
    }

    /**
     * Set reincidente
     *
     * @param boolean $reincidente
     * @return Incidencia
     */
    public function setReincidente($reincidente)
    {
        $this->reincidente = $reincidente;
    
        return $this;
    }

    /**
     * Get reincidente
     *
     * @return boolean 
     */
    public function getReincidente()
    {
        return $this->reincidente;
    }

    /**
     * Set fechaApertura
     *
     * @param \DateTime $fechaApertura
     * @return Incidencia
     */
    public function setFechaApertura($fechaApertura)
    {
        $this->fechaApertura = $fechaApertura;
    
        return $this;
    }

    /**
     * Get fechaApertura
     *
     * @return \DateTime 
     */
    public function getFechaApertura()
    {
        return $this->fechaApertura;
    }

    /**
     * Set fechaCierre
     *
     * @param \DateTime $fechaCierre
     * @return Incidencia
     */
    public function setFechaCierre($fechaCierre)
    {
        $this->fechaCierre = $fechaCierre;
    
        return $this;
    }

    /**
     * Get fechaCierre
     *
     * @return \DateTime 
     */
    public function getFechaCierre()
    {
        return $this->fechaCierre;
    }





    /**
     * Set departamento
     *
     * @param \Jazzyweb\UserBundle\Entity\Group $departamento
     * @return Incidencia
     */
    public function setDepartamento(\Jazzyweb\UserBundle\Entity\Group $departamento = null)
    {
        $this->departamento = $departamento;
    
        return $this;
    }

    /**
     * Get departamento
     *
     * @return \Jazzyweb\UserBundle\Entity\Group 
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * Set usuario
     *
     * @param \Jazzyweb\UserBundle\Entity\User $usuario
     * @return Incidencia
     */
    public function setUsuario(\Jazzyweb\UserBundle\Entity\User $usuario = null)
    {
        $this->usuario = $usuario;
    
        return $this;
    }

    /**
     * Get usuario
     *
     * @return \Jazzyweb\UserBundle\Entity\User 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}