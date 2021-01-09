<?php


namespace app\models;


use Voronkovich\SberbankAcquiring\Client;

class CronClient extends Client
{
    /**
     * Переопределенный метод для регулярного поиска заказов по номеру из базы транзакций
     * @param string $orderId
     * @param array $data
     * @return array
     * @throws \Voronkovich\SberbankAcquiring\Exception\NetworkException
     */
    public function getOrderStatusExtended($orderId, array $data = array())
    {
        $data['orderNumber'] = $orderId;

        return $this->execute('getOrderStatusExtended.do', $data);
    }
}