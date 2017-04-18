<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Afeccione
 *
 * @ORM\Table(name="afeccione")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AfeccioneRepository")
 */
class Afeccione
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="procedencia", type="string", length=255)
     */
    private $procedencia;

    /**
     * @var string
     *
     * @ORM\Column(name="diagnostico", type="text")
     */
    private $diagnostico;

    /**
     * @var string
     *
     * @ORM\Column(name="tratamiento", type="text")
     */
    private $tratamiento;

    /**
     * @var string
     *
     * @ORM\Column(name="referencia", type="text")
     */
    private $referencia;
    
         /**
     * @var \Consulta
     *
     * @ORM\ManyToOne(targetEntity="Consulta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="consulta_id", referencedColumnName="id")
     * })
     */
    private $consulta;
    
     /**
     * @var \EntericaElemento
     *
     * @ORM\ManyToOne(targetEntity="EntericaElemento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="enterica_elemento_id", referencedColumnName="id")
     * })
     */
    private $enterica_elemento;
    
    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=255)
     */
    private $codigo;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set procedencia
     *
     * @param string $procedencia
     *
     * @return Afeccione
     */
    public function setProcedencia($procedencia)
    {
        $this->procedencia = $procedencia;

        return $this;
    }

    /**
     * Get procedencia
     *
     * @return string
     */
    public function getProcedencia()
    {
        return $this->procedencia;
    }

    /**
     * Set diagnostico
     *
     * @param string $diagnostico
     *
     * @return Afeccione
     */
    public function setDiagnostico($diagnostico)
    {
        $this->diagnostico = $diagnostico;

        return $this;
    }

    /**
     * Get diagnostico
     *
     * @return string
     */
    public function getDiagnostico()
    {
        return $this->diagnostico;
    }

    /**
     * Set tratamiento
     *
     * @param string $tratamiento
     *
     * @return Afeccione
     */
    public function setTratamiento($tratamiento)
    {
        $this->tratamiento = $tratamiento;

        return $this;
    }

    /**
     * Get tratamiento
     *
     * @return string
     */
    public function getTratamiento()
    {
        return $this->tratamiento;
    }

    /**
     * Set referencia
     *
     * @param string $referencia
     *
     * @return Afeccione
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;

        return $this;
    }

    /**
     * Get referencia
     *
     * @return string
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * Set consulta
     *
     * @param \AppBundle\Entity\Consulta $consulta
     *
     * @return Afeccione
     */
    public function setConsulta(\AppBundle\Entity\Consulta $consulta = null)
    {
        $this->consulta = $consulta;

        return $this;
    }

    /**
     * Get consulta
     *
     * @return \AppBundle\Entity\Consulta
     */
    public function getConsulta()
    {
        return $this->consulta;
    }
   

    /**
     * Set entericaElemento
     *
     * @param \AppBundle\Entity\EntericaElemento $entericaElemento
     *
     * @return Afeccione
     */
    public function setEntericaElemento(\AppBundle\Entity\EntericaElemento $entericaElemento = null)
    {
        $this->enterica_elemento = $entericaElemento;

        return $this;
    }

    /**
     * Get entericaElemento
     *
     * @return \AppBundle\Entity\EntericaElemento
     */
    public function getEntericaElemento()
    {
        return $this->enterica_elemento;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     *
     * @return Afeccione
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }
}
