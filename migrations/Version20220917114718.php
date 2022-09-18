<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220917114718 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE permissions ADD partenaires_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE permissions ADD CONSTRAINT FK_2DEDCC6F38898CF5 FOREIGN KEY (partenaires_id) REFERENCES partenaires (id)');
        $this->addSql('CREATE INDEX IDX_2DEDCC6F38898CF5 ON permissions (partenaires_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE permissions DROP FOREIGN KEY FK_2DEDCC6F38898CF5');
        $this->addSql('DROP INDEX IDX_2DEDCC6F38898CF5 ON permissions');
        $this->addSql('ALTER TABLE permissions DROP partenaires_id');
    }
}
