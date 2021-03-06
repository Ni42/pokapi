<?php
namespace Pokapi;

use POGOProtos\Networking\Responses\DownloadSettingsResponse;
use POGOProtos\Networking\Responses\GetInventoryResponse;
use POGOProtos\Networking\Responses\GetMapObjectsResponse;
use POGOProtos\Networking\Responses\GetPlayerResponse;
use POGOProtos\Networking\Responses\MarkTutorialCompleteResponse;
use Pokapi\Authentication\Provider;
use Pokapi\Request\DeviceInfo;
use Pokapi\Request\Position;
use Pokapi\Rpc\Request;
use Pokapi\Rpc\Requests\CheckAwardedBadges;
use Pokapi\Rpc\Requests\DownloadSettings;
use Pokapi\Rpc\Requests\GetHatchedEggs;
use Pokapi\Rpc\Requests\GetInventory;
use Pokapi\Rpc\Requests\GetMapObjects;
use Pokapi\Rpc\Requests\GetPlayer;
use Pokapi\Rpc\Requests\MarkTutorialComplete;
use Pokapi\Rpc\Service;

/**
 * Class API
 *
 * @package Pokapi
 * @author Freek Post <freek@kobalt.blue>
 */
class API
{

    /**
     * @var Position
     */
    protected $position;

    /**
     * @var DeviceInfo
     */
    protected $deviceInfo;

    /**
     * @var Service
     */
    protected $service;

    /**
     * API constructor.
     *
     * @param Provider $authProvider
     * @param Position $position
     * @param DeviceInfo $deviceInfo
     */
    public function __construct(Provider $authProvider, Position $position, DeviceInfo $deviceInfo)
    {
        $this->service = new Service($authProvider, $deviceInfo);
        $this->position = $position;
        $this->deviceInfo = $deviceInfo;
    }

    /**
     * Sets the device information
     *
     * @param DeviceInfo $deviceInfo
     *
     * @return API
     */
    public function setDeviceInfo(DeviceInfo $deviceInfo) : self
    {
        $this->deviceInfo = $deviceInfo;
        return $this;
    }

    /**
     * Set the position
     *
     * @param Position $position
     *
     * @return API
     */
    public function setPosition(Position $position) : self
    {
        $this->position = $position;
        return $this;
    }

    /**
     * Initialize
     *
     * @return array
     */
    public function initialize()
    {
        $messages = [
            new GetPlayer(),
            new GetHatchedEggs(),
            new GetInventory(),
            new CheckAwardedBadges(),
            new DownloadSettings(),
        ];

        $collection = $this->service->batchExecute(
            $messages,
            $this->position
        );

        $responses = [];
        foreach ($collection as $response) {
            $responses[] = $response;
        }

        return array_map(function($response, Request $message){
            return $message->getResponse($response);
        }, $responses, $messages);
    }

    /**
     * Accept the terms
     *
     * @return MarkTutorialCompleteResponse
     */
    public function acceptTerms() : MarkTutorialCompleteResponse
    {
        $request = new MarkTutorialComplete();
        return $this->service->execute($request, $this->position);
    }

    /**
     * Get player data
     *
     * @return GetPlayerResponse
     */
    public function getPlayerData() : GetPlayerResponse
    {
        $request = new GetPlayer();
        return $this->service->execute($request, $this->position);
    }

    /**
     * Get player inventory
     *
     * @return GetInventoryResponse
     */
    public function getInventory() : GetInventoryResponse
    {
        $request = new GetInventory();
        return $this->service->execute($request, $this->position);
    }

    /**
     * Download settings
     *
     * @return DownloadSettingsResponse
     */
    public function downloadSettings() : DownloadSettingsResponse
    {
        $request = new DownloadSettings();
        return $this->service->execute($request, $this->position);
    }

    /**
     * Get map objets
     *
     * @return GetMapObjectsResponse
     */
    public function getMapObjects() : GetMapObjectsResponse
    {
        $request = new GetMapObjects($this->position);
        return $this->service->execute($request, $this->position);
    }

    /**
     * Get the Rpc service
     *
     * @return Service
     */
    public function getService() : Service
    {
        return $this->service;
    }
}
