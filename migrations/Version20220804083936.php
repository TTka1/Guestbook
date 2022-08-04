<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220804083936 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {

        $this->addSql('CREATE TABLE sessions (
            sess_id VARCHAR(128) NOT NULL PRIMARY KEY,
            sess_data int(10) NOT NULL,
            sess_lifetime int(10) NOT NULL,
            sess_time int(10) NOT NULL
            )');

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
