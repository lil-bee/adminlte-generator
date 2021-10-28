<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePlayerAPIRequest;
use App\Http\Requests\API\UpdatePlayerAPIRequest;
use App\Models\Player;
use App\Repositories\PlayerRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class PlayerController
 * @package App\Http\Controllers\API
 */

class PlayerAPIController extends AppBaseController
{
    /** @var  PlayerRepository */
    private $playerRepository;

    public function __construct(PlayerRepository $playerRepo)
    {
        $this->playerRepository = $playerRepo;
    }

    /**
     * Display a listing of the Player.
     * GET|HEAD /players
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $players = $this->playerRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($players->toArray(), 'Players retrieved successfully');
    }

    /**
     * Store a newly created Player in storage.
     * POST /players
     *
     * @param CreatePlayerAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePlayerAPIRequest $request)
    {
        $input = $request->all();

        $player = $this->playerRepository->create($input);

        return $this->sendResponse($player->toArray(), 'Player saved successfully');
    }

    /**
     * Display the specified Player.
     * GET|HEAD /players/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Player $player */
        $player = $this->playerRepository->find($id);

        if (empty($player)) {
            return $this->sendError('Player not found');
        }

        return $this->sendResponse($player->toArray(), 'Player retrieved successfully');
    }

    /**
     * Update the specified Player in storage.
     * PUT/PATCH /players/{id}
     *
     * @param int $id
     * @param UpdatePlayerAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePlayerAPIRequest $request)
    {
        $input = $request->all();

        /** @var Player $player */
        $player = $this->playerRepository->find($id);

        if (empty($player)) {
            return $this->sendError('Player not found');
        }

        $player = $this->playerRepository->update($input, $id);

        return $this->sendResponse($player->toArray(), 'Player updated successfully');
    }

    /**
     * Remove the specified Player from storage.
     * DELETE /players/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Player $player */
        $player = $this->playerRepository->find($id);

        if (empty($player)) {
            return $this->sendError('Player not found');
        }

        $player->delete();

        return $this->sendSuccess('Player deleted successfully');
    }
}
