<?php 

namespace app\models;

use app\core\Model;

class Contact extends Model 
{
    public string $subject = '';
    public string $email = '';
    public string $content = '';

    public function rules(): array
    {
        // tod implement rules() method
        return [
            'subject'  => [self::RULE_REQUIRED],
            'email'    => [self::RULE_REQUIRED],
            'content'  => [self::RULE_REQUIRED],
        ];
    }

    public function labels(): array 
    {
        return [
            'subject' => 'Subject is required',
            'email'   => 'Email is required',
            'content' => 'Content is required',

        ];
    }
    public function send()
    {
        return true;
    }
}