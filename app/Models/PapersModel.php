<?php
namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
use CodeIgniter\Validation\ValidationInterface;

class PapersModel extends Model
{
    protected $table = 'papers';

    protected $allowedFields = [
        'id',
        'user_id',
        'submission_type',
        'division_id',
        'type_id',
        'title',
        'summary',
        'is_ijmc_interested',
        'is_finalized',
        'active_status',
        'tracks',
        'custom_id'
    ];
    protected $primaryKey = 'id';

    protected $returnType = 'object';

    protected $beforeFind = ['excludeDeletedRecords'];
    private $error;


    public function __construct(?ConnectionInterface $db = null, ?ValidationInterface $validation = null)
    {
        parent::__construct($db, $validation);
    }


    protected function excludeDeletedRecords(array $data){
        if (isset($data['builder']) && empty($data['method'])) {
            $data['builder']->where('deleted', 0);
        }
        return $data;
    }
    public function GetJoinedUser($submission_type)
    {
       try {
           return $this->table('papers')
               ->select('papers.*, u.name as user_name, u.surname as user_surname, u.email as user_email, u.middle_name as user_middle')
                ->join('users u', 'u.id = papers.user_id', 'left')
                ->where('active_status', 1)
                ->where('submission_type =', $submission_type)
                ->get();
            // return $this->findAll();
        } catch (\CodeIgniter\Database\Exceptions\DatabaseException $e) {
            // Log the error or display an error message
           return json_encode('Database error: ' . $e->getMessage());
        }
    }

    public function GetJoinedUserQuery($submission_type)
    {
        try {
            return $this->table('papers')
                ->select('papers.*, u.name as user_name, u.surname as user_surname, u.email as user_email, u.middle_name as user_middle')
                ->join('users u', 'u.id = papers.user_id', 'left')
                ->where('active_status', 1)
                ->where('submission_type =', $submission_type);
            // return $this->findAll();
        } catch (\CodeIgniter\Database\Exceptions\DatabaseException $e) {
            // Log the error or display an error message
            return json_encode('Database error: ' . $e->getMessage());
        }
    }

}