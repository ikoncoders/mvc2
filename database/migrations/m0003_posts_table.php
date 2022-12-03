<?php 

use app\core\Application;

class m0003_posts_table {
    public function up()
    {
        $db = Application::$app->db;
        $sql = "CREATE TABLE posts (
                id INT AUTO_INCREMENT PRIMARY KEY,
                title VARCHAR(255) NOT NULL,                               
                status TINYINT DEFAULT 0,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )  ENGINE=INNODB;";
        $db->pdo->exec($sql);
    }

    public function down()
    {
        $db = Application::$app->db;
        $sql = "DROP TABLE posts;";
        $db->pdo->exec($sql);
    }
}