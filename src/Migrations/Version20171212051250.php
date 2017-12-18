<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20171212051250 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf('mysql' !== $this->connection->getDatabasePlatform()->getName(), 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE kawula_users (id CHAR(36) NOT NULL COMMENT \'(DC2Type:guid)\', full_name VARCHAR(33) NOT NULL, profile_picture VARCHAR(255) NOT NULL, username VARCHAR(27) NOT NULL, password VARCHAR(64) NOT NULL, email VARCHAR(60) NOT NULL, roles JSON NOT NULL, is_active TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_98124599F85E0677 (username), UNIQUE INDEX UNIQ_98124599E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf('mysql' !== $this->connection->getDatabasePlatform()->getName(), 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE kawula_users');
    }
}
