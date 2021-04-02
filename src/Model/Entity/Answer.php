<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;

class Answer extends Entity
{
    public function isLiked($userId)
    {
        $answerLikeTable = TableRegistry::getTableLocator()->get('AnswerLike');
        return $answerLikeTable->find()->where(['answer_id' => $this->id, 'user_id' => $userId])->count() === 1;
    }

    public function getLikeCount()
    {
        $answerLikeTable = TableRegistry::getTableLocator()->get('AnswerLike');
        return $answerLikeTable->find()->where(['answer_id' => $this->id])->count();
    }

}
