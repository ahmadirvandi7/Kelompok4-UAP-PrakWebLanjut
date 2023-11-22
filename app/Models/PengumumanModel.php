<?php

namespace App\Models;

use CodeIgniter\Model;

class PengumumanModel extends Model
{
    protected $table            = 'pengumuman';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['title', 'creator_id', 'content', 'attachment_path'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    public $pengumuman = [
        'title' => 'required',
        'content' => 'required',
        'attachment_path' => 'uploaded[attachment_path]|mime_in[attachment_path,image/jpg,image/jpeg,image/png,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document]',
    ];

    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert = [];
    protected $afterInsert = [];
    protected $beforeUpdate = [];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];

    public function getPengumuman($id = null)
    {
        if ($id !== null) {
            return $this->find($id);
        }
        return $this->findAll();
    }

    public function savePengumuman($data)
    {
        return $this->insert($data);
    }

    public function updatePengumuman($data, $id)
    {
        return $this->update($id, $data);
    }

    public function deletePengumuman($id)
    {
        return $this->delete($id);
    }
}
