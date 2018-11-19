<?php

namespace App\Repositories;

use App\Models\Transcation;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TranscationRepository
 * @package App\Repositories
 * @version November 16, 2018, 7:40 am UTC
 *
 * @method Transcation findWithoutFail($id, $columns = ['*'])
 * @method Transcation find($id, $columns = ['*'])
 * @method Transcation first($columns = ['*'])
*/
class TranscationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'qrcode_owner_id',
        'qrcode_id',
        'payment_method',
        'message',
        'amount',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Transcation::class;
    }
}
