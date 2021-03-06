<?php

namespace Paysera\Client\TransfersClient\Entity;

use Paysera\Component\RestClientCommon\Entity\Entity;

class TransferInput extends Entity
{
    /**
     * @return Money
     */
    public function getAmount()
    {
        return (new Money())->setDataByReference($this->getByReference('amount'));
    }
    /**
     * @param Money $amount
     * @return $this
     */
    public function setAmount(Money $amount)
    {
        $this->setByReference('amount', $amount->getDataByReference());
        return $this;
    }
    /**
     * @return TransferBeneficiary
     */
    public function getBeneficiary()
    {
        return (new TransferBeneficiary())->setDataByReference($this->getByReference('beneficiary'));
    }
    /**
     * @param TransferBeneficiary $beneficiary
     * @return $this
     */
    public function setBeneficiary(TransferBeneficiary $beneficiary)
    {
        $this->setByReference('beneficiary', $beneficiary->getDataByReference());
        return $this;
    }
    /**
     * @return Payer
     */
    public function getPayer()
    {
        return (new Payer())->setDataByReference($this->getByReference('payer'));
    }
    /**
     * @param Payer $payer
     * @return $this
     */
    public function setPayer(Payer $payer)
    {
        $this->setByReference('payer', $payer->getDataByReference());
        return $this;
    }
    /**
     * @return FinalBeneficiary|null
     */
    public function getFinalBeneficiary()
    {
        return (new FinalBeneficiary())->setDataByReference($this->getByReference('final_beneficiary'));
    }
    /**
     * @param FinalBeneficiary $finalBeneficiary
     * @return $this
     */
    public function setFinalBeneficiary(FinalBeneficiary $finalBeneficiary)
    {
        $this->setByReference('final_beneficiary', $finalBeneficiary->getDataByReference());
        return $this;
    }
    /**
     * @return \DateTimeImmutable|null
     */
    public function getPerformAt()
    {
        return (new \DateTimeImmutable())->setTimestamp($this->get('perform_at'));
    }
    /**
     * @param \DateTimeInterface $performAt
     * @return $this
     */
    public function setPerformAt(\DateTimeInterface $performAt)
    {
        $this->set('perform_at', $performAt->getTimestamp());
        return $this;
    }
    /**
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get('charge_type');
    }
    /**
     * @param string $chargeType
     * @return $this
     */
    public function setChargeType($chargeType)
    {
        $this->set('charge_type', $chargeType);
        return $this;
    }
    /**
     * @return string|null
     */
    public function getUrgency()
    {
        return $this->get('urgency');
    }
    /**
     * @param string $urgency
     * @return $this
     */
    public function setUrgency($urgency)
    {
        $this->set('urgency', $urgency);
        return $this;
    }
    /**
     * @return TransferNotifications|null
     */
    public function getNotifications()
    {
        return (new TransferNotifications())->setDataByReference($this->getByReference('notifications'));
    }
    /**
     * @param TransferNotifications $notifications
     * @return $this
     */
    public function setNotifications(TransferNotifications $notifications)
    {
        $this->setByReference('notifications', $notifications->getDataByReference());
        return $this;
    }
    /**
     * @return TransferPurpose
     */
    public function getPurpose()
    {
        return (new TransferPurpose())->setDataByReference($this->getByReference('purpose'));
    }
    /**
     * @param TransferPurpose $purpose
     * @return $this
     */
    public function setPurpose(TransferPurpose $purpose)
    {
        $this->setByReference('purpose', $purpose->getDataByReference());
        return $this;
    }
    /**
     * @return TransferPassword|null
     */
    public function getPassword()
    {
        return (new TransferPassword())->setDataByReference($this->getByReference('password'));
    }
    /**
     * @param TransferPassword $password
     * @return $this
     */
    public function setPassword(TransferPassword $password)
    {
        $this->setByReference('password', $password->getDataByReference());
        return $this;
    }
    /**
     * @return boolean|null
     */
    public function isCancelable()
    {
        return $this->get('cancelable');
    }
    /**
     * @param boolean $cancelable
     * @return $this
     */
    public function setCancelable($cancelable)
    {
        $this->set('cancelable', $cancelable);
        return $this;
    }
    /**
     * @return boolean|null
     */
    public function isAutoCurrencyConvert()
    {
        return $this->get('auto_currency_convert');
    }
    /**
     * @param boolean $autoCurrencyConvert
     * @return $this
     */
    public function setAutoCurrencyConvert($autoCurrencyConvert)
    {
        $this->set('auto_currency_convert', $autoCurrencyConvert);
        return $this;
    }
    /**
     * @return boolean|null
     */
    public function isAutoChargeRelatedCard()
    {
        return $this->get('auto_charge_related_card');
    }
    /**
     * @param boolean $autoChargeRelatedCard
     * @return $this
     */
    public function setAutoChargeRelatedCard($autoChargeRelatedCard)
    {
        $this->set('auto_charge_related_card', $autoChargeRelatedCard);
        return $this;
    }
    /**
     * @return \DateTimeImmutable|null
     */
    public function getReserveUntil()
    {
        return (new \DateTimeImmutable())->setTimestamp($this->get('reserve_until'));
    }
    /**
     * @param \DateTimeInterface $reserveUntil
     * @return $this
     */
    public function setReserveUntil(\DateTimeInterface $reserveUntil)
    {
        $this->set('reserve_until', $reserveUntil->getTimestamp());
        return $this;
    }
}
