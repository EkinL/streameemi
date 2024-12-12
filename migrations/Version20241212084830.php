<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241212084830 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE serie DROP media_type');
        $this->addSql('ALTER TABLE subscription ADD description LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE user ADD roles JSON NOT NULL, ADD reset_token VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE serie ADD media_type VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE subscription DROP description');
        $this->addSql('ALTER TABLE `user` DROP roles, DROP reset_token');
    }
}
