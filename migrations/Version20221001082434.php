<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221001082434 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE permissions ADD struct_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE permissions ADD CONSTRAINT FK_2DEDCC6F84EA0FD0 FOREIGN KEY (struct_id) REFERENCES structures (id)');
        $this->addSql('CREATE INDEX IDX_2DEDCC6F84EA0FD0 ON permissions (struct_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE permissions DROP FOREIGN KEY FK_2DEDCC6F84EA0FD0');
        $this->addSql('DROP INDEX IDX_2DEDCC6F84EA0FD0 ON permissions');
        $this->addSql('ALTER TABLE permissions DROP struct_id');
    }
}
