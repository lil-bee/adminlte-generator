<?php

namespace App\Repositories;

use App\Models\Player;
use App\Repositories\BaseRepository;

/**
 * Class PlayerRepository
 * @package App\Repositories
 * @version October 28, 2021, 3:53 pm UTC
*/

class PlayerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Name',
        'Position',
        'Shirt_Number',
        'Nationality'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Player::class;
    }
}
