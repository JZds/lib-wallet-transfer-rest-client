<?php

namespace Paysera\Client\TransfersClient\Entity;

use Paysera\Component\RestClientCommon\Entity\Entity;

class OutCommissionRule extends Entity
{
    /**
     * @return string|null
     */
    public function getPercent()
    {
        return $this->get('percent');
    }
    /**
     * @param string $percent
     * @return $this
     */
    public function setPercent($percent)
    {
        $this->set('percent', $percent);
        return $this;
    }
    /**
     * @return Money|null
     */
    public function getMin()
    {
        return (new Money())->setDataByReference($this->getByReference('min'));
    }
    /**
     * @param Money $min
     * @return $this
     */
    public function setMin(Money $min)
    {
        $this->setByReference('min', $min->getDataByReference());
        return $this;
    }
    /**
     * @return Money|null
     */
    public function getMax()
    {
        return (new Money())->setDataByReference($this->getByReference('max'));
    }
    /**
     * @param Money $max
     * @return $this
     */
    public function setMax(Money $max)
    {
        $this->setByReference('max', $max->getDataByReference());
        return $this;
    }
    /**
     * @return Money|null
     */
    public function getFix()
    {
        return (new Money())->setDataByReference($this->getByReference('fix'));
    }
    /**
     * @param Money $fix
     * @return $this
     */
    public function setFix(Money $fix)
    {
        $this->setByReference('fix', $fix->getDataByReference());
        return $this;
    }
}
