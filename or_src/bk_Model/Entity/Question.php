<?php


namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;

/**
 * @property $id
 * @property $hash
 * @property $user_id
 * @property $category_id
 * @property $slug
 * @property $title
 * @property $question
 * @property $keywords
 * @property $created_at
 * @property $is_anonymous
 * @property $is_solved
 */
class Question extends Entity
{
    public function getAnswerCount()
    {
        $answerTable = TableRegistry::getTableLocator()->get('Answer');
        return $answerTable->find()->where(['question_id' => $this->id])->count();
    }

    public function getAnswers($ownerId = 0)
    {
        $answerTable = TableRegistry::getTableLocator()->get('Answer');
        $query = $answerTable->find()->where(['question_id' => $this->id])->contain(['User'])->orderAsc('Answer.created_at');
        if ($ownerId > 0) {
            $query->where(['user_id' => $ownerId]);
        }
        return $query;
    }

    public function getLastExpertAnswer()
    {
        $answerTable = TableRegistry::getTableLocator()->get('Answer');
        return $answerTable->find()->where(['question_id' => $this->id, 'User.position' => 'Expert'])->contain(['User'])->orderDesc('Answer.created_at')->first();
    }

    public function isLiked($userId)
    {
        $questionLikeTable = TableRegistry::getTableLocator()->get('QuestionLike');
        return $questionLikeTable->find()->where(['question_id' => $this->id, 'user_id' => $userId])->count() === 1;
    }

}
