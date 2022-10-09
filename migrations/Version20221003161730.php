<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221003161730 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE partenaires_permissions (partenaires_id INT NOT NULL, permissions_id INT NOT NULL, INDEX IDX_7EA4593B38898CF5 (partenaires_id), INDEX IDX_7EA4593B9C3E4F87 (permissions_id), PRIMARY KEY(partenaires_id, permissions_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE partenaires_permissions ADD CONSTRAINT FK_7EA4593B38898CF5 FOREIGN KEY (partenaires_id) REFERENCES partenaires (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE partenaires_permissions ADD CONSTRAINT FK_7EA4593B9C3E4F87 FOREIGN KEY (permissions_id) REFERENCES permissions (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE partenaires_permissions DROP FOREIGN KEY FK_7EA4593B38898CF5');
        $this->addSql('ALTER TABLE partenaires_permissions DROP FOREIGN KEY FK_7EA4593B9C3E4F87');
        $this->addSql('DROP TABLE partenaires_permissions');
    }
}
