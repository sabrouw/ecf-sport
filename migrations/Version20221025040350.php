<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221025040350 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE permissions_partenaires (permissions_id INT NOT NULL, partenaires_id INT NOT NULL, INDEX IDX_CC5A0C2B9C3E4F87 (permissions_id), INDEX IDX_CC5A0C2B38898CF5 (partenaires_id), PRIMARY KEY(permissions_id, partenaires_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE permissions_partenaires ADD CONSTRAINT FK_CC5A0C2B9C3E4F87 FOREIGN KEY (permissions_id) REFERENCES permissions (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE permissions_partenaires ADD CONSTRAINT FK_CC5A0C2B38898CF5 FOREIGN KEY (partenaires_id) REFERENCES partenaires (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE permissions_partenaires DROP FOREIGN KEY FK_CC5A0C2B9C3E4F87');
        $this->addSql('ALTER TABLE permissions_partenaires DROP FOREIGN KEY FK_CC5A0C2B38898CF5');
        $this->addSql('DROP TABLE permissions_partenaires');
    }
}
